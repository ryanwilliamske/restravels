<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Blog;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index()
    {
        /**
         * This function aims to supply the profile page 
         * with user details which it the populates in the forms
         * contained,  and or alter
         */
        $user_details = auth()->user();
        $blogs = Blog::where('id', $user_details->id)->get();


       
       return view('profile.show', compact('user_details', 'blogs'));
    }

    public function profileInfoUpdate()
    {
        
        $id = auth()->user()->id;

        $validator = Validator::make( request()->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'city' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:8,255',
            'confirm' => 'nullable|same:password'
        ]);

        if ( $validator->fails()) {
             return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

       /**
        * Perform the relevant profile update
        */


        User::where('id', $id)->update([
            'fname' => request()->fname,
            'lname' => request()->lname,
            'city' => request()->city,
            'email' => request()->email,
            'password' => Hash::make(request()->password)
        ]);

        
        return redirect('/profile')->with('toast_success', 'Update Successful!!');
    }
}
