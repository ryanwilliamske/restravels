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
    return view('landing');
});


// Route::get('/landing', function () {
//     return view('landing');
// });

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/profile', 'ProfileController@index');

Route::post('/profile', 'ProfileController@store');

Route::get('/sign_in', function () {
    return view('sign_in');
});
//BLOG ROUTES

Route::get('/upload2', function () {
    return view('blogs.upload2');
});
Route::get('/upload', 'PostsController@uploadpage');
Route::get('/layoutf', function () {
       return view('layouts.blogsfinallayout');
   });


Route::get('/myblogs', 'CurrentUserBlogsController@index');

Route::get('/blogs/tags/{tag}','TagsController@index');
Route::get('/blogdetails', function () {
    return view('blogs.blogdetails');
});
Route::resource('blogs','PostsController');
Route::post('/blogs/{post}/comments', 'CommentsController@store');
//BLOG ROUTES

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'ServiceController@search')->name('search');

Route::get('/search/{service}', 'ServiceController@show')->name('services.show');
