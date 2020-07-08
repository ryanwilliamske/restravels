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
//BLOG ROUTES

Route::get('/upload', function () {
    return view('blogs.upload');
});

Route::get('/myblogs', 'CurrentUserBlogsController@index');

Route::get('/blogs/tags/{tag}','TagsController@index');
Route::get('/blogdetails', function () {
    return view('blogs.blogdetails');
});
Route::resource('blogs','PostsController');
Route::post('/blogs/{post}/comments', 'CommentsController@store');
//BLOG ROUTES
