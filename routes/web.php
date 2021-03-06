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
Route::get('/', 'PagesController@timesheet');
Route::get('/timesheet', 'PagesController@timesheet');

Route::resource('posts','PostController');
Auth::routes();

Route::get('/welcome', 'DashboardController@index');
