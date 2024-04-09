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
Route::get('/places', function () {
    return view('app.places');
});
Route::get('/create-place', function () {
    return view('app.createPlace');
});
Route::get('/place/{id}', function ($id) {
    return view('app.place', ['id' => $id]);
});
Route::get('/my-places', function () {
    return view('app.placesOfSelf');
});
Route::get('/visitors', function () {
    return view('app.visitors');
});
Route::get('/settings', function () {
    return view('app.settings');
});

Route::get('/404', function () {
    return view('web.404');
});
