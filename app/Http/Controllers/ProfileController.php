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

        $country = ["France", "UAE", "Kenya", "None"];
        $city = ["Paris", "Dubai", "Nairobi", ""];
        $experiences = ["The Eiffel tower", "Bhurj Khalifa", "The Maasai Mara", "None"];
        $arr_exp_index = array_rand($experiences);
        $experience =   [
                'reviews' => $reviews,
                
                'experience' => $experiences[$arr_exp_index],
                'country' => $country[$arr_exp_index],
                'city' => $city[$arr_exp_index]
            ];  
       
       return view('profile.show', compact('user_details', 'blogs', 'experience'));
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
            toast($validator->messages()->all()[0],'error')->autoClose(3000);

             return back();
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

        toast('Update Successful!!','success')->autoClose(3000)->timerProgressBar();
        return redirect('/profile');
    }


}
