<?php

use App\Http\Controllers\WebApp;
use App\Http\Controllers\WebPage;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Web routes
Route::get('/', [WebPage::class, 'index']);
Route::get('/login', [WebPage::class, 'login']);
Route::get('/register', [WebPage::class, 'register']);

// App routes
Route::get('/places', [WebApp::class, 'places']);
Route::get('/create-place', [WebApp::class, 'createPlace']);
Route::get('/place/{id}', [WebApp::class, 'place']);
Route::get('/my-places', [WebApp::class, 'myPlaces']);
Route::get('/visitors', [WebApp::class, 'visitors']);
Route::get('/settings', [WebApp::class, 'settings']);

// Error 404
Route::fallback(function () {
    return view('web.404');
});

// User routes
Route::post('/user', UserController::class . '@store')->name('create-user');
