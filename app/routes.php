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
	return View::make('home');
});

//test view
Route::get('users', function()
{
	$users = User::all();

    return View::make('users')->with('users', $users);
});

//login route
Route::get('login', array(
	'before' => 'logined',
	'as' 	=> 'login',
	'uses'	=> 'AuthController@getLogin'
));

Route::post('login', array(
	'as' 	=> 'login.post',
	'uses'	=> 'AuthController@postLogin'
));

Route::get('logout', array(
	'as' 	=> 'logout',
	'uses'	=> 'AuthController@getLogout'
));

//profile route
Route::get('profile', array(
	'before' => 'auth',
	'as' 	=> 'profile',
	'uses'	=> 'UserController@getProfile'
));