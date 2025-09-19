<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
        // Redirect if already authenticated
        if (Auth::check()) {
            return $this->redirectBasedOnRole();
        }

        return view('auth.signin');
    }

    public function login(Request $request)
    {
        try {
            // Validate the request
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:255',
                'password' => 'required|string|min:8',
                'regex:/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/',
                'remember' => 'boolean'
            ], [
                'email.required' => 'Email address is required.',
                'email.email' => 'Please enter a valid email address.',
                'password.required' => 'Password is required.',
                'password.min' => 'Password must be at least 8 characters.',
                'password.regex' => 'Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;\':",./<>?).'
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
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors($validator);
            }

            // Check if user exists and is active
            $user = User::where('email', $request->email)
                ->where('status', 1)
                ->first();

            if (!$user) {
                $errorMessage = 'These credentials do not match our records or account is inactive.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'errors' => ['email' => [$errorMessage]]
                    ], 401);
                }

                return redirect()->back()
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors(['email' => $errorMessage]);
            }

            // Attempt authentication
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');

            if (Auth::attempt($credentials, $remember)) {
                // Regenerate session to prevent session fixation
                $request->session()->regenerate();

                // Log successful login
                Log::info('User logged in successfully', [
                    'user_id' => Auth::id(),
                    'email' => Auth::user()->email,
                    'role_id' => Auth::user()->role_id,
                    'ip' => $request->ip(),
                    'user_agent' => $request->userAgent()
                ]);

                // AJAX response
                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Login successful!',
                        'redirect' => $this->getRedirectUrl(),
                        'user' => [
                            'id' => Auth::user()->id,
                            'name' => Auth::user()->name,
                            'email' => Auth::user()->email,
                            'role_id' => Auth::user()->role_id
                        ]
                    ]);
                }

                // Regular redirect
                return $this->redirectBasedOnRole();
            } else {
                $errorMessage = 'The provided credentials are incorrect.';

                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $errorMessage,
                        'errors' => ['password' => [$errorMessage]]
                    ], 401);
                }

                return redirect()->back()
                    ->withInput($request->only('email', 'remember'))
                    ->withErrors(['password' => $errorMessage]);
            }
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage(), [
                'email' => $request->email,
                'ip' => $request->ip(),
                'trace' => $e->getTraceAsString()
            ]);

            $errorMessage = 'An error occurred during login. Please try again.';

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                    'errors' => ['general' => [$errorMessage]]
                ], 500);
            }

            return redirect()->back()
                ->withInput($request->only('email', 'remember'))
                ->withErrors(['error' => $errorMessage]);
        }
    }

    public function logout(Request $request)
    {
        try {
            // Log the logout
            Log::info('User logged out', [
                'user_id' => Auth::id(),
                'email' => Auth::user()->email ?? 'unknown',
                'ip' => $request->ip()
            ]);

            // Logout the user
            Auth::logout();

            // Invalidate the session
            $request->session()->invalidate();

            // Regenerate CSRF token
            $request->session()->regenerateToken();

            // AJAX response
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Logged out successfully!',
                    'redirect' => route('login')
                ]);
            }

            // Regular redirect
            return redirect()->route('login')->with('success', 'You have been logged out successfully.');
        } catch (\Exception $e) {
            Log::error('Logout error: ' . $e->getMessage());

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred during logout.'
                ], 500);
            }

            return redirect()->route('login');
        }
    }

    private function getRedirectUrl()
    {
        $user = Auth::user();

        switch ($user->role_id) {
            case 1: // SuperAdmin
                return route('admin.dashboard');
            case 2: // Admin
                return route('school.profile');
            default:
                return route('dashboard');
        }
    }

    private function redirectBasedOnRole()
    {
        return redirect()->intended($this->getRedirectUrl());
    }

}
