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

Route::get('/{alias?}', 'PagesController@rout');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/main', function () {
	return view('home');
});


//Admin Route
Route::group(['prefix' => 'admin','middleware' => 'admin'], function()
{
	Route::get('/add-page', 'PagesController@index');
	Route::post('/add-page', 'PagesController@save');
});