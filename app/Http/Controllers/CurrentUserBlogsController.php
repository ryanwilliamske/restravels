<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CurrentUserBlogsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('blogs.myblogs')->with('posts', $user->posts);
    }
}
