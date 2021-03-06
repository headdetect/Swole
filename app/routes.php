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

Route::get('/',           'DashboardController@index');
Route::get('/dashboard',  'DashboardController@index');

Route::get('/meals',         'MealsController@index');
Route::get('/meals/create',  'MealsController@create');

Route::get('/workouts',             'WorkoutsController@index');
Route::get('/workouts/create',      'WorkoutsController@make');
Route::post('/workouts/create',     'WorkoutsController@create');

Route::get('/menus',      'MenuController@index');

Route::get('/user',       'UserController@index');

Route::get('/login',      'LoginController@index');
Route::get('/logout',     'LoginController@logout');


Route::post('/login', 'LoginController@login');

