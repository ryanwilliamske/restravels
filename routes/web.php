<?php

use App\Reviews;
use App\User;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;



Route::get('/', 'HomeController@index');



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



Route::get('/search', 'ServiceController@search')->name('search');

Route::get('/search/{service}', 'ServiceController@show')->name('services.show');
