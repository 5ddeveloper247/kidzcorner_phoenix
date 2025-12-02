<?php
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:1,2'])->group(function () {

    Route::get('/phonics/l1', function () {
        return view('phonics_l1.index');
    })->name('Phonics-L1');

    // Dynamic route for letters & categories
    Route::get('/phonics/{letter}/{category?}', function ($letter, $category = 'index') {
        $view = "phonics_l1.$letter.$category";

        if (view()->exists($view)) {
            return view($view);
        }

        abort(404); // fallback if view does not exist
    })->name('phonics.letter');

});
