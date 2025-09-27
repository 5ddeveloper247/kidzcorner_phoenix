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

Route::view('/my-blade', 'iSTEAM.Components.home');

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


// iSTEAM
Route::get('/item-component',function(){
    return view('iSTEAM.index');

});

// N1
Route::get('/N1',function(){
    return view('iSTEAM.N1.index');
});

// N1 LIghtforms
Route::get('/lightForms', function () {
    return view('iSTEAM.N1.lightforms.index');
})->name('lightforms');

// N1 -> lightforms ->ligth
Route::get('/lightform/Light', function () {
    return view('iSTEAM.N1.lightforms.Light.index');
})->name('light');

// N1 -> lightforms ->ligth ->select
Route::get('/choice', function () {
    return view('iSTEAM.N1.lightforms.light.selection');
})->name('choose');

// N1 -> lightforms ->ligth->lesson
Route::get('/lightform/Light/lesson', function () {
    return view('iSTEAM.N1.lightforms.Light.lesson');
})->name('lesson');

// N1 -> lightforms ->ligth->teacher
Route::get('/lightform/Light/teacher', function () {
    return view('iSTEAM.N1.lightforms.Light.teacher');
})->name('teacher');


// =========================
// Shadow
Route::get('/lightform/shadows', function () {
    return view('iSTEAM.N1.lightforms.Shadow.index');
})->name('shadows');
// Shadow Choice
Route::get('/choiceShadow', function () {
    return view('iSTEAM.N1.lightforms.Shadow.selection');
})->name('chooseShadow');

// Shadow Lesson
Route::get('/lightform/Shadow/lesson', function () {
    return view('iSTEAM.N1.lightforms.Shadow.lesson');
    // return view('iSTEAM.N1.lightforms.Shadow.selection');
    
})->name('ShadowLesson');

// Shadow Taecher
Route::get('/lightform/Shadow/teacher', function () {
    return view('iSTEAM.N1.lightforms.Shadow.teacher');
})->name('Shadowteacher');


// =========================
// Shadow types
Route::get('/lightform/shadowstypes', function () {
    return view('iSTEAM.N1.lightforms.shadowTypes.index');
})->name('types');


// Shadow types Choice
Route::get('/ShadowType', function () {
    return view('iSTEAM.N1.lightforms.shadowTypes.selection');
})->name('choosetypes');

// Shadow Lesson
Route::get('/lightform/SahdowTypes/lesson', function () {
    return view('iSTEAM.N1.lightforms.shadowTypes.lesson');
})->name('typesLesson');

// Shadow Taecher
Route::get('/lightform/ShadowTypes/teacher', function () {
    return view('iSTEAM.N1.lightforms.shadowTypes.teacher');
})->name('typesteacher');


// =========================
// rainbow
Route::get('/lightform/rainbow', function () {
    return view('iSTEAM.N1.lightforms.Rainbow.index');
})->name('rainbow');

//RAINBOW Choice
Route::get('/rainbowSelection', function () {
    return view('iSTEAM.N1.lightforms.Rainbow.selection');
})->name('rainbowSelection');

// rainbow Lesson
Route::get('/lightform/rainbow/lesson', function () {
    return view('iSTEAM.N1.lightforms.Rainbow.lesson');
})->name('rainbowLesson');

// rainbow Taecher
Route::get('/lightform/rainbow/teacher', function () {
    return view('iSTEAM.N1.lightforms.Rainbow.teacher');
})->name('rainbowteacher');


// =========================
// Dark
Route::get('/lightform/dark', function () {
    return view('iSTEAM.N1.lightforms.Dark.index');
})->name('dark');

//Dark Choice
Route::get('/darkSelection', function () {
    return view('iSTEAM.N1.lightforms.Dark.selection');
})->name('darkSelection');

//DArk Lesson
Route::get('/lightform/dark/lesson', function () {
    return view('iSTEAM.N1.lightforms.Dark.lesson');
})->name('darkLesson');

