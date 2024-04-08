<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.web');
});
Route::get('/login', function () {
    return view('web.login');
});
Route::get('/register', function () {
    return view('web.register');
});
Route::get('/dashboard', function () {
    return view('app.dashboard');
});
Route::get('/settings', function () {
    return view('app.settings');
});
Route::get('/404', function () {
    return view('web.404');
});
