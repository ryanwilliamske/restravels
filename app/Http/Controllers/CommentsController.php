<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
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
public function store(Post $post){
    $this->validate(request(), ['body'=>'required|min:5']);
    $user_id=auth()->user()->id;

    $userInstance =  User::find($user_id);
    $fname = $userInstance->fname;
    $lname = $userInstance->lname;



    $post->addComment(request('body'),$fname,$lname);
    return back();

}
}
