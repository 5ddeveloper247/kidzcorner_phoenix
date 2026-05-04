<?php
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:1,2'])->group(function () {

    Route::get('/phonics/l1', function () {
        return view('phonics_l1.index');
    })->name('Phonics-L1');

    Route::get('/phonics_l1/{letter}/{category?}', function ($letter, $category = 'index') {

    $category = str_replace('/', '.', $category);
    $view = "phonics_l1.$letter.$category";

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);
})->where('category', '.*')
  ->name('phonics.letter');

});
