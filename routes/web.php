<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Auth;
require __DIR__ . '/phonics/l1.php';
require __DIR__ . '/phonics/l2.php';
require __DIR__ . '/micet/micet.php';
require __DIR__ . '/micet/applet.php';

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


Route::middleware(['auth', 'role:1,2'])->group(function () {

    // iSTEAM
    Route::get('/ISTEAM',function(){
        return view('iSTEAM.index');
    })->name('isteam');

    // N1
    Route::get('/N1',function(){
        return view('iSTEAM.N1.index');
    })->name('N1');

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
        return view('iSTEAM.N1.lightforms.Light.selection');
    })->name('n1lightchoose');

    // N1 -> lightforms ->ligth->lesson
    Route::get('/lightform/Light/lesson', function () {
        return view('iSTEAM.N1.lightforms.Light.lesson');
    })->name('n1lightlesson');

    // N1 -> lightforms ->ligth->teacher
    Route::get('/lightform/Light/teacher', function () {
        return view('iSTEAM.N1.lightforms.Light.teacher');
    })->name('n1lightteacher');


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
        return view('iSTEAM.N1.lightforms.BlackLight.index');
    })->name('blacklight');

    // BlackLight Choice
    Route::get('/blacklightSelection', function () {
        return view('iSTEAM.N1.lightforms.BlackLight.selection');
    })->name('blacklightSelection');

    // BlackLight Lesson
    Route::get('/lightform/blacklight/lesson', function () {
        return view('iSTEAM.N1.lightforms.BlackLight.lesson');
    })->name('blacklightLesson');

    // BlackLight Teacher
    Route::get('/lightform/blacklight/teacher', function () {
        return view('iSTEAM.N1.lightforms.BlackLight.teacher');
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
        return view('iSTEAM.N1.basicStructure.identifyShapes.index');
    })->name('identifyShapes');

    // Identify Shapes Choice
    Route::get('/identifyShapesSelection', function () {
        return view('iSTEAM.N1.basicStructure.identifyShapes.selection');
    })->name('identifyShapesSelection');

    // Identify Shapes Lesson
    Route::get('/basicStructure/identifyShapes/lesson', function () {
        return view('iSTEAM.N1.basicStructure.identifyShapes.lesson');
    })->name('identifyShapesLesson');

    // Identify Shapes Teacher
    Route::get('/basicStructure/identifyShapes/teacher', function () {
        return view('iSTEAM.N1.basicStructure.identifyShapes.teacher');
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
    })->name('N2');
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

    // N2 -> Structures -> structure
    Route::get('/Structures/structure', function () {
        return view('iSTEAM.N2.Structures.structure.index');
    })->name('structure');

    // N2 -> Structures -> structure -> select
    Route::get('/structureChoice', function () {
        return view('iSTEAM.N2.Structures.structure.selection');
    })->name('structureSelection');

    // N2 -> Structures -> structure -> lesson
    Route::get('/Structures/structure/lesson', function () {
        return view('iSTEAM.N2.Structures.structure.lesson');
    })->name('structureLesson');

    // N2 -> Structures -> structure -> teacher
    Route::get('/Structures/structure/teacher', function () {
        return view('iSTEAM.N2.Structures.structure.teacher');
    })->name('structureTeacher');


    // N2 -> Structures -> building
    Route::get('/Structures/building', function () {
        return view('iSTEAM.N2.Structures.building.index');
    })->name('n2building');

    // N2 -> Structures -> building -> select
    Route::get('Structures/buildingChoice', function () {
        return view('iSTEAM.N2.Structures.building.selection');
    })->name('n2buildingSelection');

    // N2 -> Structures -> building -> lesson
    Route::get('/Structures/building/lesson', function () {
        return view('iSTEAM.N2.Structures.building.lesson');
    })->name('n2buildingLesson');

    // N2 -> Structures -> building -> teacher
    Route::get('/Structures/building/teacher', function () {
        return view('iSTEAM.N2.Structures.building.teacher');
    })->name('n2buildingTeacher');


    // N2 -> Structures -> Structureshapes
    Route::get('/Structures/Structureshapes', function () {
        return view('iSTEAM.N2.Structures.Structureshapes.index');
    })->name('Structureshapes');

    // N2 -> Structures -> Structureshapes -> select
    Route::get('/StructureshapesChoice', function () {
        return view('iSTEAM.N2.Structures.Structureshapes.selection');
    })->name('StructureshapesSelection');

    // N2 -> Structures -> Structureshapes -> lesson
    Route::get('/Structures/Structureshapes/lesson', function () {
        return view('iSTEAM.N2.Structures.Structureshapes.lesson');
    })->name('StructureshapesLesson');

    // N2 -> Structures -> Structureshapes -> teacher
    Route::get('/Structures/Structureshapes/teacher', function () {
        return view('iSTEAM.N2.Structures.Structureshapes.teacher');
    })->name('StructureshapesTeacher');


    // N2 -> Structures -> Carstructure
    Route::get('/Structures/Carstructure', function () {
        return view('iSTEAM.N2.Structures.Carstructure.index');
    })->name('Carstructure');

    // N2 -> Structures -> Carstructure -> select
    Route::get('/CarstructureChoice', function () {
        return view('iSTEAM.N2.Structures.Carstructure.selection');
    })->name('CarstructureSelection');

    // N2 -> Structures -> Carstructure -> lesson
    Route::get('/Structures/Carstructure/lesson', function () {
        return view('iSTEAM.N2.Structures.Carstructure.lesson');
    })->name('CarstructureLesson');

    // N2 -> Structures -> Carstructure -> teacher
    Route::get('/Structures/Carstructure/teacher', function () {
        return view('iSTEAM.N2.Structures.Carstructure.teacher');
    })->name('CarstructureTeacher');



    // N2 -> Structures -> Bigstructure
    Route::get('/Structures/Bigstructure', function () {
        return view('iSTEAM.N2.Structures.Bigstructure.index');
    })->name('Bigstructure');

    // N2 -> Structures -> Bigstructure -> select
    Route::get('/BigstructureChoice', function () {
        return view('iSTEAM.N2.Structures.Bigstructure.selection');
    })->name('BigstructureSelection');

    // N2 -> Structures -> Bigstructure -> lesson
    Route::get('/Structures/Bigstructure/lesson', function () {
        return view('iSTEAM.N2.Structures.Bigstructure.lesson');
    })->name('BigstructureLesson');

    // N2 -> Structures -> Bigstructure -> teacher
    Route::get('/Structures/Bigstructure/teacher', function () {
        return view('iSTEAM.N2.Structures.Bigstructure.teacher');
    })->name('BigstructureTeacher');


    // N2 -> Structures -> Triangularstructure
    Route::get('/Structures/Triangularstructure', function () {
        return view('iSTEAM.N2.Structures.Triangularstructure.index');
    })->name('Triangularstructure');

    // N2 -> Structures -> Triangularstructure -> select
    Route::get('/TriangularstructureChoice', function () {
        return view('iSTEAM.N2.Structures.Triangularstructure.selection');
    })->name('TriangularstructureSelection');

    // N2 -> Structures -> Triangularstructure -> lesson
    Route::get('/Structures/Triangularstructure/lesson', function () {
        return view('iSTEAM.N2.Structures.Triangularstructure.lesson');
    })->name('TriangularstructureLesson');

    // N2 -> Structures -> Triangularstructure -> teacher
    Route::get('/Structures/Triangularstructure/teacher', function () {
        return view('iSTEAM.N2.Structures.Triangularstructure.teacher');
    })->name('TriangularstructureTeacher');


    // N2 -> Structures -> Citystructure
    Route::get('/Structures/Citystructure', function () {
        return view('iSTEAM.N2.Structures.Citystructure.index');
    })->name('Citystructure');

    // N2 -> Structures -> Citystructure -> select
    Route::get('/CitystructureChoice', function () {
        return view('iSTEAM.N2.Structures.Citystructure.selection');
    })->name('CitystructureSelection');

    // N2 -> Structures -> Citystructure -> lesson
    Route::get('/Structures/Citystructure/lesson', function () {
        return view('iSTEAM.N2.Structures.Citystructure.lesson');
    })->name('CitystructureLesson');

    // N2 -> Structures -> Citystructure -> teacher
    Route::get('/Structures/Citystructure/teacher', function () {
        return view('iSTEAM.N2.Structures.Citystructure.teacher');
    })->name('CitystructureTeacher');










    // =======================================
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
    })->name('K1');

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





    // K1 -> SampleMachines
    Route::get('K1/CompoundMachines', function () {
        return view('iSTEAM.K1.CompoundMachines.index');
    })->name('K1CompoundMachines');


    // K1 -> CompoundMachines -> DominoFun
    Route::get('/CompoundMachines/DominoFun', function () {
        return view('iSTEAM.K1.CompoundMachines.DominoFun.index');
    })->name('DominoFun');

    // K1 -> CompoundMachines -> DominoFun -> select
    Route::get('/DominoFunChoice', function () {
        return view('iSTEAM.K1.CompoundMachines.DominoFun.selection');
    })->name('DominoFunSelection');

    // K1 -> CompoundMachines -> DominoFun -> lesson
    Route::get('/CompoundMachines/DominoFun/lesson', function () {
        return view('iSTEAM.K1.CompoundMachines.DominoFun.lesson');
    })->name('DominoFunLesson');

    // K1 -> CompoundMachines -> DominoFun -> teacher
    Route::get('/CompoundMachines/DominoFun/teacher', function () {
        return view('iSTEAM.K1.CompoundMachines.DominoFun.teacher');
    })->name('DominoFunTeacher');


    // K1 -> CompoundMachines -> Patterns
    Route::get('/CompoundMachines/Patterns', function () {
        return view('iSTEAM.K1.CompoundMachines.Patterns.index');
    })->name('Patterns');

    // K1 -> CompoundMachines -> Patterns -> select
    Route::get('/PatternsChoice', function () {
        return view('iSTEAM.K1.CompoundMachines.Patterns.selection');
    })->name('PatternsSelection');

    // K1 -> CompoundMachines -> Patterns -> lesson
    Route::get('/CompoundMachines/Patterns/lesson', function () {
        return view('iSTEAM.K1.CompoundMachines.Patterns.lesson');
    })->name('PatternsLesson');

    // K1 -> CompoundMachines -> Patterns -> teacher
    Route::get('/CompoundMachines/Patterns/teacher', function () {
        return view('iSTEAM.K1.CompoundMachines.Patterns.teacher');
    })->name('PatternsTeacher');





    // K1 -> CompoundMachines -> SmartIdeas
    Route::get('/CompoundMachines/SmartIdeas', function () {
        return view('iSTEAM.K1.CompoundMachines.SmartIdeas.index');
    })->name('SmartIdeas');

    // K1 -> CompoundMachines -> SmartIdeas -> select
    Route::get('/SmartIdeasChoice', function () {
        return view('iSTEAM.K1.CompoundMachines.SmartIdeas.selection');
    })->name('SmartIdeasSelection');

    // K1 -> CompoundMachines -> SmartIdeas -> lesson
    Route::get('/CompoundMachines/SmartIdeas/lesson', function () {
        return view('iSTEAM.K1.CompoundMachines.SmartIdeas.lesson');
    })->name('SmartIdeasLesson');

    // K1 -> CompoundMachines -> SmartIdeas -> teacher
    Route::get('/CompoundMachines/SmartIdeas/teacher', function () {
        return view('iSTEAM.K1.CompoundMachines.SmartIdeas.teacher');
    })->name('SmartIdeasTeacher');





    // K1 -> CompoundMachines -> Machines
    Route::get('/CompoundMachines/Machines', function () {
        return view('iSTEAM.K1.CompoundMachines.Machines.index');
    })->name('Machines');

    // K1 -> CompoundMachines -> Machines -> select
    Route::get('/MachinesChoice', function () {
        return view('iSTEAM.K1.CompoundMachines.Machines.selection');
    })->name('MachinesSelection');

    // K1 -> CompoundMachines -> Machines -> lesson
    Route::get('/CompoundMachines/Machines/lesson', function () {
        return view('iSTEAM.K1.CompoundMachines.Machines.lesson');
    })->name('MachinesLesson');

    // K1 -> CompoundMachines -> Machines -> teacher
    Route::get('/CompoundMachines/Machines/teacher', function () {
        return view('iSTEAM.K1.CompoundMachines.Machines.teacher');
    })->name('MachinesTeacher');



    // K1 -> CompoundMachines -> Innovation
    Route::get('/CompoundMachines/Innovation', function () {
        return view('iSTEAM.K1.CompoundMachines.Innovation.index');
    })->name('Innovation');

    // K1 -> CompoundMachines -> Innovation -> select
    Route::get('/InnovationChoice', function () {
        return view('iSTEAM.K1.CompoundMachines.Innovation.selection');
    })->name('InnovationSelection');

    // K1 -> CompoundMachines -> Innovation -> lesson
    Route::get('/CompoundMachines/Innovation/lesson', function () {
        return view('iSTEAM.K1.CompoundMachines.Innovation.lesson');
    })->name('InnovationLesson');

    // K1 -> CompoundMachines -> Innovation -> teacher
    Route::get('/CompoundMachines/Innovation/teacher', function () {
        return view('iSTEAM.K1.CompoundMachines.Innovation.teacher');
    })->name('InnovationTeacher');



    // K1 -> structure 
    Route::get('/K1structure', function () {
        return view('iSTEAM.K1.structure.index');
    })->name('K1structure');

    // K1 -> structure -> building
    Route::get('/structure/building', function () {
        return view('iSTEAM.K1.structure.building.index');
    })->name('buildings');

    // K1 -> structure -> building -> select
    Route::get('/buildingChoice', function () {
        return view('iSTEAM.K1.structure.building.selection');
    })->name('buildingsSelection');

    // K1 -> structure -> building -> lesson
    Route::get('/structure/building/lesson', function () {
        return view('iSTEAM.K1.structure.building.lesson');
    })->name('buildingsLesson');

    // K1 -> structure -> building -> teacher
    Route::get('/structure/building/teacher', function () {
        return view('iSTEAM.K1.structure.building.teacher');
    })->name('buildingsTeacher');


    // K1 -> structure -> umbrella
    Route::get('/structure/umbrella', function () {
        return view('iSTEAM.K1.structure.umbrella.index');
    })->name('umbrella');

    // K1 -> structure -> umbrella -> select
    Route::get('/umbrellaChoice', function () {
        return view('iSTEAM.K1.structure.umbrella.selection');
    })->name('umbrellaSelection');

    // K1 -> structure -> umbrella -> lesson
    Route::get('/structure/umbrella/lesson', function () {
        return view('iSTEAM.K1.structure.umbrella.lesson');
    })->name('umbrellaLesson');

    // K1 -> structure -> umbrella -> teacher
    Route::get('/structure/umbrella/teacher', function () {
        return view('iSTEAM.K1.structure.umbrella.teacher');
    })->name('umbrellaTeacher');



    // K1 -> structure -> dome
    Route::get('/structure/dome', function () {
        return view('iSTEAM.K1.structure.dome.index');
    })->name('dome');

    // K1 -> structure -> dome -> select
    Route::get('/domeChoice', function () {
        return view('iSTEAM.K1.structure.dome.selection');
    })->name('domeSelection');

    // K1 -> structure -> dome -> lesson
    Route::get('/structure/dome/lesson', function () {
        return view('iSTEAM.K1.structure.dome.lesson');
    })->name('domeLesson');

    // K1 -> structure -> dome -> teacher
    Route::get('/structure/dome/teacher', function () {
        return view('iSTEAM.K1.structure.dome.teacher');
    })->name('domeTeacher');



    // K1 -> structure -> bridge
    Route::get('/structure/bridge', function () {
        return view('iSTEAM.K1.structure.bridge.index');
    })->name('bridge');

    // K1 -> structure -> bridge -> select
    Route::get('/bridgeChoice', function () {
        return view('iSTEAM.K1.structure.bridge.selection');
    })->name('bridgeSelection');

    // K1 -> structure -> bridge -> lesson
    Route::get('/structure/bridge/lesson', function () {
        return view('iSTEAM.K1.structure.bridge.lesson');
    })->name('bridgeLesson');

    // K1 -> structure -> bridge -> teacher
    Route::get('/structure/bridge/teacher', function () {
        return view('iSTEAM.K1.structure.bridge.teacher');
    })->name('bridgeTeacher');





    // K1 -> structure -> giant
    Route::get('/structure/giant', function () {
        return view('iSTEAM.K1.structure.giant.index');
    })->name('giant');

    // K1 -> structure -> giant -> select
    Route::get('/giantChoice', function () {
        return view('iSTEAM.K1.structure.giant.selection');
    })->name('giantSelection');

    // K1 -> structure -> giant -> lesson
    Route::get('/structure/giant/lesson', function () {
        return view('iSTEAM.K1.structure.giant.lesson');
    })->name('giantLesson');

    // K1 -> structure -> giant -> teacher
    Route::get('/structure/giant/teacher', function () {
        return view('iSTEAM.K1.structure.giant.teacher');
    })->name('giantTeacher');



    // K1 -> structure -> unique
    Route::get('/structure/unique', function () {
        return view('iSTEAM.K1.structure.unique.index');
    })->name('unique');

    // K1 -> structure -> unique -> select
    Route::get('/uniqueChoice', function () {
        return view('iSTEAM.K1.structure.unique.selection');
    })->name('uniqueSelection');

    // K1 -> structure -> unique -> lesson
    Route::get('/structure/unique/lesson', function () {
        return view('iSTEAM.K1.structure.unique.lesson');
    })->name('uniqueLesson');

    // K1 -> structure -> unique -> teacher
    Route::get('/structure/unique/teacher', function () {
        return view('iSTEAM.K1.structure.unique.teacher');
    })->name('uniqueTeacher');




    // K1 -> structure -> city
    Route::get('/structure/city', function () {
        return view('iSTEAM.K1.structure.city.index');
    })->name('city');

    // K1 -> structure -> city -> select
    Route::get('/cityChoice', function () {
        return view('iSTEAM.K1.structure.city.selection');
    })->name('citySelection');

    // K1 -> structure -> city -> lesson
    Route::get('/structure/city/lesson', function () {
        return view('iSTEAM.K1.structure.city.lesson');
    })->name('cityLesson');

    // K1 -> structure -> city -> teacher
    Route::get('/structure/city/teacher', function () {
        return view('iSTEAM.K1.structure.city.teacher');
    })->name('cityTeacher');



    // K1 -> structure -> roller
    Route::get('/structure/roller', function () {
        return view('iSTEAM.K1.structure.roller.index');
    })->name('roller');

    // K1 -> structure -> roller -> select
    Route::get('/rollerChoice', function () {
        return view('iSTEAM.K1.structure.roller.selection');
    })->name('rollerSelection');

    // K1 -> structure -> roller -> lesson
    Route::get('/structure/roller/lesson', function () {
        return view('iSTEAM.K1.structure.roller.lesson');
    })->name('rollerLesson');

    // K1 -> structure -> roller -> teacher
    Route::get('/structure/roller/teacher', function () {
        return view('iSTEAM.K1.structure.roller.teacher');
    })->name('rollerTeacher');




    // ======
    // K1 -> coding
    Route::get('/coding', function () {
        return view('iSTEAM.K1.coding.index');
    })->name('coding');


    // K1 -> coding -> wCoding
    Route::get('/coding/wCoding', function () {
        return view('iSTEAM.K1.coding.wCoding.index');
    })->name('wCoding');

    // K1 -> coding -> wCoding -> select
    Route::get('/wCodingChoice', function () {
        return view('iSTEAM.K1.coding.wCoding.selection');
    })->name('wCodingSelection');

    // K1 -> coding -> wCoding -> lesson
    Route::get('/coding/wCoding/lesson', function () {
        return view('iSTEAM.K1.coding.wCoding.lesson');
    })->name('wCodingLesson');

    // K1 -> coding -> wCoding -> teacher
    Route::get('/coding/wCoding/teacher', function () {
        return view('iSTEAM.K1.coding.wCoding.teacher');
    })->name('wCodingTeacher');


    // K1 -> coding -> go1
    Route::get('/coding/go1', function () {
        return view('iSTEAM.K1.coding.go1.index');
    })->name('go1');

    // K1 -> coding -> go1 -> select
    Route::get('/go1Choice', function () {
        return view('iSTEAM.K1.coding.go1.selection');
    })->name('go1Selection');

    // K1 -> coding -> go1 -> lesson
    Route::get('/coding/go1/lesson', function () {
        return view('iSTEAM.K1.coding.go1.lesson');
    })->name('go1Lesson');

    // K1 -> coding -> go1 -> teacher
    Route::get('/coding/go1/teacher', function () {
        return view('iSTEAM.K1.coding.go1.teacher');
    })->name('go1Teacher');


    // K1 -> coding -> go2
    Route::get('/coding/go2', function () {
        return view('iSTEAM.K1.coding.go2.index');
    })->name('go2');

    // K1 -> coding -> go2 -> select
    Route::get('/go2Choice', function () {
        return view('iSTEAM.K1.coding.go2.selection');
    })->name('go2Selection');

    // K1 -> coding -> go2 -> lesson
    Route::get('/coding/go2/lesson', function () {
        return view('iSTEAM.K1.coding.go2.lesson');
    })->name('go2Lesson');

    // K1 -> coding -> go2 -> teacher
    Route::get('/coding/go2/teacher', function () {
        return view('iSTEAM.K1.coding.go2.teacher');
    })->name('go2Teacher');


    // K1 -> coding -> fast
    Route::get('/coding/fast', function () {
        return view('iSTEAM.K1.coding.fast.index');
    })->name('fast');

    // K1 -> coding -> fast -> select
    Route::get('/fastChoice', function () {
        return view('iSTEAM.K1.coding.fast.selection');
    })->name('fastSelection');

    // K1 -> coding -> fast -> lesson
    Route::get('/coding/fast/lesson', function () {
        return view('iSTEAM.K1.coding.fast.lesson');
    })->name('fastLesson');

    // K1 -> coding -> fast -> teacher
    Route::get('/coding/fast/teacher', function () {
        return view('iSTEAM.K1.coding.fast.teacher');
    })->name('fastTeacher');



    // K1 -> coding -> soundL
    Route::get('/coding/soundL', function () {
        return view('iSTEAM.K1.coding.soundL.index');
    })->name('soundL');

    // K1 -> coding -> soundL -> select
    Route::get('/soundLChoice', function () {
        return view('iSTEAM.K1.coding.soundL.selection');
    })->name('soundLSelection');

    // K1 -> coding -> soundL -> lesson
    Route::get('/coding/soundL/lesson', function () {
        return view('iSTEAM.K1.coding.soundL.lesson');
    })->name('soundLLesson');

    // K1 -> coding -> soundL -> teacher
    Route::get('/coding/soundL/teacher', function () {
        return view('iSTEAM.K1.coding.soundL.teacher');
    })->name('soundLTeacher');



    // K1 -> coding -> challenge1
    Route::get('/coding/challenge1', function () {
        return view('iSTEAM.K1.coding.challenge1.index');
    })->name('challenge1');

    // K1 -> coding -> challenge1 -> select
    Route::get('/challenge1Choice', function () {
        return view('iSTEAM.K1.coding.challenge1.selection');
    })->name('challenge1Selection');

    // K1 -> coding -> challenge1 -> lesson
    Route::get('/coding/challenge1/lesson', function () {
        return view('iSTEAM.K1.coding.challenge1.lesson');
    })->name('challenge1Lesson');

    // K1 -> coding -> challenge1 -> teacher
    Route::get('/coding/challenge1/teacher', function () {
        return view('iSTEAM.K1.coding.challenge1.teacher');
    })->name('challenge1Teacher');


    // K1 -> coding -> challenge2
    Route::get('/coding/challenge2', function () {
        return view('iSTEAM.K1.coding.challenge2.index');
    })->name('challenge2');

    // K1 -> coding -> challenge2 -> select
    Route::get('/challenge2Choice', function () {
        return view('iSTEAM.K1.coding.challenge2.selection');
    })->name('challenge2Selection');

    // K1 -> coding -> challenge2 -> lesson
    Route::get('/coding/challenge2/lesson', function () {
        return view('iSTEAM.K1.coding.challenge2.lesson');
    })->name('challenge2Lesson');

    // K1 -> coding -> challenge2 -> teacher
    Route::get('/coding/challenge2/teacher', function () {
        return view('iSTEAM.K1.coding.challenge2.teacher');
    })->name('challenge2Teacher');



    // K1 -> coding -> challenge3
    Route::get('/coding/challenge3', function () {
        return view('iSTEAM.K1.coding.challenge3.index');
    })->name('challenge3');

    // K1 -> coding -> challenge3 -> select
    Route::get('/challenge3Choice', function () {
        return view('iSTEAM.K1.coding.challenge3.selection');
    })->name('challenge3Selection');

    // K1 -> coding -> challenge3 -> lesson
    Route::get('/coding/challenge3/lesson', function () {
        return view('iSTEAM.K1.coding.challenge3.lesson');
    })->name('challenge3Lesson');

    // K1 -> coding -> challenge3 -> teacher
    Route::get('/coding/challenge3/teacher', function () {
        return view('iSTEAM.K1.coding.challenge3.teacher');
    })->name('challenge3Teacher');


    // K1 -> coding -> challenge4
    Route::get('/coding/challenge4', function () {
        return view('iSTEAM.K1.coding.challenge4.index');
    })->name('challenge4');

    // K1 -> coding -> challenge4 -> select
    Route::get('/challenge4Choice', function () {
        return view('iSTEAM.K1.coding.challenge4.selection');
    })->name('challenge4Selection');

    // K1 -> coding -> challenge4 -> lesson
    Route::get('/coding/challenge4/lesson', function () {
        return view('iSTEAM.K1.coding.challenge4.lesson');
    })->name('challenge4Lesson');

    // K1 -> coding -> challenge4 -> teacher
    Route::get('/coding/challenge4/teacher', function () {
        return view('iSTEAM.K1.coding.challenge4.teacher');
    })->name('challenge4Teacher');



    // K1 -> coding -> challenge5
    Route::get('/coding/challenge5', function () {
        return view('iSTEAM.K1.coding.challenge5.index');
    })->name('challenge5');

    // K1 -> coding -> challenge5 -> select
    Route::get('/challenge5Choice', function () {
        return view('iSTEAM.K1.coding.challenge5.selection');
    })->name('challenge5Selection');

    // K1 -> coding -> challenge5 -> lesson
    Route::get('/coding/challenge5/lesson', function () {
        return view('iSTEAM.K1.coding.challenge5.lesson');
    })->name('challenge5Lesson');

    // K1 -> coding -> challenge5 -> teacher
    Route::get('/coding/challenge5/teacher', function () {
        return view('iSTEAM.K1.coding.challenge5.teacher');
    })->name('challenge5Teacher');



    // K1 -> coding -> final
    Route::get('/coding/final', function () {
        return view('iSTEAM.K1.coding.final.index');
    })->name('final');

    // K1 -> coding -> final -> select
    Route::get('/finalChoice', function () {
        return view('iSTEAM.K1.coding.final.selection');
    })->name('finalSelection');

    // K1 -> coding -> final -> lesson
    Route::get('/coding/final/lesson', function () {
        return view('iSTEAM.K1.coding.final.lesson');
    })->name('finalLesson');

    // K1 -> coding -> final -> teacher
    Route::get('/coding/final/teacher', function () {
        return view('iSTEAM.K1.coding.final.teacher');
    })->name('finalTeacher');




    // ======
    // K2
    Route::get('/K2', function () {
        return view('iSTEAM.K2.index');
    })->name('K2');

    // ======
    // K2 -> livingthings
    Route::get('/k2LivingThings', function () {
        return view('iSTEAM.K2.livingthings.index');
    })->name('k2livingthings');


    // K2 -> livingthings -> Pgrow
    Route::get('/livingthings/Plantsgrowth', function () {
        return view('iSTEAM.K2.livingthings.Pgrow.index');
    })->name('Pgrow');

    // K2 -> livingthings -> Plantsgrowth -> select
    Route::get('/PlantsgrowthChoice', function () {
        return view('iSTEAM.K2.livingthings.Pgrow.selection');
    })->name('PgrowSelection');

    // K2 -> livingthings -> Plantsgrowth -> lesson
    Route::get('/livingthings/Plantsgrowth/lesson', function () {
        return view('iSTEAM.K2.livingthings.Pgrow.lesson');
    })->name('PgrowLesson');

    // K2 -> livingthings -> Plantsgrowth -> teacher
    Route::get('/livingthings/Plantsgrowth/teacher', function () {
        return view('iSTEAM.K2.livingthings.Pgrow.teacher');
    })->name('PgrowTeacher');


    // K2 -> livingthings -> Bgrow
    Route::get('/livingthings/Bacteriagrow', function () {
        return view('iSTEAM.K2.livingthings.Bgrow.index');
    })->name('Bgrow');

    // K2 -> livingthings -> Bacteriagrow -> select
    Route::get('/BacteriagrowChoice', function () {
        return view('iSTEAM.K2.livingthings.Bgrow.selection');
    })->name('BgrowSelection');

    // K2 -> livingthings -> Bacteriagrow -> lesson
    Route::get('/livingthings/Bacteriagrow/lesson', function () {
        return view('iSTEAM.K2.livingthings.Bgrow.lesson');
    })->name('BgrowLesson');

    // K2 -> livingthings -> Bacteriagrow -> teacher
    Route::get('/livingthings/Bacteriagrow/teacher', function () {
        return view('iSTEAM.K2.livingthings.Bgrow.teacher');
    })->name('BgrowTeacher');


    // K2 -> livingthings -> things
    Route::get('/WhatareLivingThings', function () {
        return view('iSTEAM.K2.livingthings.things.index');
    })->name('K2things');

    // K2 -> livingthings -> LivingThings? -> select
    Route::get('/LivingThingsChoice', function () {
        return view('iSTEAM.K2.livingthings.things.selection');
    })->name('K2thingsSelection');

    // K2 -> livingthings -> LivingThings? -> lesson
    Route::get('/LivingThings/lesson', function () {
        return view('iSTEAM.K2.livingthings.things.lesson');
    })->name('thingsLesson');

    // K2 -> livingthings -> LivingThings? -> teacher
    Route::get('/LivingThings/teacher', function () {
        return view('iSTEAM.K2.livingthings.things.teacher');
    })->name('thingsTeacher');



    // K2 -> livingthings -> pthings
    Route::get('/PlantsAreLivingthings', function () {
        return view('iSTEAM.K2.livingthings.pthings.index');
    })->name('pthings');

    // K2 -> livingthings -> PlantsAreLivingthings? -> select
    Route::get('/PlantsAreLivingthingsChoice', function () {
        return view('iSTEAM.K2.livingthings.pthings.selection');
    })->name('pthingsSelection');

    // K2 -> livingthings -> PlantsAreLivingthings? -> lesson
    Route::get('/PlantsAreLivingthings/lesson', function () {
        return view('iSTEAM.K2.livingthings.pthings.lesson');
    })->name('pthingsLesson');

    // K2 -> livingthings -> PlantsAreLivingthings? -> teacher
    Route::get('/PlantsAreLivingthings/teacher', function () {
        return view('iSTEAM.K2.livingthings.pthings.teacher');
    })->name('pthingsTeacher');



    // K2 -> livingthings -> bacteria
    Route::get('/livingthings/Bacteria', function () {
        return view('iSTEAM.K2.livingthings.bacteria.index');
    })->name('bacteria');

    // K2 -> livingthings -> Bacteria -> select
    Route::get('/BacteriaChoice', function () {
        return view('iSTEAM.K2.livingthings.bacteria.selection');
    })->name('bacteriaSelection');

    // K2 -> livingthings -> Bacteria -> lesson
    Route::get('/livingthings/Bacteria/lesson', function () {
        return view('iSTEAM.K2.livingthings.bacteria.lesson');
    })->name('bacteriaLesson');

    // K2 -> livingthings -> Bacteria -> teacher
    Route::get('/livingthings/Bacteria/teacher', function () {
        return view('iSTEAM.K2.livingthings.bacteria.teacher');
    })->name('bacteriaTeacher');


    // K2 -> livingthings -> killing
    Route::get('/livingthings/killing', function () {
        return view('iSTEAM.K2.livingthings.killing.index');
    })->name('killing');

    // K2 -> livingthings -> killing -> select
    Route::get('/killingChoice', function () {
        return view('iSTEAM.K2.livingthings.killing.selection');
    })->name('killingSelection');

    // K2 -> livingthings -> killing -> lesson
    Route::get('/livingthings/killing/lesson', function () {
        return view('iSTEAM.K2.livingthings.killing.lesson');
    })->name('killingLesson');

    // K2 -> livingthings -> killing -> teacher
    Route::get('/livingthings/killing/teacher', function () {
        return view('iSTEAM.K2.livingthings.killing.teacher');
    })->name('killingTeacher');


    // K2 -> livingthings -> Dna
    Route::get('/livingthings/WhatisDNA', function () {
        return view('iSTEAM.K2.livingthings.dna.index');
    })->name('Dna');

    // K2 -> livingthings -> WhatisDNA? -> select
    Route::get('/WhatisDNAChoice', function () {
        return view('iSTEAM.K2.livingthings.dna.selection');
    })->name('DnaSelection');

    // K2 -> livingthings -> WhatisDNA? -> lesson
    Route::get('/livingthings/WhatisDNA/lesson', function () {
        return view('iSTEAM.K2.livingthings.dna.lesson');
    })->name('DnaLesson');

    // K2 -> livingthings -> WhatisDNA -> teacher
    Route::get('/livingthings/WhatisDNA/teacher', function () {
        return view('iSTEAM.K2.livingthings.dna.teacher');
    })->name('DnaTeacher');


    // K2 -> livingthings -> tomatoDna
    Route::get('/livingthings/TomatoDNA', function () {
        return view('iSTEAM.K2.livingthings.tomatoDna.index');
    })->name('tomatoDna');

    // K2 -> livingthings -> TomatoDNA? -> select
    Route::get('/TomatoDNAChoice', function () {
        return view('iSTEAM.K2.livingthings.tomatoDna.selection');
    })->name('tomatoDnaSelection');

    // K2 -> livingthings -> TomatoDNA? -> lesson
    Route::get('/livingthings/TomatoDNA/lesson', function () {
        return view('iSTEAM.K2.livingthings.tomatoDna.lesson');
    })->name('tomatoDnaLesson');

    // K2 -> livingthings -> TomatoDNA -> teacher
    Route::get('/livingthings/TomatoDNA/teacher', function () {
        return view('iSTEAM.K2.livingthings.tomatoDna.teacher');
    })->name('tomatoDnaTeacher');


    // =====
    // K2 -> livingthings -> helix
    Route::get('/livingthings/doubleDNAhelix', function () {
        return view('iSTEAM.K2.livingthings.helix.index');
    })->name('helix');

    // K2 -> livingthings -> doubleDNAhelix -> select
    Route::get('/doubleDNAhelixChoice', function () {
        return view('iSTEAM.K2.livingthings.helix.selection');
    })->name('helixSelection');

    // K2 -> livingthings -> doubleDNAhelix -> lesson
    Route::get('/livingthings/doubleDNAhelix/lesson', function () {
        return view('iSTEAM.K2.livingthings.helix.lesson');
    })->name('helixLesson');

    // K2 -> livingthings -> doubleDNAhelix -> teacher
    Route::get('/livingthings/doubleDNAhelix/teacher', function () {
        return view('iSTEAM.K2.livingthings.helix.teacher');
    })->name('helixTeacher');


    // ======
    // K2 -> livingthings -> Fingerprints
    Route::get('/livingthings/Fingerprints', function () {
        return view('iSTEAM.K2.livingthings.Fingerprints.index');
    })->name('Fingerprints');

    // K2 -> livingthings -> Fingerprints -> select
    Route::get('/FingerprintsChoice', function () {
        return view('iSTEAM.K2.livingthings.Fingerprints.selection');
    })->name('FingerprintsSelection');

    // K2 -> livingthings -> Fingerprints -> lesson
    Route::get('/livingthings/Fingerprints/lesson', function () {
        return view('iSTEAM.K2.livingthings.Fingerprints.lesson');
    })->name('FingerprintsLesson');

    // K2 -> livingthings -> Fingerprints -> teacher
    Route::get('/livingthings/Fingerprints/teacher', function () {
        return view('iSTEAM.K2.livingthings.Fingerprints.teacher');
    })->name('FingerprintsTeacher');



    // ====
    // K2 -> livingthings -> Fingerprintspatterns
    Route::get('/livingthings/Fingerprintpatterns', function () {
        return view('iSTEAM.K2.livingthings.patterns.index');
    })->name('Fingerprintpatterns');

    // K2 -> livingthings -> Fingerprintspatterns -> select
    Route::get('/FingerprintspatternsChoice', function () {
        return view('iSTEAM.K2.livingthings.patterns.selection');
    })->name('FingerprintpatternsSelection');

    // K2 -> livingthings -> Fingerprintspatterns -> lesson
    Route::get('/livingthings/Fingerprintspattern/lesson', function () {
        return view('iSTEAM.K2.livingthings.patterns.lesson');
    })->name('FingerprintpatternsLesson');

    // K2 -> livingthings -> Fingerprintspatterns -> teacher
    Route::get('/livingthings/Fingerprintspatterns/teacher', function () {
        return view('iSTEAM.K2.livingthings.patterns.teacher');
    })->name('FingerprintpatternsTeacher');

    // ====
    // K2 -> livingthings -> UseofFingerprints
    Route::get('/livingthings/UseofFingerprints', function () {
        return view('iSTEAM.K2.livingthings.usage.index');
    })->name('usage');

    // K2 -> livingthings -> UseofFingerprints -> select
    Route::get('/UseofFingerprintsChoice', function () {
        return view('iSTEAM.K2.livingthings.usage.selection');
    })->name('usageSelection');

    // K2 -> livingthings -> UseofFingerprints -> lesson
    Route::get('/livingthings/UseofFingerprints/lesson', function () {
        return view('iSTEAM.K2.livingthings.usage.lesson');
    })->name('usageLesson');

    // K2 -> livingthings -> UseofFingerprints -> teacher
    Route::get('/livingthings/UseofFingerprints/teacher', function () {
        return view('iSTEAM.K2.livingthings.usage.teacher');
    })->name('usageTeacher');





    // ======
    // K2 -> sustainability
    Route::get('/k2sustainability', function () {
        return view('iSTEAM.K2.sustainability.index');
    })->name('k2sustainability');

    //1 ====
    // K2 -> sustainability -> GlobalWarming
    Route::get('/sustainability/GlobalWarming', function () {
        return view('iSTEAM.K2.sustainability.warming.index');
    })->name('warming');

    // K2 -> sustainability -> GlobalWarming -> select
    Route::get('/GlobalWarmingChoice', function () {
        return view('iSTEAM.K2.sustainability.warming.selection');
    })->name('warmingSelection');

    // K2 -> sustainability -> GlobalWarming -> lesson
    Route::get('/sustainability/GlobalWarming/lesson', function () {
        return view('iSTEAM.K2.sustainability.warming.lesson');
    })->name('warmingLesson');

    // K2 -> sustainability -> GlobalWarming -> teacher
    Route::get('/sustainability/GlobalWarming/teacher', function () {
        return view('iSTEAM.K2.sustainability.warming.teacher');
    })->name('warmingTeacher');


    //2 ====
    // K2 -> sustainability -> WhatisSustainability
    Route::get('/sustainability/WhatisSustainability', function () {
        return view('iSTEAM.K2.sustainability.sustain.index');
    })->name('sustain');

    // K2 -> sustainability -> WhatisSustainability -> select
    Route::get('/WhatisSustainabilityChoice', function () {
        return view('iSTEAM.K2.sustainability.sustain.selection');
    })->name('sustainSelection');

    // K2 -> sustainability -> WhatisSustainability -> lesson
    Route::get('/sustainability/WhatisSustainability/lesson', function () {
        return view('iSTEAM.K2.sustainability.sustain.lesson');
    })->name('sustainLesson');

    // K2 -> sustainability -> WhatisSustainability -> teacher
    Route::get('/sustainability/WhatisSustainability/teacher', function () {
        return view('iSTEAM.K2.sustainability.sustain.teacher');
    })->name('sustainTeacher');


    //3 ====
    // K2 -> sustainability -> CleanEnergy1
    Route::get('/sustainability/CleanEnergy1', function () {
        return view('iSTEAM.K2.sustainability.energy1.index');
    })->name('energy1');

    // K2 -> sustainability -> CleanEnergy1 -> select
    Route::get('/CleanEnergy1Choice', function () {
        return view('iSTEAM.K2.sustainability.energy1.selection');
    })->name('energy1Selection');

    // K2 -> sustainability -> CleanEnergy1 -> lesson
    Route::get('/sustainability/CleanEnergy1/lesson', function () {
        return view('iSTEAM.K2.sustainability.energy1.lesson');
    })->name('energy1Lesson');

    // K2 -> sustainability -> CleanEnergy1 -> teacher
    Route::get('/sustainability/CleanEnergy1/teacher', function () {
        return view('iSTEAM.K2.sustainability.energy1.teacher');
    })->name('energy1Teacher');

    //4====
    // K2 -> sustainability -> CleanEnergy2
    Route::get('/sustainability/CleanEnergy2', function () {
        return view('iSTEAM.K2.sustainability.energy2.index');
    })->name('energy2');

    // K2 -> sustainability -> CleanEnergy2 -> select
    Route::get('/CleanEnergy2Choice', function () {
        return view('iSTEAM.K2.sustainability.energy2.selection');
    })->name('energy2Selection');

    // K2 -> sustainability -> CleanEnergy2 -> lesson
    Route::get('/sustainability/CleanEnergy2/lesson', function () {
        return view('iSTEAM.K2.sustainability.energy2.lesson');
    })->name('energy2Lesson');

    // K2 -> sustainability -> CleanEnergy2 -> teacher
    Route::get('/sustainability/CleanEnergy2/teacher', function () {
        return view('iSTEAM.K2.sustainability.energy2.teacher');
    })->name('energy2Teacher');


    //5====
    // K2 -> sustainability -> Pollution
    Route::get('/sustainability/Pollution', function () {
        return view('iSTEAM.K2.sustainability.pollution.index');
    })->name('pollution');

    // K2 -> sustainability -> Pollution -> select
    Route::get('/PollutionChoice', function () {
        return view('iSTEAM.K2.sustainability.pollution.selection');
    })->name('pollutionSelection');

    // K2 -> sustainability -> Pollution -> lesson
    Route::get('/sustainability/Pollution/lesson', function () {
        return view('iSTEAM.K2.sustainability.pollution.lesson');
    })->name('pollutionLesson');

    // K2 -> sustainability -> Pollution -> teacher
    Route::get('/sustainability/Pollution/teacher', function () {
        return view('iSTEAM.K2.sustainability.pollution.teacher');
    })->name('pollutionTeacher');


    //6====
    // K2 -> sustainability -> Reduce&Reuse
    Route::get('/sustainability/Reduce-Reuse', function () {
        return view('iSTEAM.K2.sustainability.reduce.index');
    })->name('reduce');

    // K2 -> sustainability -> Reduce-Reuse -> select
    Route::get('/Reduce-ReuseChoice', function () {
        return view('iSTEAM.K2.sustainability.reduce.selection');
    })->name('reduceSelection');

    // K2 -> sustainability -> Reduce-Reuse -> lesson
    Route::get('/sustainability/Reduce-Reuse/lesson', function () {
        return view('iSTEAM.K2.sustainability.reduce.lesson');
    })->name('reduceLesson');

    // K2 -> sustainability -> Reduce-Reuse -> teacher
    Route::get('/sustainability/Reduce-Reuse/teacher', function () {
        return view('iSTEAM.K2.sustainability.reduce.teacher');
    })->name('reduceTeacher');


    //7====
    // K2 -> sustainability -> letsRecycle
    Route::get('/sustainability/letsRecycle', function () {
        return view('iSTEAM.K2.sustainability.recycle.index');
    })->name('recycle');

    // K2 -> sustainability -> letsRecycle -> select
    Route::get('/letsRecycleChoice', function () {
        return view('iSTEAM.K2.sustainability.recycle.selection');
    })->name('recycleSelection');

    // K2 -> sustainability -> letsRecycle -> lesson
    Route::get('/sustainability/letsRecycle/lesson', function () {
        return view('iSTEAM.K2.sustainability.recycle.lesson');
    })->name('recycleLesson');

    // K2 -> sustainability -> letsRecycle -> teacher
    Route::get('/sustainability/letsRecycle/teacher', function () {
        return view('iSTEAM.K2.sustainability.recycle.teacher');
    })->name('recycleTeacher');



    //8====
    // K2 -> sustainability -> Self-Sufficient
    Route::get('/sustainability/Self-Sufficient', function () {
        return view('iSTEAM.K2.sustainability.self.index');
    })->name('self');

    // K2 -> sustainability -> Self-Sufficient -> select
    Route::get('/Self-SufficientChoice', function () {
        return view('iSTEAM.K2.sustainability.self.selection');
    })->name('selfSelection');

    // K2 -> sustainability -> Self-Sufficient -> lesson
    Route::get('/sustainability/Self-Sufficient/lesson', function () {
        return view('iSTEAM.K2.sustainability.self.lesson');
    })->name('selfLesson');

    // K2 -> sustainability -> Self-Sufficient -> teacher
    Route::get('/sustainability/Self-Sufficient/teacher', function () {
        return view('iSTEAM.K2.sustainability.self.teacher');
    })->name('selfTeacher');


    //9====
    // K2 -> sustainability -> CarbonFootprint
    Route::get('/sustainability/CarbonFootprint', function () {
        return view('iSTEAM.K2.sustainability.carbon.index');
    })->name('carbon');

    // K2 -> sustainability -> CarbonFootprint -> select
    Route::get('/CarbonFootprintChoice', function () {
        return view('iSTEAM.K2.sustainability.carbon.selection');
    })->name('carbonSelection');

    // K2 -> sustainability -> CarbonFootprint -> lesson
    Route::get('/sustainability/CarbonFootprint/lesson', function () {
        return view('iSTEAM.K2.sustainability.carbon.lesson');
    })->name('carbonLesson');

    // K2 -> sustainability -> CarbonFootprint -> teacher
    Route::get('/sustainability/CarbonFootprint/teacher', function () {
        return view('iSTEAM.K2.sustainability.carbon.teacher');
    })->name('carbonTeacher');


    // ======
    // K2 -> Aerodynamics
    Route::get('/k2Aerodynamics', function () {
        return view('iSTEAM.K2.Aerodynamics.index');
    })->name('k2Aerodynamics');

    // ====
    // K2 -> Aerodynamics -> WhatisAerodynamic1
    Route::get('/Aerodynamics/WhatisAerodynamic1', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics1.index');
    })->name('Aerodynamics1');

    // K2 -> Aerodynamics -> WhatisAerodynamic1 -> select
    Route::get('/WhatisAerodynamic1/Choice', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics1.selection');
    })->name('Aerodynamics1Selection');

    // K2 -> Aerodynamics -> WhatisAerodynamic1 -> lesson
    Route::get('/Aerodynamics/WhatisAerodynamic1/lesson', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics1.lesson');
    })->name('Aerodynamics1Lesson');

    // K2 -> Aerodynamics -> WhatisAerodynamic1 -> teacher
    Route::get('/Aerodynamics/WhatisAerodynamic1/teacher', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics1.teacher');
    })->name('Aerodynamics1Teacher');

    // ====
    // K2 -> Aerodynamics -> WhatisAerodynamic2
    Route::get('/Aerodynamics/WhatisAerodynamic2', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics2.index');
    })->name('Aerodynamics2');

    // K2 -> Aerodynamics -> WhatisAerodynamic2 -> select
    Route::get('/WhatisAerodynamic2/Choice', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics2.selection');
    })->name('Aerodynamics2Selection');

    // K2 -> Aerodynamics -> WhatisAerodynamic2 -> lesson
    Route::get('/Aerodynamics/WhatisAerodynamic2/lesson', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics2.lesson');
    })->name('Aerodynamics2Lesson');

    // K2 -> Aerodynamics -> WhatisAerodynamic2 -> teacher
    Route::get('/Aerodynamics/WhatisAerodynamic2/teacher', function () {
        return view('iSTEAM.K2.Aerodynamics.Aerodynamics2.teacher');
    })->name('Aerodynamics2Teacher');


    // ====
    // K2 -> Aerodynamics -> Evolution
    Route::get('/Aerodynamics/Evolution', function () {
        return view('iSTEAM.K2.Aerodynamics.Evolution.index');
    })->name('Evolution');

    // K2 -> Aerodynamics -> Evolution -> select
    Route::get('/Evolution/Choice', function () {
        return view('iSTEAM.K2.Aerodynamics.Evolution.selection');
    })->name('EvolutionSelection');

    // K2 -> Aerodynamics -> Evolution -> lesson
    Route::get('/Aerodynamics/Evolution/lesson', function () {
        return view('iSTEAM.K2.Aerodynamics.Evolution.lesson');
    })->name('EvolutionLesson');

    // K2 -> Aerodynamics -> Evolution -> teacher
    Route::get('/Aerodynamics/Evolution/teacher', function () {
        return view('iSTEAM.K2.Aerodynamics.Evolution.teacher');
    })->name('EvolutionTeacher');


    // ====
    // K2 -> Aerodynamics -> Hydrodynamics
    Route::get('/Aerodynamics/Hydrodynamics', function () {
        return view('iSTEAM.K2.Aerodynamics.Hydrodynamics.index');
    })->name('Hydrodynamics');

    // K2 -> Aerodynamics -> Hydrodynamics -> select
    Route::get('/Hydrodynamics/Choice', function () {
        return view('iSTEAM.K2.Aerodynamics.Hydrodynamics.selection');
    })->name('HydrodynamicsSelection');

    // K2 -> Aerodynamics -> Hydrodynamics -> lesson
    Route::get('/Aerodynamics/Hydrodynamics/lesson', function () {
        return view('iSTEAM.K2.Aerodynamics.Hydrodynamics.lesson');
    })->name('HydrodynamicsLesson');

    // K2 -> Aerodynamics -> Hydrodynamics -> teacher
    Route::get('/Aerodynamics/Hydrodynamics/teacher', function () {
        return view('iSTEAM.K2.Aerodynamics.Hydrodynamics.teacher');
    })->name('HydrodynamicsTeacher');

    // ====
    // K2 -> Aerodynamics -> FlyingMachines
    Route::get('/Aerodynamics/FlyingMachines', function () {
        return view('iSTEAM.K2.Aerodynamics.Flying.index');
    })->name('Flying');

    // K2 -> Aerodynamics -> FlyingMachines -> select
    Route::get('/FlyingMachines/Choice', function () {
        return view('iSTEAM.K2.Aerodynamics.Flying.selection');
    })->name('FlyingSelection');

    // K2 -> Aerodynamics -> FlyingMachines -> lesson
    Route::get('/Aerodynamics/FlyingMachines/lesson', function () {
        return view('iSTEAM.K2.Aerodynamics.Flying.lesson');
    })->name('FlyingLesson');

    // K2 -> Aerodynamics -> FlyingMachines -> teacher
    Route::get('/Aerodynamics/FlyingMachines/teacher', function () {
        return view('iSTEAM.K2.Aerodynamics.Flying.teacher');
    })->name('FlyingTeacher');


    // ======
    // K2 -> coding
    Route::get('/k2coding', function () {
        return view('iSTEAM.K2.coding.index');
    })->name('k2coding');


    // ====
    // K2 -> coding -> AnimateaCharacter1
    Route::get('/coding/AnimateaCharacter1', function () {
        return view('iSTEAM.K2.coding.animate1.index');
    })->name('animate1');

    // K2 -> coding -> AnimateaCharacter1 -> select
    Route::get('/AnimateaCharacter1/Choice', function () {
        return view('iSTEAM.K2.coding.animate1.selection');
    })->name('animate1Selection');

    // K2 -> coding -> AnimateaCharacter1 -> lesson
    Route::get('/coding/AnimateaCharacter1/lesson', function () {
        return view('iSTEAM.K2.coding.animate1.lesson');
    })->name('animate1Lesson');

    // K2 -> coding -> AnimateaCharacter1 -> teacher
    Route::get('/coding/AnimateaCharacter1/teacher', function () {
        return view('iSTEAM.K2.coding.animate1.teacher');
    })->name('animate1Teacher');


    // ====
    // K2 -> coding -> AnimateaCharacter2
    Route::get('/coding/AnimateaCharacter2', function () {
        return view('iSTEAM.K2.coding.animate2.index');
    })->name('animate2');

    // K2 -> coding -> AnimateaCharacter2 -> select
    Route::get('/AnimateaCharacter2/Choice', function () {
        return view('iSTEAM.K2.coding.animate2.selection');
    })->name('animate2Selection');

    // K2 -> coding -> AnimateaCharacter2 -> lesson
    Route::get('/coding/AnimateaCharacter2/lesson', function () {
        return view('iSTEAM.K2.coding.animate2.lesson');
    })->name('animate2Lesson');

    // K2 -> coding -> AnimateaCharacter2 -> teacher
    Route::get('/coding/AnimateaCharacter2/teacher', function () {
        return view('iSTEAM.K2.coding.animate2.teacher');
    })->name('animate2Teacher');


    // ====
    // K2 -> coding -> AnimateaCharacter3
    Route::get('/coding/AnimateaCharacter3', function () {
        return view('iSTEAM.K2.coding.animate3.index');
    })->name('animate3');

    // K2 -> coding -> AnimateaCharacter3 -> select
    Route::get('/AnimateaCharacter3/Choice', function () {
        return view('iSTEAM.K2.coding.animate3.selection');
    })->name('animate3Selection');

    // K2 -> coding -> AnimateaCharacter3 -> lesson
    Route::get('/coding/AnimateaCharacter3/lesson', function () {
        return view('iSTEAM.K2.coding.animate3.lesson');
    })->name('animate3Lesson');

    // K2 -> coding -> AnimateaCharacter3 -> teacher
    Route::get('/coding/AnimateaCharacter3/teacher', function () {
        return view('iSTEAM.K2.coding.animate3.teacher');
    })->name('animate3Teacher');


    // ====
    // K2 -> coding -> AnimateaCharacter4
    Route::get('/coding/AnimateaCharacter4', function () {
        return view('iSTEAM.K2.coding.animate4.index');
    })->name('animate4');

    // K2 -> coding -> AnimateaCharacter4 -> select
    Route::get('/AnimateaCharacter4/Choice', function () {
        return view('iSTEAM.K2.coding.animate4.selection');
    })->name('animate4Selection');

    // K2 -> coding -> AnimateaCharacter4 -> lesson
    Route::get('/coding/AnimateaCharacter4/lesson', function () {
        return view('iSTEAM.K2.coding.animate4.lesson');
    })->name('animate4Lesson');

    // K2 -> coding -> AnimateaCharacter4 -> teacher
    Route::get('/coding/AnimateaCharacter4/teacher', function () {
        return view('iSTEAM.K2.coding.animate4.teacher');
    })->name('animate4Teacher');


    // ====
    // K2 -> coding -> AnimateaCharacter5
    Route::get('/coding/AnimateaCharacter5', function () {
        return view('iSTEAM.K2.coding.animate5.index');
    })->name('animate5');

    // K2 -> coding -> AnimateaCharacter5 -> select
    Route::get('/AnimateaCharacter5/Choice', function () {
        return view('iSTEAM.K2.coding.animate5.selection');
    })->name('animate5Selection');

    // K2 -> coding -> AnimateaCharacter5 -> lesson
    Route::get('/coding/AnimateaCharacter5/lesson', function () {
        return view('iSTEAM.K2.coding.animate5.lesson');
    })->name('animate5Lesson');

    // K2 -> coding -> AnimateaCharacter5 -> teacher
    Route::get('/coding/AnimateaCharacter5/teacher', function () {
        return view('iSTEAM.K2.coding.animate5.teacher');
    })->name('animate5Teacher');


    // ====
    // K2 -> coding -> AnimatetheCharacters
    Route::get('/coding/AnimatetheCharacters', function () {
        return view('iSTEAM.K2.coding.character.index');
    })->name('character');

    // K2 -> coding -> AnimatetheCharacters -> select
    Route::get('/AnimatetheCharacters/Choice', function () {
        return view('iSTEAM.K2.coding.character.selection');
    })->name('characterSelection');

    // K2 -> coding -> AnimatetheCharacters -> lesson
    Route::get('/coding/AnimatetheCharacters/lesson', function () {
        return view('iSTEAM.K2.coding.character.lesson');
    })->name('characterLesson');

    // K2 -> coding -> AnimatetheCharacters -> teacher
    Route::get('/coding/AnimatetheCharacters/teacher', function () {
        return view('iSTEAM.K2.coding.character.teacher');
    })->name('characterTeacher');


    // ====
    // K2 -> coding -> WhatisScratchJr
    Route::get('/coding/WhatisScratchJr', function () {
        return view('iSTEAM.K2.coding.scratch.index');
    })->name('scratch');

    // K2 -> coding -> WhatisScratchJr -> select
    Route::get('/WhatisScratchJr/Choice', function () {
        return view('iSTEAM.K2.coding.scratch.selection');
    })->name('scratchSelection');

    // K2 -> coding -> WhatisScratchJr -> lesson
    Route::get('/coding/WhatisScratchJr/lesson', function () {
        return view('iSTEAM.K2.coding.scratch.lesson');
    })->name('scratchLesson');

    // K2 -> coding -> WhatisScratchJr -> teacher
    Route::get('/coding/WhatisScratchJr/teacher', function () {
        return view('iSTEAM.K2.coding.scratch.teacher');
    })->name('scratchTeacher');


    // ====
    // K2 -> coding -> OurStories
    Route::get('/coding/OurStories', function () {
        return view('iSTEAM.K2.coding.story.index');
    })->name('story');

    // K2 -> coding -> OurStories -> select
    Route::get('/OurStories/Choice', function () {
        return view('iSTEAM.K2.coding.story.selection');
    })->name('storySelection');

    // K2 -> coding -> OurStories -> lesson
    Route::get('/coding/OurStories/lesson', function () {
        return view('iSTEAM.K2.coding.story.lesson');
    })->name('storyLesson');

    // K2 -> coding -> OurStories -> teacher
    Route::get('/coding/OurStories/teacher', function () {
        return view('iSTEAM.K2.coding.story.teacher');
    })->name('storyTeacher');




    // ======
    // K2 -> ElectronicCircuits
    Route::get('/k2ElectronicCircuits', function () {
        return view('iSTEAM.K2.ElectronicCircuits.index');
    })->name('k2ElectronicCircuits');


    // K2 -> electricty
    Route::get('/Mchines-Electricity', function () {
        return view('iSTEAM.K2.ElectronicCircuits.electricity.index');
    })->name('electricity');

    // K2 -> ElectronicCircuits -> electricity -> select
    Route::get('/Mchines-Electricity/Choice', function () {
        return view('iSTEAM.K2.ElectronicCircuits.electricity.selection');
    })->name('electricitySelection');

    // K2 -> ElectronicCircuits -> electricity -> lesson
    Route::get('/Mchines-Electricity/lesson', function () {
        return view('iSTEAM.K2.ElectronicCircuits.electricity.lesson');
    })->name('electricityLesson');

    // K2 -> ElectronicCircuits -> electricity -> teacher
    Route::get('/ElectronicCircuits/Mchines-Electricity/teacher', function () {
        return view('iSTEAM.K2.ElectronicCircuits.electricity.teacher');
    })->name('electricityTeacher');



    // K2 -> electroniccircuit
    Route::get('/Circuit', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit.index');
    })->name('circuit');

    // K2 -> ElectronicCircuits -> circuit -> select
    Route::get('/Circuit/Choice', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit.selection');
    })->name('circuitSelection');

    // K2 -> ElectronicCircuits -> circuit -> lesson
    Route::get('/Circuit/lesson', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit.lesson');
    })->name('circuitLesson');

    // K2 -> ElectronicCircuits -> circuit -> teacher
    Route::get('/ElectronicCircuits/Circuit/teacher', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit.teacher');
    })->name('circuitTeacher');


    // K2 -> electroniccircuit
    Route::get('/Playdough-Circuits', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit2.index');
    })->name('circuit2');

    // K2 -> ElectronicCircuits -> circuit2 -> select
    Route::get('/Playdough-Circuits/Choice', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit2.selection');
    })->name('circuit2Selection');

    // K2 -> ElectronicCircuits -> circuit2 -> lesson
    Route::get('/Playdough-Circuits/lesson', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit2.lesson');
    })->name('circuit2Lesson');

    // K2 -> ElectronicCircuits -> circuit2 -> teacher
    Route::get('/ElectronicCircuits/Playdough-Circuits/teacher', function () {
        return view('iSTEAM.K2.ElectronicCircuits.circuit2.teacher');
    })->name('circuit2Teacher');


    // K2 -> electroniccircuit
    Route::get('/Makey1', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey1.index');
    })->name('makey1');

    // K2 -> ElectronicCircuits -> makey1 -> select
    Route::get('/Makey1/Choice', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey1.selection');
    })->name('makey1Selection');

    // K2 -> ElectronicCircuits -> makey1 -> lesson
    Route::get('/Makey1/lesson', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey1.lesson');
    })->name('makey1Lesson');

    // K2 -> ElectronicCircuits -> makey1 -> teacher
    Route::get('/ElectronicCircuits/Makey1/teacher', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey1.teacher');
    })->name('makey1Teacher');

    // K2 -> electroniccircuit
    Route::get('/Makey2', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey2.index');
    })->name('makey2');

    // K2 -> ElectronicCircuits -> makey2 -> select
    Route::get('/Makey2/Choice', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey2.selection');
    })->name('makey2Selection');

    // K2 -> ElectronicCircuits -> makey2 -> lesson
    Route::get('/Makey2/lesson', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey2.lesson');
    })->name('makey2Lesson');

    // K2 -> ElectronicCircuits -> makey2 -> teacher
    Route::get('/ElectronicCircuits/Makey2/teacher', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey2.teacher');
    })->name('makey2Teacher');


    // K2 -> electroniccircuit
    Route::get('/Makey3', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey3.index');
    })->name('makey3');

    // K2 -> ElectronicCircuits -> makey3 -> select
    Route::get('/Makey3/Choice', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey3.selection');
    })->name('makey3Selection');

    // K2 -> ElectronicCircuits -> makey3 -> lesson
    Route::get('/Makey3/lesson', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey3.lesson');
    })->name('makey3Lesson');

    // K2 -> ElectronicCircuits -> makey3 -> teacher
    Route::get('/ElectronicCircuits/Makey3/teacher', function () {
        return view('iSTEAM.K2.ElectronicCircuits.makey3.teacher');
    })->name('makey3Teacher');




    // ======
    // K2 -> FinalProject
    Route::get('/k2FinalProject', function () {
        return view('iSTEAM.K2.FinalProject.index');
    })->name('k2FinalProject');

    // ======
    // K2 -> FinalProject
    Route::get('/FinalProject', function () {
        return view('iSTEAM.K2.FinalProject.final.index');
    })->name('final2');

    // K2 -> FinalProject -> final -> select
    Route::get('/final/Choice', function () {
        return view('iSTEAM.K2.FinalProject.final.selection');
    })->name('final2Selection');

    // K2 -> FinalProject -> final -> lesson
    Route::get('/FinalProject/final/lesson', function () {
        return view('iSTEAM.K2.FinalProject.final.lesson');
    })->name('final2Lesson');

    // K2 -> FinalProject -> final -> teacher
    Route::get('/FinalProject/final/teacher', function () {
        return view('iSTEAM.K2.FinalProject.final.teacher');
    })->name('final2Teacher');
});