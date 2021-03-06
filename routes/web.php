<?php

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

Route::get('/','PostsController@index')->name('home');

Route::get('/posts','PostsController@index');

Route::get('/posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{id}','PostsController@show');

Route::get('/posts/{id}/delete','PostsController@destroy');

Route::get('/posts/{id}/edit','PostsController@edit');

Route::patch('/posts/{id}','PostsController@update');

//cover upload

Route::get('/upload-cover','CoverController@create');

Route::post('/upload-cover','CoverController@store');

//register

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');


Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');