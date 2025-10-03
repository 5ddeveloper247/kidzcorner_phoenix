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





// N1
Route::get('/N2',function(){
    return view('iSTEAM.N2.index');
});
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


// N2 -> SimpleMachines -> MeasuringCar
Route::get('/SimpleMachines/MeasuringCar', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar.index');
})->name('MeasuringCar');

// N2 -> SimpleMachines -> MeasuringCar -> select
Route::get('/MeasuringCarchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar.selection');
})->name('MeasuringCarSelection');

// N2 -> SimpleMachines -> MeasuringCar -> lesson
Route::get('/SimpleMachines/MeasuringCar/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar.lesson');
})->name('MeasuringCarLesson');

// N2 -> SimpleMachines -> MeasuringCar -> teacher
Route::get('/SimpleMachines/MeasuringCar/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar.teacher');
})->name('MeasuringCarTeacher');


// N2 -> SimpleMachines -> MeasuringCar2
Route::get('/SimpleMachines/MeasuringCar2', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar2.index');
})->name('MeasuringCar2');

// N2 -> SimpleMachines -> MeasuringCar2 -> select
Route::get('/MeasuringCar2choice', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar2.selection');
})->name('MeasuringCar2Selection');

// N2 -> SimpleMachines -> MeasuringCar2 -> lesson
Route::get('/SimpleMachines/MeasuringCar2/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar2.lesson');
})->name('MeasuringCar2Lesson');

// N2 -> SimpleMachines -> MeasuringCar2 -> teacher
Route::get('/SimpleMachines/MeasuringCar2/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.MeasuringCar2.teacher');
})->name('MeasuringCar2Teacher');


// N2 -> SimpleMachines -> Push
Route::get('/SimpleMachines/Push', function () {
    return view('iSTEAM.N2.SimpleMachines.Push.index');
})->name('Push');

// N2 -> SimpleMachines -> Push -> select
Route::get('/Pushchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.Push.selection');
})->name('PushSelection');

// N2 -> SimpleMachines -> Push -> lesson
Route::get('/SimpleMachines/Push/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.Push.lesson');
})->name('PushLesson');

// N2 -> SimpleMachines -> Push -> teacher
Route::get('/SimpleMachines/Push/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.Push.teacher');
})->name('PushTeacher');



// N2 -> SimpleMachines -> RaceCar
Route::get('/SimpleMachines/RaceCar', function () {
    return view('iSTEAM.N2.SimpleMachines.RaceCar.index');
})->name('RaceCar');

// N2 -> SimpleMachines -> RaceCar -> select
Route::get('/RaceCarchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.RaceCar.selection');
})->name('RaceCarSelection');

// N2 -> SimpleMachines -> RaceCar -> lesson
Route::get('/SimpleMachines/RaceCar/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.RaceCar.lesson');
})->name('RaceCarLesson');

// N2 -> SimpleMachines -> RaceCar -> teacher
Route::get('/SimpleMachines/RaceCar/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.RaceCar.teacher');
})->name('RaceCarTeacher');



// N2 -> SimpleMachines -> Seasaw
Route::get('/SimpleMachines/Seasaw', function () {
    return view('iSTEAM.N2.SimpleMachines.Seasaw.index');
})->name('Seasaw');

// N2 -> SimpleMachines -> Seasaw -> select
Route::get('/Seasawchoice', function () {
    return view('iSTEAM.N2.SimpleMachines.Seasaw.selection');
})->name('SeasawSelection');

// N2 -> SimpleMachines -> Seasaw -> lesson
Route::get('/SimpleMachines/Seasaw/lesson', function () {
    return view('iSTEAM.N2.SimpleMachines.Seasaw.lesson');
})->name('SeasawLesson');

// N2 -> SimpleMachines -> Seasaw -> teacher
Route::get('/SimpleMachines/Seasaw/teacher', function () {
    return view('iSTEAM.N2.SimpleMachines.Seasaw.teacher');
})->name('SeasawTeacher');




