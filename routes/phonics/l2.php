<?php
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:1,2'])->group(function () {

    Route::get('/phonics/l2', function () {
        return view('phonics_l2.index');
    })->name('Phonics-L1');

    // Supports: /phonics/letter_a/phonics/magicletters
    Route::get('/phonics_l2/{folder}/{subfolder?}/{page?}', function ($folder, $subfolder = null, $page = 'index') {

    if ($subfolder) {
        $view = "phonics_l2.$folder.$subfolder.$page";
    } else {
        $view = "phonics_l2.$folder.$page";
    }

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);

    })->name('phonics.l2.dynamic');

});
