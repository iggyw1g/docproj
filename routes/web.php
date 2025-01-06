<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');  // This can be your main page
});

Route::get('target-page', function () {
    return view('target-page');  // This will show the target page when the button is clicked
})->name('target.page');
