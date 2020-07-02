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


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/sign_in', function () {
    return view('sign_in');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
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
=======
Route::get('/search', 'ServiceController@search')->name('search');

Route::get('/search/{service}', 'ServiceController@show')->name('services.show');

>>>>>>> c6977028c3e2379f02c8b6345d34406c2b54e50a
