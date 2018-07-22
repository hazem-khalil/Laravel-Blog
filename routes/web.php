<?php

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');



Route::get('/register', 'RegisterControllers@create');

Route::post('/register', 'RegisterControllers@store');



Route::get('/login', 'SessionControllers@create');
Route::post('/login', 'SessionControllers@store');


Route::get('/logout', 'SessionControllers@destroy');