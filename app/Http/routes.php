<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//login, logout, register etc
Route::controller('auth', 'Auth\AuthController');
//password reminders
Route::controller('password', 'Auth\PasswordController');
//social authentication
Route::get('social_login', 'Auth\AuthController@socialLogin');

//"static" pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

//blog articles
Route::resource('articles', 'ArticlesController');
//comments
Route::resource('comments', 'CommentsController');