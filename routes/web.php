<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/404', function () {
    return view('404');
});
