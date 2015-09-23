<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class GuardsTableSeeder extends Seeder {

	public function run()
	{
		
	// Castle Entrance Guards	
		$castleEntrance = Map::where('location_name', 'castle_entrance')->firstOrFail();

		Guard::create([
			'health' => 10,
			'map_id' => $castleEntrance->id
		]);

		Guard::create([
			'health' => 10,
			'map_id' => $castleEntrance->id
		]);

	// Barracks Guards
		$barracks = Map::where('location_name', 'barracks')->firstOrFail();
		
		Guard::create([
			'health' => 10,
			'map_id' => $barracks->id
		]);

		Guard::create([
			'health' => 10,
			'map_id' => $barracks->id
		]);

		Guard::create([
			'health' => 10,
			'map_id' => $barracks->id
		]);

	// North West Tower Guard
		$northWestTower = Map::where('location_name', 'northwest_tower')->firstOrFail();
		Guard::create([
			'health' => 10,
			'map_id' => $northWestTower->id
		]);

	// Outer Receiving Guard
		$outerReceiving = Map::where('location_name', 'outer_receiving')->firstOrFail();
		
		Guard::create([
			'health' => 10,
			'map_id' => $outerReceiving->id
		]);

		Guard::create([
			'health' => 10,
			'map_id' => $outerReceiving->id
		]);


	}

}