<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebApp extends Controller
{
    public function places()
    {
        return view('app.places');
    }
    public function createPlace()
    {
        return view('app.createPlace');
    }
    public function place($id)
    {
        return view('app.place', ['id' => $id]);
    }
    public function myPlaces()
    {
        return view('app.placesOfSelf');
    }
    public function visitors()
    {
        return view('app.visitors');
    }
    public function settings()
    {
        return view('app.settings');
    }
}
