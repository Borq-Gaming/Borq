<?php

class HitController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	//var bank
	public $sword;
	public $armor;
	public $hp;
	public $guardHp;
	public $guardIndex;

	public function postGaurd() 
	{
		$game = Auth::user();
		if ($game->map->guards->toArray()) {
			$this->fetchStats();
			$this->fetchGaurd();
			$return = $this->fight();
			$this->update();
		} else {
			$return = "There is no one to fight.";
		}

		// return result
		return Response::json($return);
	}

	// fetch all necessary stats and set up
	public function fetchStats()
	{
		$stats = Auth::user();
		
		// fetch sword and armor stats
		$sword = $stats->sword;
		$armor = $stats->armor;
		
		// fetch HP
		$this->hp = $stats->health;

		if ($sword) {
			$this->sword = 1.15;
		} else {
			$this->sword = 1;
		}

		if ($armor) {
			$this->armor = 1.15;
		} else {
			$this->armor = 1;
		}
	}

	public function fetchGuard()
	{
		$game = Auth::user();

		// if room has 3 gaurds
		if ($game->map->gaurds[2]) {
			// if gaurd 1 is alive
			if ($game->map->gaurds[0] > 0) {
				$this->gaurdIndex = 0;
				$this->gaurdIndex = $game->map->gaurds[0]->health;
			// if gaurd 2 is alive
			} else if ($game->map->gaurds[1] > 0) {
				$this->gaurdIndex = 1;
				$this->gaurdIndex = $game->map->gaurds[1]->health;
			// if gaurd 3 is alive
			} else if ($game->map->gaurds[2] > 0) {
				$this->gaurdIndex = 2;
				$this->gaurdIndex = $game->map->gaurds[2]->health;
			}
			
		// if room has 2 gaurds
		} else if($game->map->gaurds[1]) {
			// if gaurd 1 is alive
			if ($game->map->gaurds[0] > 0) {
				$this->gaurdIndex = 0;
				$this->gaurdIndex = $game->map->gaurds[0]->health;
			// if gaurd 2 is alive
			} else if ($game->map->gaurds[1] > 0) {
				$this->gaurdIndex = 1;
				$this->gaurdIndex = $game->map->gaurds[1]->health;
			}

		// if room has 1 gaurd	
		} else if($game->map->gaurds[0]) {
			if ($game->map->gaurds[0] > 0) {
				$this->gaurdIndex = 0;
				$this->gaurdIndex = $game->map->gaurds[0]->health;
			}
		}
	}

	public function fight()
	{
		//player rngs
		$hit = mt_rand(1, 100);
		$rng = mt_rand(1, 67);
		$rng = $rng/100;

		//guard rngs
		$guard = mt_rand(1, 3);

		// player hit
		if ($hit > 30) {
			$damage = (((3 * $this->sword) * $this->armor) * $rng);
			$damage = round($damage);

			$return1 = "You hit the guard for " . $damage . " damage." . PHP_EOL;
		} else {
			$damage = 0;

			$return1 = "You miss the guard." . PHP_EOL;
		}

		//guard hit
		if ($guard = 1) {
			$guardDamage = 1;
		} else {
			$guardDamage = 2;
		}

		$return2 = "The guard hits you for " . $gaurdDamage . " damage. ";

		$this->guardHp = $this->guardHp - $damage;
		$this->hp = $this->hp - $guardDamage;

		return $return1 . $return1;
	}

	public function update()
	{
		$update = Auth::user();
		$update->health = $this->hp;
		$update->map->guards[$this->index]->health = $this->guardHp;
		$update->save();

	}

		// RNG for hit/miss
		// if hit, simulate hit
		// RNG for counter attack hit/miss
		// if hit, simulate hit
		// save new HP to DB
		// return results
}
