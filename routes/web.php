<?php

use Illuminate\Support\Facades\Route;

Route::get('/chat', 'ChatController@index');
Route::get('messages', 'ChatController@fetchMessages');
Route::post('messages', 'ChatController@sendMessage');