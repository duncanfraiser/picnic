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
Route::resource('child','KidController');

Route::resource('carshow','CarshowController');
Route::get('carshow/{carshow}/thanks', 'CarshowController@thanks');

Route::resource('carshow_guest','CarguestController');
Route::get('carshow_guest/{carguest}/thanks', 'CarguestController@thanks');

Route::resource('invitee','InviteeController');
Route::get('invitee/{invitee}/thanks', 'InviteeController@thanks');

Route::resource('stats','StatsController');