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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('attend','AttendController');
Route::get('attending/{attend}/thanks', 'AttendController@thanks');

Route::resource('carshow','CarshowController');
Route::get('carshow/{attend}/thanks', 'CarshowController@thanks');