// ==============================================
// N2 LivingThings
Route::get('/LivingThings', function () {
    return view('iSTEAM.N2.LivingThings.index');
})->name('LivingThings');

// N2 -> LivingThings -> Animals
Route::get('/LivingThings/Animals', function () {
    return view('iSTEAM.N2.LivingThings.Animals.index');
})->name('Animals');

// N2 -> LivingThings -> Animals -> select
Route::get('/AnimalsChoice', function () {
    return view('iSTEAM.N2.LivingThings.Animals.selection');
})->name('AnimalsSelection');

// N2 -> LivingThings -> Animals -> lesson
Route::get('/LivingThings/Animals/lesson', function () {
    return view('iSTEAM.N2.LivingThings.Animals.lesson');
})->name('AnimalsLesson');

// N2 -> LivingThings -> Animals -> teacher
Route::get('/LivingThings/Animals/teacher', function () {
    return view('iSTEAM.N2.LivingThings.Animals.teacher');
})->name('AnimalsTeacher');


// N2 -> LivingThings -> Growth
Route::get('/LivingThings/Growth', function () {
    return view('iSTEAM.N2.LivingThings.Growth.index');
})->name('Growth');

// N2 -> LivingThings -> Growth -> select
Route::get('/GrowthChoice', function () {
    return view('iSTEAM.N2.LivingThings.Growth.selection');
})->name('GrowthSelection');

// N2 -> LivingThings -> Growth -> lesson
Route::get('/LivingThings/Growth/lesson', function () {
    return view('iSTEAM.N2.LivingThings.Growth.lesson');
})->name('GrowthLesson');

// N2 -> LivingThings -> Growth -> teacher
Route::get('/LivingThings/Growth/teacher', function () {
    return view('iSTEAM.N2.LivingThings.Growth.teacher');
})->name('GrowthTeacher');



// N2 -> LivingThings -> StageOfGrowth
Route::get('/LivingThings/StageOfGrowth', function () {
    return view('iSTEAM.N2.LivingThings.StageOfGrowth.index');
})->name('StageOfGrowth');

// N2 -> LivingThings -> StageOfGrowth -> select
Route::get('/StageOfGrowthChoice', function () {
    return view('iSTEAM.N2.LivingThings.StageOfGrowth.selection');
})->name('StageOfGrowthSelection');

// N2 -> LivingThings -> StageOfGrowth -> lesson
Route::get('/LivingThings/StageOfGrowth/lesson', function () {
    return view('iSTEAM.N2.LivingThings.StageOfGrowth.lesson');
})->name('StageOfGrowthLesson');

// N2 -> LivingThings -> StageOfGrowth -> teacher
Route::get('/LivingThings/StageOfGrowth/teacher', function () {
    return view('iSTEAM.N2.LivingThings.StageOfGrowth.teacher');
})->name('StageOfGrowthTeacher');


// N2 -> LivingThings -> PlantsGrowth
Route::get('/LivingThings/PlantsGrowth', function () {
    return view('iSTEAM.N2.LivingThings.PlantsGrowth.index');
})->name('PlantsGrowth');

// N2 -> LivingThings -> PlantsGrowth -> select
Route::get('/PlantsGrowthChoice', function () {
    return view('iSTEAM.N2.LivingThings.PlantsGrowth.selection');
})->name('PlantsGrowthSelection');

// N2 -> LivingThings -> PlantsGrowth -> lesson
Route::get('/LivingThings/PlantsGrowth/lesson', function () {
    return view('iSTEAM.N2.LivingThings.PlantsGrowth.lesson');
})->name('PlantsGrowthLesson');

// N2 -> LivingThings -> PlantsGrowth -> teacher
Route::get('/LivingThings/PlantsGrowth/teacher', function () {
    return view('iSTEAM.N2.LivingThings.PlantsGrowth.teacher');
})->name('PlantsGrowthTeacher');


