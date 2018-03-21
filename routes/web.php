<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@index');
Route::post('/register', "RegisterController@store");
Route::post('/login', 'SessionController@store');
Route::get('/user/authcheck', 'UserController@show');
Route::post('/user/logout', 'UserController@destroy');
Route::post('/post/create', 'PostController@store');