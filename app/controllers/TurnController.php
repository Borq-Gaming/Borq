<?php

class TurnController extends BaseController {

	public function getCheck()
	{
		$this->isDead();
		$this->isSeen();
	}

	public function return($thing)
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
			$update->player_location_id = $this->nextRoom;
			$update->save();

			// fetch game over text
			$room = Map::where("id", $id)->firstOrFail();
			$this->return($room->description);
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
			$chance = (5/$game->stealth) * 100
			$seen = mt_rand(1, 100);
			if ($seen < $chance) {
				$game->health = $game->health - 1;
				if ($game->stealth != 0) {
					$game->stealth = $game->stealth - 2;
				}
				$game->save()
				$return = "You have been spotted and a guard attacks you. -1 Health -2 Stealth"
				$this->return($return);
			} else {
				$return = "The guards don't see you, but you might want to hurry."
				$this->return($return);
			}
		}
	}
}
