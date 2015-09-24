<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function startGame() 
	{
		$rand = mt_rand(10000000, 99999999);
		$game = new User();
		$game->player_location_id = 1;
		$game->health = 10;
		$game->stealth = 10;
		$game->access_x = 0;
		$game->creation_id = $rand;
		$game->save();

		$row = User::where("creation_id", $rand)->firstOrFail();
		return $row->creation_id;
	}

}
