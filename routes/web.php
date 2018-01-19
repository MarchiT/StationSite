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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('profile', 'UserController@profile');

Route::post('profile', 'UserController@update_avatar');


Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}', 'PostController@show');


Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');


Route::get('/posts/tags/{tag}', 'TagController@index');