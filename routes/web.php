<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Auth;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/signin', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signin', [AuthController::class, 'login']);


Route::get('/forgot_password', function () {
    return view('auth.forgot_password');
})->name('forgot.password');

Route::get('/reset_password', function () {
    return view('auth.reset_password');
})->name('reset.password');

Route::get('/reset_password_email', function () {
    return view('email.reset_password_email');
})->name('reset_password.email');



// Logout (authenticated users)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Password Reset Routes
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');

// Root route - simple redirect
Route::get('/', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    
    $roleId = (int) Auth::user()->role_id;
    
    switch ($roleId) {
        case 1:
            return redirect('/admin/dashboard');
        case 2:
            return redirect('/school/profile');
        default:
            Auth::logout();
            return redirect('/login')->with('error', 'Invalid user role');
    }
})->name('dashboard');

// Super Admin routes (role_id = 1)
Route::middleware(['auth', 'role:1'])->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    
    
    // Schools management
    Route::get('/companies', [AdminController::class, 'showSchoolsList'])->name('companies');
    Route::get('/admin/schools/datatable', [AdminController::class, 'getSchoolsDataTable'])
         ->name('admin.schools.datatable');
    Route::delete('/admin/schools/{id}', [AdminController::class, 'destroySchool'])
         ->name('admin.schools.destroy');

    Route::get('/admin/countries', [AdminController::class, 'getCountries'])->name('admin.countries');
    
    Route::post('/admin/schools/{id}/change-password', [AdminController::class, 'changeSchoolPassword'])->name('admin.schools.change-password');
    
    // Add School Routes - Updated with proper naming
    Route::get('/add-school', [AdminController::class, 'showAddSchoolForm'])->name('add_school');
    Route::get('/admin/add-school', [AdminController::class, 'showAddSchoolForm'])->name('admin.addSchool'); // Added this
    Route::post('/add-school', [AdminController::class, 'addSchool'])->name('admin.storeSchool');
    Route::post('/admin/add-school', [AdminController::class, 'addSchool']); // Alternative POST route
    
    // Edit School Routes - Updated with proper naming  
    Route::get('/edit-school/{id}', [AdminController::class, 'showEditSchoolForm'])->name('edit_school');
    Route::get('/admin/edit-school/{id}', [AdminController::class, 'showEditSchoolForm'])->name('admin.editSchool');
    Route::post('/edit-school/{id}', [AdminController::class, 'updateSchool']);
    Route::post('/admin/edit-school/{id}', [AdminController::class, 'updateSchool'])->name('admin.updateSchool');
});

// School Admin routes (role_id = 2) 
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/school/profile', function () {
        return view('school.profile');
    })->name('school.profile');


    // Profile update routes - Fixed HTTP methods
    Route::put('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
    Route::post('/validate-current-password', [AdminController::class, 'validateCurrentPassword'])->name('validate.current.password');
});

// Debug route (remove after debugging)
Route::get('/debug-routes', function () {
    $routes = [];
    foreach (Route::getRoutes() as $route) {
        if ($route->getName()) {
            $routes[] = [
                'name' => $route->getName(),
                'uri' => $route->uri(),
                'methods' => $route->methods()
            ];
        }
    }
    return response()->json($routes);
});