// Dark Taecher
Route::get('/lightform/dark/teacher', function () {
    return view('iSTEAM.N1.lightforms.Dark.teacher');
})->name('darkteacher');


// =========================
// Blacklight
Route::get('/lightform/blacklight', function () {
    return view('iSTEAM.N1.lightforms.Blacklight.index');
})->name('blacklight');

// Blacklight Choice
Route::get('/blacklightSelection', function () {
    return view('iSTEAM.N1.lightforms.Blacklight.selection');
})->name('blacklightSelection');

// Blacklight Lesson
Route::get('/lightform/blacklight/lesson', function () {
    return view('iSTEAM.N1.lightforms.Blacklight.lesson');
})->name('blacklightLesson');

// Blacklight Teacher
Route::get('/lightform/blacklight/teacher', function () {
    return view('iSTEAM.N1.lightforms.Blacklight.teacher');
})->name('blacklightTeacher');






// ==============================
// BASIC STRUCTURE
Route::get('/basicstructure', function () {
    return view('iSTEAM.N1.basicStructure.index');
})->name('basicStructure');

// =========================
// Shapes
Route::get('/basicStructure/shapes', function () {
    return view('iSTEAM.N1.basicStructure.Shapes.index');
})->name('shapes');

// Shapes Choice
Route::get('/shapesSelection', function () {
    return view('iSTEAM.N1.basicStructure.Shapes.selection');
})->name('shapesSelection');

// Shapes Lesson
Route::get('/basicStructure/shapes/lesson', function () {
    return view('iSTEAM.N1.basicStructure.Shapes.lesson');
})->name('shapesLesson');

// Shapes Teacher
Route::get('/basicStructure/shapes/teacher', function () {
    return view('iSTEAM.N1.basicStructure.Shapes.teacher');
})->name('shapesTeacher'); 


// =========================
// Identify Shapes
Route::get('/basicStructure/identifyShapes', function () {
    return view('iSTEAM.N1.basicStructure.IdentifyShapes.index');
})->name('identifyShapes');

// Identify Shapes Choice
Route::get('/identifyShapesSelection', function () {
    return view('iSTEAM.N1.basicStructure.IdentifyShapes.selection');
})->name('identifyShapesSelection');

// Identify Shapes Lesson
Route::get('/basicStructure/identifyShapes/lesson', function () {
    return view('iSTEAM.N1.basicStructure.IdentifyShapes.lesson');
})->name('identifyShapesLesson');

// Identify Shapes Teacher
Route::get('/basicStructure/identifyShapes/teacher', function () {
    return view('iSTEAM.N1.basicStructure.IdentifyShapes.teacher');
})->name('identifyShapesTeacher');


// =========================
// Shapes-Structure
Route::get('/basicStructure/Shapes-Structure', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-Structure.index');
})->name('Shapes-Structure');

// Shapes-Structure Choice
Route::get('/Shapes-StructureSelection', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-Structure.selection');
})->name('Shapes-StructureSelection');

// Shapes-Structure Lesson
Route::get('/basicStructure/Shapes-Structure/lesson', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-Structure.lesson');
})->name('Shapes-StructureLesson');

// Shapes-Structure Teacher
Route::get('/basicStructure/Shapes-Structure/teacher', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-Structure.teacher');
})->name('Shapes-StructureTeacher');


// =========================
// Shape-around
Route::get('/basicStructure/Shape-around', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-around.index');
})->name('Shape-around');

// Shape-around Choice
Route::get('/Shape-aroundSelection', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-around.selection');
})->name('Shape-aroundSelection');

// Shape-around Lesson
Route::get('/basicStructure/Shape-around/lesson', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-around.lesson');
})->name('Shape-aroundLesson');

// Shape-around Teacher
Route::get('/basicStructure/Shape-around/teacher', function () {
    return view('iSTEAM.N1.basicStructure.Shapes-around.teacher');
})->name('Shape-aroundTeacher');



