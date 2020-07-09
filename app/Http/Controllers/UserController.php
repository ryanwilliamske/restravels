<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //New changes user auth
    public function index()
    {
        return view('home');
    }
}
