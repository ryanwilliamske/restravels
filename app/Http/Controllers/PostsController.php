<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('blogs.blogs', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',

            'cover_image'=>'image|nullable|max:1999'

        ]);
        if ($request->hasFile('cover_image')){
//            getfilenamewithextensions
            $filenamewithext =  $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametostore);

        }else{
            $filenametostore='noimage.jpg';

        }
        $post=new Post;
        $post->title = $request->input('title');


        $post->body = $request->input('body');
        $userid=auth()->user()->id;
        $post->user_id = $userid;
        $userInstance =  User::find($userid);
        $fname = $userInstance->fname;
        $lname = $userInstance->lname;

        $post->cover_image = $filenametostore;
        $post->fname=$fname;
        $post->lname=$lname;
        $post->save();
        return redirect('/blogs')->with('success', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('blogs.blogdetails')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post =  Post::find($id);
        if (auth()->user()->id !== $post->user_id ){
       return redirect('/blogs')->with('error', 'Unauthorized page');
        }else{
            return view('blogs.edit')->with('post', $post);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',

            'cover_image'=>'image|nullable|max:1999'

        ]);
        if ($request->hasFile('cover_image')){
//            getfilenamewithextensions
            $filenamewithext =  $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametostore);

        }
        $post= Post::find($id);
        $post->title = $request->input('title');


        $post->body = $request->input('body');
        if ($request->hasFile('cover_image')&&$post->cover_image!=='noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);
            $post->cover_image = $filenametostore;
        }else if ($request->hasFile('cover_image')&&$post->cover_image =='noimage.jpg'){
            $post->cover_image = $filenametostore;
        }
        $post->save();
        return redirect('/posts')->with('success', 'Post Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        if ($post->cover_image !== 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted!');
    }
}
