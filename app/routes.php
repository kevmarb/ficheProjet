<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('logout', 'AuthController@getLogout');

Route::get('registerAdmin','AuthController@getSignupAdmin');
Route::post('registerAdmin', 'AuthController@postSignupAdmin');

Route::get('register','AuthController@getSignupStudent');
Route::post('register', 'AuthController@postSignupStudent');

Route::get('registeragency','AuthController@getSignupAgency');
Route::post('registeragency', 'AuthController@postSignupAgency');

// Permet de ce logger en tands qu'admin, chef d'agence ou étudiant
Route::post('auth/login', 'AuthController@postLogin');

Route::post('create/project', 'ProjectController@postCreate');

Route::get('validPost/{id}', 'ProjectController@getValidate')->where('id', '[0-9]+');
Route::get('declinePost/{id}', 'ProjectController@getDecline')->where('id', '[0-9]+');

