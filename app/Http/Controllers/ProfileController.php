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
            'email' => 'required|email',
            'password' => 'nullable|min:8,255',
            'confirm' => 'nullable|same:password',
            'phone' => 'required|numeric|digits:10'
        ]);

        
        if ( $validator->fails()) {
            
            toast($validator->messages()->all()[0],'error')->autoClose(3000);
             return back();
        }

        
       /**
        * Perform the relevant profile update
        * If the password field is empty, we first retrieve current
        * user password so that no reset occurs
        * to avoid null password 
        */
        if( empty(request()->password) ){
            $current_user_password = auth()->user()->password;
            $password = $current_user_password;
            request()->password = $current_user_password;
            request()->confirm = request()->password;
        }else{
            $password = Hash::make(request()->password);
            request()->password = $password;
        }
        

        User::where('id', $id)->update([
            'fname' => request()->fname,
            'lname' => request()->lname,
            'city' => request()->city,
            'email' => request()->email,
            'password' => $password,
            'phone' => request()->phone
        ]);


        toast('Update Successful!!','success')->autoClose(3000)->timerProgressBar();
        return redirect()->route('profile.show');

    }
}
