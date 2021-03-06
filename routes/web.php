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
// Маршруты аутентификации...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('/{alias?}', 'PagesController@rout');
Route::post('/sendmessage', 'PagesController@sendmessage');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/main', function () {
	return view('home');
});



//Admin Route
Route::group(['prefix' => 'admin','middleware' => 'admin'], function()
{
	Route::get('/home', 'Admin@index');
	Route::get('/add-page', 'PagesController@index');
	Route::post('/add-page', 'PagesController@save');
});