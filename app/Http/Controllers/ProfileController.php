<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        // $reviews = Reviews::orderBy('time_stamp', 'desc')->get();
        // $reviews = Reviews::all(); //all records from the review table
        //$reviews - Reviews::latest()->get();
        $user_id = Auth::user()->id;
        if ($user_id != null) {
        }
        $country = ["France", "UAE", "Kenya", "None"];
        $city = ["Paris", "Dubai", "Nairobi", ""];
        $experiences = ["The Eiffel tower", "Bhurj Khalifa", "The Maasai Mara", "None"];
        $arr_exp_index = array_rand($experiences);
        $user = User::where('id', $user_id)->get(); //Gets all details of the user with id 123
        $reviews = Reviews::where('user_id', $user_id)->get(); //select where user_id is 123
        error_log($reviews);
        return view(
            'profile',
            [
                'reviews' => $reviews,
                'user' => $user,
                'experience' => $experiences[$arr_exp_index],
                'country' => $country[$arr_exp_index],
                'city' => $city[$arr_exp_index]
            ]
        );
    }

    public function store()
    {
        // $fname = $request->input('fname');
        // $lname = $request->input('lname');
        // $email = $request->input('email_add');
        // $city = $request->input('city');

        // DB::update('update users set fname = ?, lname, email = ?, city = ? where name = ?', [$fname, $lname, $email, $city, $fname]);
        // $this->index();
        $user_id = Auth::user()->id;
        $fname = request('fname');
        $lname = request('lname');
        $email = request('email_add');
        $city = request('city');
        DB::update('update users set fname = ?, lname = ?, email = ?, city = ? where id = ?', [$fname, $lname, $email, $city, $user_id]);

        return redirect('/profile')->with('message', 'Successfully updated');
    }
}
