<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPage extends Controller
{
    public function index()
    {
        return view('web.web');
    }
    public function login()
    {
        return view('web.login');
    }
    public function register()
    {
        return view('web.register');
    }
}
