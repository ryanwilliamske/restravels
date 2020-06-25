<?php

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
Route::get('/sign_up', function () {
    return view('sign_up');
});
Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});
Route::get('/chat', 
           'ChatController@index');
Route::get('messages', 
           'ChatController@fetchMessages');
Route::post('messages', 
            'ChatController@sendMessage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

