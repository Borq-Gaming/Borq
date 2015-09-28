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

	public function postGaurd() 
	{
		$this->fetchStats();
		$this->fetchGaurd();
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
		$location = $game->player_location_id;
		$player = $game->id;

	}
	
		// RNG for hit/miss
		// if hit, simulate hit
		// RNG for counter attack hit/miss
		// if hit, simulate hit
		// save new HP to DB
		// return results
}
