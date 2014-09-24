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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', 'HomeController@getLogin');

Route::Post('login', 'HomeController@postLogin');

Route::group(array('before' => 'auth'), function(){
	Route::get('admin', 'AdminController@index');
	Route::get('logout', 'HomeController@logout');
});