// N2 -> LivingThings -> PartsOfPlants
Route::get('/LivingThings/PartsOfPlants', function () {
    return view('iSTEAM.N2.LivingThings.PartsOfPlants.index');
})->name('PartsOfPlants');

// N2 -> LivingThings -> PartsOfPlants -> select
Route::get('/PartsOfPlantsChoice', function () {
    return view('iSTEAM.N2.LivingThings.PartsOfPlants.selection');
})->name('PartsOfPlantsSelection');

// N2 -> LivingThings -> PartsOfPlants -> lesson
Route::get('/LivingThings/PartsOfPlants/lesson', function () {
    return view('iSTEAM.N2.LivingThings.PartsOfPlants.lesson');
})->name('PartsOfPlantsLesson');

// N2 -> LivingThings -> PartsOfPlants -> teacher
Route::get('/LivingThings/PartsOfPlants/teacher', function () {
    return view('iSTEAM.N2.LivingThings.PartsOfPlants.teacher');
})->name('PartsOfPlantsTeacher');


// N2 -> LivingThings -> Plants
Route::get('/LivingThings/Plants', function () {
    return view('iSTEAM.N2.LivingThings.Plants.index');
})->name('Plants');

// N2 -> LivingThings -> Plants -> select
Route::get('/PlantsChoice', function () {
    return view('iSTEAM.N2.LivingThings.Plants.selection');
})->name('PlantsSelection');

// N2 -> LivingThings -> Plants -> lesson
Route::get('/LivingThings/Plants/lesson', function () {
    return view('iSTEAM.N2.LivingThings.Plants.lesson');
})->name('PlantsLesson');

// N2 -> LivingThings -> Plants -> teacher
Route::get('/LivingThings/Plants/teacher', function () {
    return view('iSTEAM.N2.LivingThings.Plants.teacher');
})->name('PlantsTeacher');




// N2 -> LivingThings -> Drinking
Route::get('/LivingThings/Drinking', function () {
    return view('iSTEAM.N2.LivingThings.Drinking.index');
})->name('Drinking');

// N2 -> LivingThings -> Drinking -> select
Route::get('/DrinkingChoice', function () {
    return view('iSTEAM.N2.LivingThings.Drinking.selection');
})->name('DrinkingSelection');

// N2 -> LivingThings -> Drinking -> lesson
Route::get('/LivingThings/Drinking/lesson', function () {
    return view('iSTEAM.N2.LivingThings.Drinking.lesson');
})->name('DrinkingLesson');

// N2 -> LivingThings -> Drinking -> teacher
Route::get('/LivingThings/Drinking/teacher', function () {
    return view('iSTEAM.N2.LivingThings.Drinking.teacher');
})->name('DrinkingTeacher');



// ========================================================
Route::get('/Structures', function () {
    return view('iSTEAM.N2.Structures.index');
})->name('Structures');

Route::get('/BasicCoding', function () {
    return view('iSTEAM.N2.BasicCoding.index');
})->name('BasicCoding');

// N2 -> BasicCoding -> Directions
Route::get('/BasicCoding/Directions', function () {
    return view('iSTEAM.N2.BasicCoding.Directions.index');
})->name('Directions');

// N2 -> BasicCoding -> Directions -> select
Route::get('/DirectionsChoice', function () {
    return view('iSTEAM.N2.BasicCoding.Directions.selection');
})->name('DirectionsSelection');

// N2 -> BasicCoding -> Directions -> lesson
Route::get('/BasicCoding/Directions/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Directions.lesson');
})->name('DirectionsLesson');

// N2 -> BasicCoding -> Directions -> teacher
Route::get('/BasicCoding/Directions/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Directions.teacher');
})->name('DirectionsTeacher');



