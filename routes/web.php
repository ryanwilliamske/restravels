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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//new changes
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin_dash', 'AdminController@index')->name('admin_dash');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/clients_admin', 'AdminController@index');

Route::view('form','serve');
Route::post('submit','ServiceController@save');

Route::delete('/clients_admin/delete/{id}', 'AdminController@delete')->name('clients_admin.delete');
Route::delete('/services_admin/delete/{id}', 'AdminController@serviceremove')->name('services_admin.delete');
Route::delete('/blogs_admin/delete/{id}', 'AdminController@destroy')->name('blogs_admin.delete');
Route::delete('/transactions_admin/delete/{id}', 'AdminController@paykill')->name('transactions_admin.delete');


/* This was only added for the purpose of displaying views on the browser */

//View for admin module
Route::get('/admin_dash', function () {
    return view('admin_dash');
});

//View for transactions in admin module
Route::get('/transactions_admin', function () {
    return view('transactions_admin');
});

//View for users/clients in admin module
Route::get('/clients_admin', function () {
    return view('clients_admin');
});
//View for services in admin module
Route::get('/services_admin', function () {
    return view('services_admin');
});

//View for services form in admin module
Route::get('/services_form', function () {
    return view('services_form');
});
//View for services categoriesin admin module
Route::get('/services_categories', function () {
    return view('services_categories');
});
//View for services categories form admin module
Route::get('/categories_form', function () {
    return view('categories_form');
});
//View for services categories form admin module
Route::get('/reviews_admin', function () {
    return view('reviews_admin');
});
//View for blogs_admin
Route::get('/blogs_admin', function () {
    return view('blogs_admin');
});
//BLOG ROUTES

Route::get('/upload', function () {
    return view('blogs.upload');
});

Route::get('/myblogs', 'CurrentUserBlogsController@index');
Route::get('/adminblogs', 'AdminController@blogs');


Route::get('/blogs/tags/{tag}','TagsController@index');
Route::get('/blogdetails', function () {
    return view('blogs.blogdetails');
});
Route::resource('blogs','PostsController');
Route::post('/blogs/{post}/comments', 'CommentsController@store');
//BLOG ROUTES