<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // $reviews = Reviews::orderBy('time_stamp', 'desc')->get();
        // $reviews = Reviews::all(); //all records from the review table
        //$reviews - Reviews::latest()->get();
        $country = ["France", "UAE", "Kenya", "None"];
        $city = ["Paris", "Dubai", "Nairobi", ""];
        $experiences = ["The Eiffel tower", "Bhurj Khalifa", "The Maasai Mara", "None"];
        $arr_exp_index = array_rand($experiences);
        $user = User::where('id', 1)->get(); //Gets all details of the user with id 123
        $reviews = Reviews::where('user_id', 123)->get(); //select where user_id is 123
        return view(
            'profile',
            ['reviews' => $reviews, 'user' => $user, 'experience' => $experiences[$arr_exp_index], 'country' => $country[$arr_exp_index], 'city' => $city[$arr_exp_index]]
        );
    }
}