// N2 -> BasicCoding -> DifferentDirections
Route::get('/BasicCoding/DifferentDirections', function () {
    return view('iSTEAM.N2.BasicCoding.DifferentDirections.index');
})->name('DifferentDirections');

// N2 -> BasicCoding -> DifferentDirections -> select
Route::get('/DifferentDirectionsChoice', function () {
    return view('iSTEAM.N2.BasicCoding.DifferentDirections.selection');
})->name('DifferentDirectionsSelection');

// N2 -> BasicCoding -> DifferentDirections -> lesson
Route::get('/BasicCoding/DifferentDirections/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.DifferentDirections.lesson');
})->name('DifferentDirectionsLesson');

// N2 -> BasicCoding -> DifferentDirections -> teacher
Route::get('/BasicCoding/DifferentDirections/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.DifferentDirections.teacher');
})->name('DifferentDirectionsTeacher');


// N2 -> BasicCoding -> Instructions
Route::get('/BasicCoding/Instructions', function () {
    return view('iSTEAM.N2.BasicCoding.Instructions.index');
})->name('Instructions');

// N2 -> BasicCoding -> Instructions -> select
Route::get('/InstructionsChoice', function () {
    return view('iSTEAM.N2.BasicCoding.Instructions.selection');
})->name('InstructionsSelection');

// N2 -> BasicCoding -> Instructions -> lesson
Route::get('/BasicCoding/Instructions/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Instructions.lesson');
})->name('InstructionsLesson');

// N2 -> BasicCoding -> Instructions -> teacher
Route::get('/BasicCoding/Instructions/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Instructions.teacher');
})->name('InstructionsTeacher');


// N2 -> BasicCoding -> LetsProgram
Route::get('/BasicCoding/LetsProgram', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram.index');
})->name('LetsProgram');

// N2 -> BasicCoding -> LetsProgram -> select
Route::get('/LetsProgramChoice', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram.selection');
})->name('LetsProgramSelection');

// N2 -> BasicCoding -> LetsProgram -> lesson
Route::get('/BasicCoding/LetsProgram/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram.lesson');
})->name('LetsProgramLesson');

// N2 -> BasicCoding -> LetsProgram -> teacher
Route::get('/BasicCoding/LetsProgram/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram.teacher');
})->name('LetsProgramTeacher');




// N2 -> BasicCoding -> LetsProgram2
Route::get('/BasicCoding/LetsProgram2', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram2.index');
})->name('LetsProgram2');

// N2 -> BasicCoding -> LetsProgram2 -> select
Route::get('/LetsProgram2Choice', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram2.selection');
})->name('LetsProgram2Selection');

// N2 -> BasicCoding -> LetsProgram2 -> lesson
Route::get('/BasicCoding/LetsProgram2/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram2.lesson');
})->name('LetsProgram2Lesson');

// N2 -> BasicCoding -> LetsProgram2 -> teacher
Route::get('/BasicCoding/LetsProgram2/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.LetsProgram2.teacher');
})->name('LetsProgram2Teacher');


// N2 -> BasicCoding -> Robot1
Route::get('/BasicCoding/Robot1', function () {
    return view('iSTEAM.N2.BasicCoding.Robot1.index');
})->name('Robot1');

// N2 -> BasicCoding -> Robot1 -> select
Route::get('/Robot1Choice', function () {
    return view('iSTEAM.N2.BasicCoding.Robot1.selection');
})->name('Robot1Selection');

// N2 -> BasicCoding -> Robot1 -> lesson
Route::get('/BasicCoding/Robot1/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Robot1.lesson');
})->name('Robot1Lesson');

// N2 -> BasicCoding -> Robot1 -> teacher
Route::get('/BasicCoding/Robot1/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Robot1.teacher');
})->name('Robot1Teacher');



// N2 -> BasicCoding -> Robot2
Route::get('/BasicCoding/Robot2', function () {
    return view('iSTEAM.N2.BasicCoding.Robot2.index');
})->name('Robot2');

