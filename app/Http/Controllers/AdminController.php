<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Serve;
use App\Post;
use App\Payment;
class AdminController extends Controller
{
    //
    public function index(){
    	$userstuff = User::all()->toArray();
        return view('/clients_admin', compact('userstuff'));
        
//new changes, admin auth
return view('admin_dash');
    }


    //delete the users details
    public function delete($id){
    $userstuff = 	User::find($id);
    $userstuff->delete();
    return redirect('/clients_admin')->with('success',  'Deleted!');;

}

	 public function blogs()
    {
        $posts = Post::all()->sortByDesc('created_at');
        return view('blogs_admin', compact('posts'));
    }
    //delete the blogs created
    public function destroy($id)
    {
        $post= Post::find($id);
        // if ($post->cover_image !== 'noimage.jpg'){
        //     Storage::delete('public/cover_images/'.$post->cover_image);
        // }
        $post->delete();
        return redirect('/blogs_admin')->with('success', 'Post Deleted!');
    }
    //delete the services
     public function serviceremove($id){
    $servicestuff =   Serve::find($id);
    $servicestuff->delete();
    return redirect('/services_admin')->with('success',  'Deleted!');

}
    //delete for payment
public function paykill($id)
    {
        $transactstuff= Payment::find($id);
        $transactstuff->delete();
        return redirect('/transactions_admin')->with('success', 'Transaction Deleted!');
}



   
}
