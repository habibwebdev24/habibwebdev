<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
});