// =========================
// Build-Structure
Route::get('/basicStructure/Build-Structure', function () {
    return view('iSTEAM.N1.basicStructure.Build-Structure.index');
})->name('Build-Structure');

// Build-Structure Choice
Route::get('/Build-StructureSelection', function () {
    return view('iSTEAM.N1.basicStructure.Build-Structure.selection');
})->name('Build-StructureSelection');

// Build-Structure Lesson
Route::get('/basicStructure/Build-Structure/lesson', function () {
    return view('iSTEAM.N1.basicStructure.Build-Structure.lesson');
})->name('Build-StructureLesson');

// Build-Structure Teacher
Route::get('/basicStructure/Build-Structure/teacher', function () {
    return view('iSTEAM.N1.basicStructure.Build-Structure.teacher');
})->name('Build-StructureTeacher');


// =========================
// Creations
Route::get('/basicStructure/Creations', function () {
    return view('iSTEAM.N1.basicStructure.Creations.index');
})->name('Creations');

// Creations Choice
Route::get('/CreationsSelection', function () {
    return view('iSTEAM.N1.basicStructure.Creations.selection');
})->name('CreationsSelection');

// Creations Lesson
Route::get('/basicStructure/Creations/lesson', function () {
    return view('iSTEAM.N1.basicStructure.Creations.lesson');
})->name('CreationsLesson');

// Creations Teacher
Route::get('/basicStructure/Creations/teacher', function () {
    return view('iSTEAM.N1.basicStructure.Creations.teacher');
})->name('CreationsTeacher');






// ========================
// N2 SimpleMachines
Route::get('/SimpleMachines', function () {
    return view('iSTEAM.N2.SimpleMachines.index');
})->name('SimpleMachines');

// N2 -> SimpleMachines -> Light
Route::get('/SimpleMachines/Wagon', function () {
    return view('iSTEAM.N2.SimpleMachines.Wagon.index');
})->name('Wagon');

// N2 -> SimpleMachines -> Light -> select
Route::get('/Wagonchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.Wagon.selection');
})->name('WagonSelection');

// N2 -> SimpleMachines -> Light -> lesson
Route::get('/SimpleMachines/Wagon/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.Wagon.lesson');
})->name('WagonLesson');

// N2 -> SimpleMachines -> Light -> teacher
Route::get('/SimpleMachines/Wagon/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.Wagon.teacher');
})->name('WagonTeacher');


// N2 -> SimpleMachines -> PinWheel
Route::get('/SimpleMachines/PinWheel', function () {
    return view('iSTEAM.N2.SimpleMachines.PinWheel.index');
})->name('PinWheel');

// N2 -> SimpleMachines -> PinWheel -> select
Route::get('/PinWheelchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.PinWheel.selection');
})->name('PinWheelSelection');

// N2 -> SimpleMachines -> PinWheel -> lesson
Route::get('/SimpleMachines/PinWheel/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.PinWheel.lesson');
})->name('PinWheelLesson');

// N2 -> SimpleMachines -> PinWheel -> teacher
Route::get('/SimpleMachines/PinWheel/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.PinWheel.teacher');
})->name('PinWheelTeacher');


// N2 -> SimpleMachines -> spinningTop
Route::get('/SimpleMachines/spinningTop', function () {
    return view('iSTEAM.N2.SimpleMachines.spinningTop.index');
})->name('spinningTop');

// N2 -> SimpleMachines -> spinningTop -> select
Route::get('/spinningTopchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.spinningTop.selection');
})->name('spinningTopSelection');

// N2 -> SimpleMachines -> spinningTop -> lesson
Route::get('/SimpleMachines/spinningTop/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.spinningTop.lesson');
})->name('spinningTopLesson');

// N2 -> SimpleMachines -> spinningTop -> teacher
Route::get('/SimpleMachines/spinningTop/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.spinningTop.teacher');
})->name('spinningTopTeacher');