// N2 -> BasicCoding -> Robot2 -> select
Route::get('/Robot2Choice', function () {
    return view('iSTEAM.N2.BasicCoding.Robot2.selection');
})->name('Robot2Selection');

// N2 -> BasicCoding -> Robot2 -> lesson
Route::get('/BasicCoding/Robot2/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Robot2.lesson');
})->name('Robot2Lesson');

// N2 -> BasicCoding -> Robot2 -> teacher
Route::get('/BasicCoding/Robot2/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Robot2.teacher');
})->name('Robot2Teacher');


// N2 -> BasicCoding -> Robot3
Route::get('/BasicCoding/Robot3', function () {
    return view('iSTEAM.N2.BasicCoding.Robot3.index');
})->name('Robot3');

// N2 -> BasicCoding -> Robot3 -> select
Route::get('/Robot3Choice', function () {
    return view('iSTEAM.N2.BasicCoding.Robot3.selection');
})->name('Robot3Selection');

// N2 -> BasicCoding -> Robot3 -> lesson
Route::get('/BasicCoding/Robot3/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Robot3.lesson');
})->name('Robot3Lesson');

// N2 -> BasicCoding -> Robot3 -> teacher
Route::get('/BasicCoding/Robot3/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Robot3.teacher');
})->name('Robot3Teacher');



// N2 -> BasicCoding -> Robot4
Route::get('/BasicCoding/Robot4', function () {
    return view('iSTEAM.N2.BasicCoding.Robot4.index');
})->name('Robot4');

// N2 -> BasicCoding -> Robot4 -> select
Route::get('/Robot4Choice', function () {
    return view('iSTEAM.N2.BasicCoding.Robot4.selection');
})->name('Robot4Selection');

// N2 -> BasicCoding -> Robot4 -> lesson
Route::get('/BasicCoding/Robot4/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Robot4.lesson');
})->name('Robot4Lesson');

// N2 -> BasicCoding -> Robot4 -> teacher
Route::get('/BasicCoding/Robot4/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Robot4.teacher');
})->name('Robot4Teacher');


// N2 -> BasicCoding -> Robot5
Route::get('/BasicCoding/Robot5', function () {
    return view('iSTEAM.N2.BasicCoding.Robot5.index');
})->name('Robot5');

// N2 -> BasicCoding -> Robot5 -> select
Route::get('/Robot5Choice', function () {
    return view('iSTEAM.N2.BasicCoding.Robot5.selection');
})->name('Robot5Selection');

// N2 -> BasicCoding -> Robot5 -> lesson
Route::get('/BasicCoding/Robot5/lesson', function () {
    return view('iSTEAM.N2.BasicCoding.Robot5.lesson');
})->name('Robot5Lesson');

// N2 -> BasicCoding -> Robot5 -> teacher
Route::get('/BasicCoding/Robot5/teacher', function () {
    return view('iSTEAM.N2.BasicCoding.Robot5.teacher');
})->name('Robot5Teacher');



// K1
Route::get('/K1',function(){
    return view('iSTEAM.K1.index');
});

// K1 -> SampleMachines
Route::get('K1/simpleMachines', function () {
    return view('iSTEAM.K1.simpleMachines.index');
})->name('K1simpleMachines');

// K1 -> simpleMachines -> Bell
Route::get('/simpleMachines/Bell', function () {
    return view('iSTEAM.K1.simpleMachines.Bell.index');
})->name('Bell');

// K1 -> simpleMachines -> Bell -> select
Route::get('/BellChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Bell.selection');
})->name('BellSelection');

// K1 -> simpleMachines -> Bell -> lesson
Route::get('/simpleMachines/Bell/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Bell.lesson');
})->name('BellLesson');

// K1 -> simpleMachines -> Bell -> teacher
Route::get('/simpleMachines/Bell/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Bell.teacher');
})->name('BellTeacher');



