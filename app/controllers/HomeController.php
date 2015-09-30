<?php

class HomeController extends BaseController {

	
	public function showConsole()
	{
		return View::make('console');

	}
	
	public function start() 
	{
		if(Auth::user()) {
			Auth::logout();
		}

		$game = new User();
		$game->player_location_id = 1;
		$game->health = 10;
		$game->stealth = 10;
		$game->access_x = 0;
		$game->save();

		Auth::login($game);
		$id = Auth::user();
		$id = $id->id;

		$guard1 = new Guard();
		$guard1->guard_id = 1;
		$guard1->user_id = $id;
		$guard1->health = 10;
		$guard1->map_id = 6;
		$guard1->save();

		$guard2 = new Guard();
		$guard2->guard_id = 2;
		$guard2->user_id = $id;
		$guard2->health = 10;
		$guard2->map_id = 6;
		$guard2->save();

		$guard3 = new Guard();
		$guard3->guard_id = 3;
		$guard3->user_id = $id;
		$guard3->health = 10;
		$guard3->map_id = 8;
		$guard3->save();

		$guard4 = new Guard();
		$guard4->guard_id = 4;
		$guard4->user_id = $id;
		$guard4->health = 10;
		$guard4->map_id = 8;
		$guard4->save();

		$guard5 = new Guard();
		$guard5->guard_id = 5;
		$guard5->user_id = $id;
		$guard5->health = 10;
		$guard5->map_id = 8;
		$guard5->save();

		$guard6 = new Guard();
		$guard6->guard_id = 6;
		$guard6->user_id = $id;
		$guard6->health = 10;
		$guard6->map_id = 12;
		$guard6->save();

		$guard7 = new Guard();
		$guard7->guard_id = 7;
		$guard7->user_id = $id;
		$guard7->health = 10;
		$guard7->map_id = 19;
		$guard7->save();

		$guard8 = new Guard();
		$guard8->guard_id = 8;
		$guard8->user_id = $id;
		$guard8->health = 10;
		$guard8->map_id = 19;
		$guard8->save();

		return Redirect::action('HomeController@showConsole');
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
