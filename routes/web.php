<?php

use App\Reviews;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/footer', function () {
    return view('inc\footer');
});

//TODO:Temporary Profile route. To be replaced by jatelos route and controller
Route::get('/profile', function () {
    // $reviews = Reviews::orderBy('time_stamp', 'desc')->get();
    // $reviews = Reviews::all(); //all records from the review table
    //$reviews - Reviews::latest()->get();
    $reviews = Reviews::where('user_id', 123)->get(); //select where user_id is 123
    return view(
        'welcome',
        ['reviews' => $reviews]
    );
});