// K1 -> simpleMachines -> Plane
Route::get('/simpleMachines/Plane', function () {
    return view('iSTEAM.K1.simpleMachines.Plane.index');
})->name('Plane');

// K1 -> simpleMachines -> Plane -> select
Route::get('/PlaneChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Plane.selection');
})->name('PlaneSelection');

// K1 -> simpleMachines -> Plane -> lesson
Route::get('/simpleMachines/Plane/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Plane.lesson');
})->name('PlaneLesson');

// K1 -> simpleMachines -> Plane -> teacher
Route::get('/simpleMachines/Plane/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Plane.teacher');
})->name('PlaneTeacher');



// K1 -> simpleMachines -> Balloon
Route::get('/simpleMachines/Balloon', function () {
    return view('iSTEAM.K1.simpleMachines.Balloon.index');
})->name('Balloon');

// K1 -> simpleMachines -> Balloon -> select
Route::get('/BalloonChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Balloon.selection');
})->name('BalloonSelection');

// K1 -> simpleMachines -> Balloon -> lesson
Route::get('/simpleMachines/Balloon/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Balloon.lesson');
})->name('BalloonLesson');

// K1 -> simpleMachines -> Balloon -> teacher
Route::get('/simpleMachines/Balloon/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Balloon.teacher');
})->name('BalloonTeacher');


// K1 -> simpleMachines -> Wedge
Route::get('/simpleMachines/Wedge', function () {
    return view('iSTEAM.K1.simpleMachines.Wedge.index');
})->name('Wedge');

// K1 -> simpleMachines -> Wedge -> select
Route::get('/WedgeChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Wedge.selection');
})->name('WedgeSelection');

// K1 -> simpleMachines -> Wedge -> lesson
Route::get('/simpleMachines/Wedge/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Wedge.lesson');
})->name('WedgeLesson');

// K1 -> simpleMachines -> Wedge -> teacher
Route::get('/simpleMachines/Wedge/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Wedge.teacher');
})->name('WedgeTeacher');



// K1 -> simpleMachines -> Rubbish
Route::get('/simpleMachines/Rubbish', function () {
    return view('iSTEAM.K1.simpleMachines.Rubbish.index');
})->name('Rubbish');

// K1 -> simpleMachines -> Rubbish -> select
Route::get('/RubbishChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Rubbish.selection');
})->name('RubbishSelection');

// K1 -> simpleMachines -> Rubbish -> lesson
Route::get('/simpleMachines/Rubbish/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Rubbish.lesson');
})->name('RubbishLesson');

// K1 -> simpleMachines -> Rubbish -> teacher
Route::get('/simpleMachines/Rubbish/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Rubbish.teacher');
})->name('RubbishTeacher');



// K1 -> simpleMachines -> Wheels
Route::get('/simpleMachines/Wheels', function () {
    return view('iSTEAM.K1.simpleMachines.Wheels.index');
})->name('Wheels');

// K1 -> simpleMachines -> Wheels -> select
Route::get('/WheelsChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Wheels.selection');
})->name('WheelsSelection');

// K1 -> simpleMachines -> Wheels -> lesson
Route::get('/simpleMachines/Wheels/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Wheels.lesson');
})->name('WheelsLesson');

// K1 -> simpleMachines -> Wheels -> teacher
Route::get('/simpleMachines/Wheels/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Wheels.teacher');
})->name('WheelsTeacher');



// K1 -> simpleMachines -> PlantsMachine
Route::get('/simpleMachines/PlantsMachine', function () {
    return view('iSTEAM.K1.simpleMachines.PlantsMachine.index');
})->name('PlantsMachine');

// K1 -> simpleMachines -> PlantsMachine -> select
Route::get('/PlantsMachineChoice', function () {
    return view('iSTEAM.K1.simpleMachines.PlantsMachine.selection');
})->name('PlantsMachineSelection');

