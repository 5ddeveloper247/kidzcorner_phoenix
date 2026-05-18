<?php

use Illuminate\Support\Facades\Route;

Route::get('/micet', function () {

    if (view()->exists('micet.index')) {
        return view('micet.index');
    }

    abort(404);

});


Route::get('/micet/{path}', function ($path) {

    $view = 'micet.' . str_replace('/', '.', $path);

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);

})->where('path', '.*');