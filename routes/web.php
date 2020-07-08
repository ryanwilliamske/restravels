<?php

use App\Reviews;
use App\User;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


/**
 * Configure route that will take us back to homepage
 */

 Route::get('/', function(){

    // Alert::success('Success', 'Successfully Logged In');

     return view('home');
 });

Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('services');
});


/**
 * These auth groupings will be available only to users with actual
 * accounts
 */
Route::group(['middleware' => ['auth', 'verified']], function() {



    Route::get('/profile', 'ProfileController@index')->name('profile.show')->middleware('verified');
    /**
     * Route that allows for Profile Information
     * update
     */
    Route::post('/profile', 'ProfileController@profileInfoUpdate')->middleware('verified');

});




Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/search', 'ServiceController@search')->name('search');

Route::get('/search/{service}', 'ServiceController@show')->name('services.show');
