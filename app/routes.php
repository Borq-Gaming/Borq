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

Route::get('/test', function()
{
	$query = "Test Response";
	return Response::json($query);

});

Route::get('start', 'HomeController@startGame');

Route::controller('move', 'MoveController');
Route::controller('take', 'TakeController');
Route::controller('hit', 'HitController');
Route::controller('eat', 'EatController');
Route::controller('use', 'UseController');