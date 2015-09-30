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

Route::get('/', 'HomeController@showConsole');


Route::get('start', 'HomeController@start');

Route::controller('move', 'MoveController');
Route::controller('take', 'TakeController');
Route::controller('hit', 'HitController');
Route::controller('eat', 'EatController');
Route::controller('use', 'UseController');

Route::controller('home', 'HomeController');
Route::controller('turn', 'TurnController');