// K1 -> simpleMachines -> PlantsMachine -> lesson
Route::get('/simpleMachines/PlantsMachine/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.PlantsMachine.lesson');
})->name('PlantsMachineLesson');

// K1 -> simpleMachines -> PlantsMachine -> teacher
Route::get('/simpleMachines/PlantsMachine/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.PlantsMachine.teacher');
})->name('PlantsMachineTeacher');


// K1 -> simpleMachines -> Pulleys
Route::get('/simpleMachines/Pulleys', function () {
    return view('iSTEAM.K1.simpleMachines.Pulleys.index');
})->name('Pulleys');

// K1 -> simpleMachines -> Pulleys -> select
Route::get('/PulleysChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Pulleys.selection');
})->name('PulleysSelection');

// K1 -> simpleMachines -> Pulleys -> lesson
Route::get('/simpleMachines/Pulleys/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Pulleys.lesson');
})->name('PulleysLesson');

// K1 -> simpleMachines -> Pulleys -> teacher
Route::get('/simpleMachines/Pulleys/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Pulleys.teacher');
})->name('PulleysTeacher');




// K1 -> simpleMachines -> Punching
Route::get('/simpleMachines/Punching', function () {
    return view('iSTEAM.K1.simpleMachines.Punching.index');
})->name('Punching');

// K1 -> simpleMachines -> Punching -> select
Route::get('/PunchingChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Punching.selection');
})->name('PunchingSelection');

// K1 -> simpleMachines -> Punching -> lesson
Route::get('/simpleMachines/Punching/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Punching.lesson');
})->name('PunchingLesson');

// K1 -> simpleMachines -> Punching -> teacher
Route::get('/simpleMachines/Punching/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Punching.teacher');
})->name('PunchingTeacher');



// K1 -> simpleMachines -> Screw
Route::get('/simpleMachines/Screw', function () {
    return view('iSTEAM.K1.simpleMachines.Screw.index');
})->name('Screw');

// K1 -> simpleMachines -> Screw -> select
Route::get('/ScrewChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Screw.selection');
})->name('ScrewSelection');

// K1 -> simpleMachines -> Screw -> lesson
Route::get('/simpleMachines/Screw/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Screw.lesson');
})->name('ScrewLesson');

// K1 -> simpleMachines -> Screw -> teacher
Route::get('/simpleMachines/Screw/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Screw.teacher');
})->name('ScrewTeacher');



// K1 -> simpleMachines -> Ball
Route::get('/simpleMachines/Ball', function () {
    return view('iSTEAM.K1.simpleMachines.Ball.index');
})->name('Ball');

// K1 -> simpleMachines -> Ball -> select
Route::get('/BallChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Ball.selection');
})->name('BallSelection');

// K1 -> simpleMachines -> Ball -> lesson
Route::get('/simpleMachines/Ball/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Ball.lesson');
})->name('BallLesson');

// K1 -> simpleMachines -> Ball -> teacher
Route::get('/simpleMachines/Ball/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Ball.teacher');
})->name('BallTeacher');


// K1 -> simpleMachines -> Levers
Route::get('/simpleMachines/Levers', function () {
    return view('iSTEAM.K1.simpleMachines.Levers.index');
})->name('Levers');

// K1 -> simpleMachines -> Levers -> select
Route::get('/LeversChoice', function () {
    return view('iSTEAM.K1.simpleMachines.Levers.selection');
})->name('LeversSelection');

// K1 -> simpleMachines -> Levers -> lesson
Route::get('/simpleMachines/Levers/lesson', function () {
    return view('iSTEAM.K1.simpleMachines.Levers.lesson');
})->name('LeversLesson');

// K1 -> simpleMachines -> Levers -> teacher
Route::get('/simpleMachines/Levers/teacher', function () {
    return view('iSTEAM.K1.simpleMachines.Levers.teacher');
})->name('LeversTeacher');