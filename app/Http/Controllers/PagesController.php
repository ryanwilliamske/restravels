<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('blogs.upload');
    }
    public function checkBlogs(){
        return view('blogs.blogs');
    }
}
