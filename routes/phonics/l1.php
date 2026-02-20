<?php
use Illuminate\Support\Facades\Route;



Route::middleware(['auth', 'role:1,2'])->group(function () {

    Route::get('/phonics/l1', function () {
        return view('phonics_l1.index');
    })->name('Phonics-L1');

    // Supports: /phonics/letter_a/phonics/magicletters
    Route::get('/phonics_l1/{letter}/{category?}', function ($letter, $category = 'index') {

        // Replace slashes in category to match folder structure
        $category = str_replace('/', '.', $category);

        // Build view path: phonics_l1.letter_a.phonics.magicletters
        $view = "phonics_l1.$letter.$category";

        if (view()->exists($view)) {
            return view($view);
        }

        abort(404);
    })->where('category', '.*') // allow multi-segment category
      ->name('phonics.letter');

});
