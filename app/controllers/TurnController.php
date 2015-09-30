<?php

class TurnController extends BaseController {

	public function getCheck()
	{
		if ($this->isDead()) {
			$return = $this->isDead();
			return Response::json($return);
		}
		if ($this->isSeen()){
			$return = $this->isSeen();
			return Response::json($return);
		}
	}

	public function sendBack($thing)
	{
		return Response::json($thing);
	}

	public function isDead()
	{
		$user = Auth::user();
		$health = $user->health;
		if ($health <= 0) {

			// move to game over room
			$update = Auth::user();
			$update->player_location_id = 22;
			$update->save();

			// fetch game over text
			$room = Map::where("id", 22)->firstOrFail();
			return $room->description;
		} else {
			return false;
		}
	}

	public function isSeen()
	{
		// are there guards?
		$game = Auth::user();
		$guard = $game->map->guards()
			->where('health', '>', 0)
			->where('user_id', Auth::id())
			->first();
		if ($guard) { // if so
			$stealth = $game->stealth;

			if ($stealth == 0){
				$stealth = 1;
			}
			
			$chance = (5/$stealth) * 100;
			$seen = mt_rand(1, 100);

			if ($seen < $chance) {
				$game->health = $game->health - 1;

				if ($game->stealth != 0) {
					$game->stealth = $game->stealth - 1;
				}

				$game->save();
				return "You have been spotted and a guard attacks you. -1 Health -1 Stealth";
			} else {
				return "The guards don't see you, but you might want to hurry.";
			}
		} else {
			return false;
		}
	}
}
