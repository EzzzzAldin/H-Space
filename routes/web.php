<?php

use Illuminate\Support\Facades\Route;

Route::get('/{page?}', function ($page = 'index') {
    $availablePages = ['index', 'about-us'];

    if (! in_array($page, $availablePages)) {
        abort(404);
    }

    return view("pages.$page");
})->name('pages');
