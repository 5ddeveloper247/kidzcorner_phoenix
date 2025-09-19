<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class PasswordResetController extends Controller
{
    
    public function showForgotPasswordForm()
    {
        return view('auth.forgot_password');
    }

    
    public function sendResetLink(Request $request)
    {
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:255|exists:users,email'
            ], [
                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.exists' => 'We could not find a user with that email address.'
            ]);

            if ($validator->fails()) {
                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Validation failed',
                        'errors' => $validator->errors()
                    ], 422);
                }

                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors($validator);
            }

            // Check if user exists and is active
            $user = User::where('email', $request->email)
                ->where('status', 1)
                ->first();

            if (!$user) {
                $errorMessage = 'We could not find an active account with that email address.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'errors' => ['email' => [$errorMessage]]
                    ], 404);
                }

                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => $errorMessage]);
            }

            // Generate reset token
            $token = Str::random(64);

            // Store/Update the token in database
            DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $request->email],
                [
                    'email' => $request->email,
                    'token' => Hash::make($token),
                    'created_at' => Carbon::now()
                ]
            );

            // Send reset email
            $resetUrl = route('password.reset', ['token' => $token, 'email' => $request->email]);
            
            try {
                Mail::send('email.reset_password_email', [
                    'user' => $user,
                    'resetUrl' => $resetUrl,
                    'token' => $token
                ], function ($message) use ($request) {
                    $message->to($request->email);
                    $message->subject('Reset Password - School Management System');
                });

                // Log successful password reset request
                Log::info('Password reset email sent', [
                    'email' => $request->email,
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent()
                ]);

                $successMessage = 'We have sent you a password reset link to your email address.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => true,
                        'message' => $successMessage
                    ]);
                }

                return redirect()->back()->with('success', $successMessage);

            } catch (\Exception $mailException) {
                Log::error('Failed to send password reset email', [
                    'email' => $request->email,
                    'error' => $mailException->getMessage()
                ]);

                $errorMessage = 'Failed to send reset email. Please try again later.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage
                    ], 500);
                }

                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => $errorMessage]);
            }

        } catch (\Exception $e) {
            Log::error('Password reset request error: ' . $e->getMessage(), [
                'email' => $request->email ?? 'unknown',
                'ip' => $request->ip(),
                'trace' => $e->getTraceAsString()
            ]);

            $errorMessage = 'An error occurred. Please try again.';

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage
                ], 500);
            }

            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['error' => $errorMessage]);
        }
    }

    public function showResetPasswordForm(Request $request, $token)
    {
        $email = $request->query('email');
        
        if (!$email || !$token) {
            return redirect()->route('login')->with('error', 'Invalid reset link.');
        }

        // Verify token exists and is not expired (24 hours)
        $resetRecord = DB::table('password_reset_tokens')
            ->where('email', $email)
            ->first();

        if (!$resetRecord || Carbon::parse($resetRecord->created_at)->addHours(24)->isPast()) {
            return redirect()->route('login')->with('error', 'This password reset link has expired.');
        }

        return view('auth.reset_password', ['token' => $token, 'email' => $email]);
    }

    public function resetPassword(Request $request)
    {
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'token' => 'required',
                'email' => 'required|email|exists:users,email',
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'confirmed',
                    'regex:/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/'
                ],
                'password_confirmation' => 'required'
            ], [
                'token.required' => 'Reset token is required.',
                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.exists' => 'We could not find a user with that email address.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters long.',
                'password.confirmed' => 'Password confirmation does not match.',
                'password.regex' => 'Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;\':",./<>?).',
                'password_confirmation.required' => 'Password confirmation is required.'
            ]);

            if ($validator->fails()) {
                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Validation failed',
                        'errors' => $validator->errors()
                    ], 422);
                }

                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors($validator);
            }

            // Find the password reset record
            $resetRecord = DB::table('password_reset_tokens')
                ->where('email', $request->email)
                ->first();

            if (!$resetRecord) {
                $errorMessage = 'Invalid reset token.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'errors' => ['token' => [$errorMessage]]
                    ], 400);
                }

                return redirect()->back()->withErrors(['token' => $errorMessage]);
            }

            // Check if token is expired (24 hours)
            if (Carbon::parse($resetRecord->created_at)->addHours(24)->isPast()) {
                $errorMessage = 'This password reset link has expired.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'errors' => ['token' => [$errorMessage]]
                    ], 400);
                }

                return redirect()->route('login')->with('error', $errorMessage);
            }

            // Verify token
            if (!Hash::check($request->token, $resetRecord->token)) {
                $errorMessage = 'Invalid reset token.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'errors' => ['token' => [$errorMessage]]
                    ], 400);
                }

                return redirect()->back()->withErrors(['token' => $errorMessage]);
            }

            // Update user password
            $user = User::where('email', $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();

            // Delete the reset token
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();

            // Log successful password reset
            Log::info('Password reset successful', [
                'user_id' => $user->id,
                'email' => $user->email,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);

            $successMessage = 'Your password has been reset successfully. You can now login with your new password.';

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMessage,
                    'redirect' => route('login')
                ]);
            }

            return redirect()->route('login')->with('success', $successMessage);

        } catch (\Exception $e) {
            Log::error('Password reset error: ' . $e->getMessage(), [
                'email' => $request->email ?? 'unknown',
                'ip' => $request->ip(),
                'trace' => $e->getTraceAsString()
            ]);

            $errorMessage = 'An error occurred while resetting your password. Please try again.';

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage
                ], 500);
            }

            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['error' => $errorMessage]);
        }
    }
}