<?php

use App\Reviews;
use App\User;
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
Route::get('/profile', 'ProfileController@index');
Route::get('/sign_in', function () {
    return view('sign_in');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/footer', function () {
    return view('inc\footer');
});

Route::get('/search', 'ServiceController@search')->name('search');

Route::get('/search/{service}', 'ServiceController@show')->name('services.show');

Route::get('/package', function () {
    return view('package');
});

Route::get('/Packages/nairobi', function () {
    return view('/Packages/nairobi');
});

Route::get('/Packages/mombasa', function () {
    return view('/Packages/mombasa');
});

Route::get('/Packages/nakuru', function () {
    return view('/Packages/nakuru');
});

Route::get('/Packages/kisumu', function () {
    return view('/Packages/kisumu');
});

