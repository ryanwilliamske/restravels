<?php

use App\Reviews;
use App\User;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


/**
 * Configure route that will take us back to homepage
 */

 Route::get('/', 'HomeController@index');

Route::get('/about', function () {
    return view('about');
});

/**
 * This route directly leads to service pages
 */



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


/**
 * This route leads to a general
 * List of services that contain typed query
 */

Route::get('/search', 'ServiceController@search')->name('search');


/**
 * This route lead to the specific service page 
 * upon searching
 */
Route::get('/search/{service}', 'ServiceController@show')->name('services.individual-service');
