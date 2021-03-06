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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

//Users
Route::get('/users', 'UsersController@index');


//Contents
Route::get('/contents', 'ContentsController@index');
Route::post('/contentsInMass', 'ContentsController@createInMass');

//Materials