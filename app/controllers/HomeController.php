<?php

class HomeController extends BaseController {

	
	public function showConsole()
	{
		return View::make('console');

	}
	
	public function startGame() 
	{
		$game = new User();
		$game->player_location_id = 1;
		$game->health = 10;
		$game->stealth = 10;
		$game->access_x = 0;
		$game->save();

		Auth::login($game);
	}

	public function getHealth()
	{
		$player = Auth::user();
		$health = $player->health;

		return Response::json($health);
	}


	public function getItems()
	{
		$items = Auth::user();

		return Response::json($items);
	}

}
