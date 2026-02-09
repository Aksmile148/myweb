<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/programs', function () {
    return view('programs');
});

Route::get('/admissions', function () {
    return view('admissions');
});

Route::get('/contact', function () {
    return view('contact');
});
