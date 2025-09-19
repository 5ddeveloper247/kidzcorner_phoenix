<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AdminController extends Controller
{
    // Show companies listing page 
    public function showSchoolsList()
    {
        return view('admin.company.companies');
    }

    // Show add school form page
    public function showAddSchoolForm()
    {
        return view('admin.company.add_school');
    }

    // Show edit school form page
    public function showEditSchoolForm($id)
    {
        try {
            $school = Company::findOrFail($id);
            return view('admin.company.edit_school', compact('school'));
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard')->with('error', 'School not found.');
        }
    }

    public function addSchool(Request $request)
    {
        // Start database transaction
        DB::beginTransaction();

        try {
            // Validate the input
            $validatedData = $request->validate([
                'name'              => 'required|string|min:2|max:255',
                'email'             => 'required|email|unique:users,email|max:255',
                'password'          => 'required|string|min:8|confirmed',
                'regex:/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/',
                'phone'             => 'required|string|min:10|max:20',
                'country'           => 'required|string|max:100',
                'address'           => 'nullable|string|max:500',
                'logo'              => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048', // 2MB max
            ], [
                'name.required'         => 'The school name is required.',
                'name.min'              => 'The school name must be at least 2 characters.',
                'name.max'              => 'The school name may not be greater than 255 characters.',
                'email.required'        => 'The email address is required.',
                'email.email'           => 'Please provide a valid email address.',
                'email.unique'          => 'This email address is already registered.',
                'email.max'             => 'The email may not be greater than 255 characters.',
                'password.required'     => 'The password is required.',
                'password.min'          => 'The password must be at least 8 characters.',
                'password.regex' => 'Password must contain at least one special character (!@#$%^&*()_+-=[]{}|;\':",./<>?).',
                'password.confirmed'    => 'The password confirmation does not match.',
                'phone.required'        => 'The phone number is required.',
                'phone.min'             => 'The phone number must be at least 10 digits.',
                'phone.max'             => 'The phone number may not be greater than 20 digits.',
                'country.required'      => 'Please select a country.',
                'country.max'           => 'The country name may not be greater than 100 characters.',
                'logo.image'            => 'The logo must be an image file.',
                'logo.mimes'            => 'The logo must be a jpeg, jpg, png, or gif file.',
                'logo.max'              => 'The logo may not be greater than 2MB.',
            ]);

            // Handle logo upload
            $logoPath = null;
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $filename = 'school_logo_' . time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();
                $logoPath = $logo->storeAs('school_logos', $filename, 'public');
            }

            // Create company record
            $school = Company::create([
                'name'     => $validatedData['name'],
                'email'    => $validatedData['email'],
                'phone'    => $validatedData['phone'],
                'country'  => $validatedData['country'],
                'address'  => $validatedData['address'],
                'logo'     => $logoPath,
            ]);

            // Create user record with company_id and role
            $user = User::create([
                'name'       => $validatedData['name'],
                'email'      => $validatedData['email'],
                'password'   => Hash::make($validatedData['password']),
                'company_id' => $school->id,
                'role'       => 'school',
                'status'     => 1,
                'role_id'    => 2,
                'avatar'     => $logoPath,
            ]);

            // Commit transaction
            DB::commit();

            // Return JSON response for AJAX requests
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'School added successfully!',
                    'redirect' => route('admin.dashboard'),
                    'school' => [
                        'id' => $school->id,
                        'name' => $school->name,
                        'email' => $school->email,
                        'phone' => $school->phone,
                        'country' => $school->country,
                        'address' => $school->address,
                        'logo' => $school->logo ? asset('storage/' . $school->logo) : null,
                        'created_at' => $school->created_at->format('M d, Y')
                    ]
                ], 201);
            }

            // Redirect back to companies page with success message
            return redirect()->route('admin.dashboard')->with('success', 'School added successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Rollback transaction
            DB::rollback();

            // Return validation errors for AJAX
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }

            // Fallback for regular form submission
            return redirect()->back()
                ->withInput()
                ->withErrors($e->errors());
        } catch (\Exception $e) {
            // Rollback transaction
            DB::rollback();

            // Delete uploaded file if exists
            if (isset($logoPath) && $logoPath && Storage::disk('public')->exists($logoPath)) {
                Storage::disk('public')->delete($logoPath);
            }

            // Log the error for debugging
            Log::error('Error adding school: ' . $e->getMessage(), [
                'request_data' => $request->except(['password', 'password_confirmation', 'logo']),
                'user_id' => Auth::id() ?? 'guest',
                'trace' => $e->getTraceAsString()
            ]);

            // Return error for AJAX
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An unexpected error occurred while adding the school. Please try again.',
                    'errors' => ['general' => ['An unexpected error occurred. Please try again.']]
                ], 500);
            }

            // Fallback for regular form submission
            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while adding the school. Please try again.']);
        }
    }

    public function getSchoolsDataTable(Request $request)
    {
        $schools = Company::select(['id', 'name', 'email', 'phone', 'country', 'address', 'logo', 'created_at']);

        // Apply filters
        if ($request->filled('country')) {
            $schools->where('country', $request->country);
        }

        if ($request->filled('date_from')) {
            $schools->where('created_at', '>=', Carbon::parse($request->date_from)->startOfDay());
        }

        if ($request->filled('date_to')) {
            $schools->where('created_at', '<=', Carbon::parse($request->date_to)->endOfDay());
        }

        

        return DataTables::of($schools)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format('M d, Y');
            })
            ->editColumn('name', function ($row) {
                $logoHtml = '';
                if ($row->logo) {
                    $logoHtml = '<img src="' . asset('storage/' . $row->logo) . '" class="rounded-circle me-2" width="30" height="30" alt="Logo">';
                } else {
                    $logoHtml = '<div class="bg-light rounded-circle me-2 d-inline-flex align-items-center justify-content-center" style="width: 30px; height: 30px; font-size: 12px; color: #666;">' . strtoupper(substr($row->name, 0, 1)) . '</div>';
                }
                return $logoHtml . htmlspecialchars($row->name);
            })
            ->editColumn('address', function ($row) {
                if (empty($row->address)) {
                    return '<span class="text-muted">Not provided</span>';
                }
                return strlen($row->address) > 50 ?
                    '<span title="' . htmlspecialchars($row->address) . '" data-bs-toggle="tooltip">' .
                    htmlspecialchars(substr($row->address, 0, 50)) . '...</span>' :
                    htmlspecialchars($row->address);
            })
            ->editColumn('email', function ($row) {
                return '<a href="mailto:' . $row->email . '" class="text-decoration-none">' . $row->email . '</a>';
            })
            ->editColumn('phone', function ($row) {
                return '<a href="tel:' . $row->phone . '" class="text-decoration-none">' . $row->phone . '</a>';
            })
            ->addColumn('action', function ($row) {
                $editBtn = '<a href="' . route('edit_school', $row->id) . '" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip" title="Edit School">
                    <i class="bx bx-edit"></i>
                </a>';

                $changePasswordBtn = '<button type="button" class="btn btn-outline-warning btn-sm" onclick="openChangePasswordModal(' . $row->id . ', \'' . addslashes($row->name) . '\')" data-bs-toggle="tooltip" title="Change Password">
                <i class="bx bx-key"></i>
                </button>';

                $deleteBtn = '<button type="button" class="btn btn-outline-danger btn-sm" onclick="deleteSchool(' . $row->id . ')" data-bs-toggle="tooltip" title="Delete School">
                    <i class="bx bx-trash"></i>
                </button>';

                return '<div class="action-buttons">' . $editBtn . ' ' . $changePasswordBtn . ' ' . $deleteBtn . '</div>';
            })
            ->rawColumns(['action', 'address', 'email', 'phone', 'name'])
            ->make(true);
    }

    // New method to get unique countries for filter dropdown
    public function getCountries()
    {
        try {
            $countries = Company::select('country')
                ->distinct()
                ->whereNotNull('country')
                ->where('country', '!=', '')
                ->orderBy('country')
                ->pluck('country');

            return response()->json([
                'success' => true,
                'countries' => $countries
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error fetching countries'
            ], 500);
        }
    }


    public function updateSchool(Request $request, $id)
    {
        // Start database transaction
        DB::beginTransaction();

        try {
            $school = Company::findOrFail($id);

            // Validate the input
            $validatedData = $request->validate([
                'name'      => 'required|string|min:2|max:255',
                'email'     => 'required|email|unique:users,email,' . $school->user->id . '|max:255',
                'phone'     => 'required|string|min:10|max:20',
                'country'   => 'required|string|max:100',
                'address'   => 'nullable|string|max:500',
                'logo'      => 'nullable|image|mimes:jpeg,jpg,png,gif|max:2048',
            ]);

            // Handle logo upload
            $logoPath = $school->logo;
            if ($request->hasFile('logo')) {
                // Delete old logo if exists
                if ($school->logo && Storage::disk('public')->exists($school->logo)) {
                    Storage::disk('public')->delete($school->logo);
                }

                $logo = $request->file('logo');
                $filename = 'school_logo_' . time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();
                $logoPath = $logo->storeAs('school_logos', $filename, 'public');
            }

            // Update school
            $school->update([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'country' => $validatedData['country'],
                'address' => $validatedData['address'],
                'logo' => $logoPath,
            ]);

            // Update corresponding user record
            $school->user->update([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'avatar' => $logoPath,
            ]);

            // Commit transaction
            DB::commit();

            // Return JSON response for AJAX requests
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'School updated successfully!',
                    'redirect' => route('admin.dashboard'),
                    'school' => $school
                ]);
            }

            // Redirect back to companies page with success message
            return redirect()->route('admin.dashboard')->with('success', 'School updated successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Rollback transaction
            DB::rollback();

            // Return validation errors for AJAX
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()
                ->withInput()
                ->withErrors($e->errors());
        } catch (\Exception $e) {
            // Rollback transaction
            DB::rollback();

            // Return error for AJAX
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while updating the school'
                ], 500);
            }

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while updating the school. Please try again.']);
        }
    }

    public function destroySchool($id)
    {
        // Start database transaction
        DB::beginTransaction();

        try {
            $school = Company::findOrFail($id);

            // Delete logo if exists
            if ($school->logo && Storage::disk('public')->exists($school->logo)) {
                Storage::disk('public')->delete($school->logo);
            }

            // Delete associated user first (due to foreign key constraint)
            if ($school->user) {
                $school->user->delete();
            }

            // Delete school
            $school->delete();

            // Commit transaction
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'School deleted successfully'
            ]);
        } catch (\Exception $e) {
            // Rollback transaction
            DB::rollback();

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the school'
            ], 500);
        }
    }

    public function viewSchool($id)
    {
        try {
            $school = Company::with('user')->findOrFail($id);
            return response()->json([
                'success' => true,
                'school' => $school
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'School not found'
            ], 404);
        }
    }

    public function updateProfile(Request $request)
    {
        DB::beginTransaction();

        try {
            $user = Auth::user();

            // Validate the input
            $validatedData = $request->validate([
                'name'      => 'required|string|min:2|max:255',
                'phone'     => 'required|string|min:10|max:20',
                'country'   => 'required|string|max:100',
                'address'   => 'nullable|string|max:500',
            ], [
                'name.required'         => 'The full name is required.',
                'name.min'              => 'The name must be at least 2 characters.',
                'name.max'              => 'The name may not be greater than 255 characters.',
                'phone.required'        => 'The phone number is required.',
                'phone.min'             => 'The phone number must be at least 10 digits.',
                'phone.max'             => 'The phone number may not be greater than 20 digits.',
                'country.required'      => 'Please select a country.',
                'country.max'           => 'The country name may not be greater than 100 characters.',
                'address.max'           => 'The address may not be greater than 500 characters.',
            ]);

            // Update user name
            $user->update([
                'name' => $validatedData['name']
            ]);

            // Update company information if exists
            if ($user->company) {
                $user->company->update([
                    'name'     => $validatedData['name'],
                    'phone'    => $validatedData['phone'],
                    'country'  => $validatedData['country'],
                    'address'  => $validatedData['address'],
                ]);
            }

            DB::commit();

            // Log the profile update
            Log::info('User profile updated', [
                'user_id' => $user->id,
                'email' => $user->email,
                'updated_fields' => array_keys($validatedData)
            ]);

            // Return JSON response for AJAX requests
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Profile updated successfully!',
                    'user' => [
                        'name' => $user->name,
                        'company' => $user->company ? [
                            'phone' => $user->company->phone,
                            'country' => $user->company->country,
                            'address' => $user->company->address,
                        ] : null
                    ]
                ]);
            }

            return redirect()->back()->with('success', 'Profile updated successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollback();

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()
                ->withInput()
                ->withErrors($e->errors());
        } catch (\Exception $e) {
            DB::rollback();

            Log::error('Error updating profile: ' . $e->getMessage(), [
                'user_id' => Auth::id(),
                'request_data' => $request->except(['_token']),
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An unexpected error occurred while updating the profile. Please try again.',
                    'errors' => ['general' => ['An unexpected error occurred. Please try again.']]
                ], 500);
            }

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'An error occurred while updating the profile. Please try again.']);
        }
    }

    public function changePassword(Request $request)
    {
        try {
            $user = Auth::user();

            // Validate the input
            $validatedData = $request->validate([
                'current_password'     => 'required|string',
                'new_password'         => [
                    'required',
                    'string',
                    'min:8',
                    'max:255',
                    'confirmed',
                    'regex:/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/'
                ],
                'new_password_confirmation' => 'required|string'
            ], [
                'current_password.required'            => 'Current password is required.',
                'new_password.required'                => 'New password is required.',
                'new_password.min'                     => 'New password must be at least 8 characters.',
                'new_password.max'                     => 'New password may not be greater than 255 characters.',
                'new_password.confirmed'               => 'New password confirmation does not match.',
                'new_password.regex'                   => 'New password must contain at least one special character (!@#$%^&*()_+-=[]{}|;\':",./<>?).',
                'new_password_confirmation.required'   => 'Please confirm your new password.',

            ]);

            // Verify current password
            if (!Hash::check($validatedData['current_password'], $user->password)) {
                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'The current password is incorrect.',
                        'errors' => ['current_password' => ['The current password is incorrect.']]
                    ], 422);
                }

                return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
            }

            // Check if new password is different from current
            if (Hash::check($validatedData['new_password'], $user->password)) {
                if ($request->ajax() || $request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'New password must be different from current password.',
                        'errors' => ['new_password' => ['New password must be different from current password.']]
                    ], 422);
                }

                return redirect()->back()->withErrors(['new_password' => 'New password must be different from current password.']);
            }

            // Update password
            $user->update([
                'password' => Hash::make($validatedData['new_password'])
            ]);

            // Log the password change
            Log::info('User password changed', [
                'user_id' => $user->id,
                'email' => $user->email,
                'ip' => $request->ip()
            ]);

            // Return JSON response for AJAX requests
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password changed successfully!'
                ]);
            }

            return redirect()->back()->with('success', 'Password changed successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            Log::error('Error changing password: ' . $e->getMessage(), [
                'user_id' => Auth::id(),
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An unexpected error occurred while changing the password. Please try again.',
                    'errors' => ['general' => ['An unexpected error occurred. Please try again.']]
                ], 500);
            }

            return redirect()->back()->withErrors(['error' => 'An error occurred while changing the password. Please try again.']);
        }
    }


    public function changeSchoolPassword(Request $request, $id)
    {
        // Start database transaction
        DB::beginTransaction();

        try {
            $school = Company::with('user')->findOrFail($id);

            // Validate the input
            $validatedData = $request->validate([
                'new_password'         => [
                    'required',
                    'string',
                    'min:8',
                    'max:255',
                    'confirmed',
                    'regex:/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/'
                ],
                'new_password_confirmation' => 'required|string'
            ], [
                'new_password.required'                => 'New password is required.',
                'new_password.min'                     => 'New password must be at least 8 characters.',
                'new_password.max'                     => 'New password may not be greater than 255 characters.',
                'new_password.confirmed'               => 'New password confirmation does not match.',
                'new_password.regex'                   => 'New password must contain at least one special character (!@#$%^&*()_+-=[]{}|;\':",./<>?).',
                'new_password_confirmation.required'   => 'Please confirm the new password.',
            ]);

            // Update password for the school's user account
            $school->user->update([
                'password' => Hash::make($validatedData['new_password'])
            ]);

            // Commit transaction
            DB::commit();

            // Log the password change
            Log::info('School password changed by admin', [
                'admin_user_id' => Auth::id(),
                'school_id' => $school->id,
                'school_user_id' => $school->user->id,
                'school_email' => $school->email,
                'ip' => $request->ip()
            ]);

            // Return JSON response for AJAX requests
            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'School password changed successfully!'
                ]);
            }

            return redirect()->back()->with('success', 'School password changed successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Rollback transaction
            DB::rollback();

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $e->errors()
                ], 422);
            }

            return redirect()->back()->withErrors($e->errors());
        } catch (\Exception $e) {
            // Rollback transaction
            DB::rollback();

            Log::error('Error changing school password: ' . $e->getMessage(), [
                'admin_user_id' => Auth::id(),
                'school_id' => $id,
                'trace' => $e->getTraceAsString()
            ]);

            if ($request->ajax() || $request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An unexpected error occurred while changing the password. Please try again.',
                    'errors' => ['general' => ['An unexpected error occurred. Please try again.']]
                ], 500);
            }

            return redirect()->back()->withErrors(['error' => 'An error occurred while changing the password. Please try again.']);
        }
    }

    public function validateCurrentPassword(Request $request)
    {
        try {
            $request->validate([
                'current_password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/^(?=.*[!@#$%^&*()_+\-=\[\]{};\':"\\|,.<>\/?]).*$/'
                ]
            ], [
                'current_password.required' => 'Current password is required.',
                'current_password.min' => 'Current password must be at least 8 characters long.',
                'current_password.regex' => 'Current password must contain at least one special character (!@#$%^&*()_+-=[]{}|;\':",./<>?).'
            ]);

            $user = Auth::user();

            if (!Hash::check($request->current_password, $user->password)) {
                return response()->json([
                    'success' => false,
                    'message' => 'The current password is incorrect.',
                    'errors' => [
                        'current_password' => ['The current password is incorrect.']
                    ]
                ], 422);
            }

            return response()->json([
                'success' => true,
                'message' => 'Current password is valid.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Error validating current password: ' . $e->getMessage(), [
                'user_id' => Auth::id(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred.',
                'errors' => ['general' => ['An unexpected error occurred.']]
            ], 500);
        }
    }
}
