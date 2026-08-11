<?php

use Illuminate\Support\Facades\Route;

Route::get('/applet', function () {

    if (view()->exists('applet.index')) {
        return view('applet.index');
    }

    abort(404);

});


Route::get('/applet/{path}', function ($path) {

    $view = 'applet.' . str_replace('/', '.', $path);

    if (view()->exists($view)) {
        return view($view);
    }

    abort(404);

})->where('path', '.*');