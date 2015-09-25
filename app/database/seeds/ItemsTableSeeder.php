<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{

	// Barracks Items	
		$barracks = Map::where('location_name', 'barracks')->firstOrFail();

		Item::create([
			'name' => 'sword',
			'map_id' => $barracks->id
		]);

		Item::create([
			'name' => 'armor',
			'map_id' => $barracks->id
		]);


		Item::create([
			'name' => 'key',
			'map_id' => $barracks->id
		]);

	// Southwest Tower Item
		$southWestTower = Map::where('location_name', 'southwest_tower_outer')->firstOrFail();
		
		Item::create([
			'name' => 'lantern',
			'map_id' => $southWestTower->id
		]);

	// Kitchen Items
		$kitchen = Map::where('location_name', 'kitchen')->firstOrFail();
		
		Item::create([
			'name' => 'apple',
			'map_id' => $kitchen->id
		]);

		Item::create([
			'name' => 'bread',
			'map_id' => $kitchen->id
		]);

	// Reception Room Item
		$receptionRoom = Map::where('location_name', 'reception_room')->firstOrFail();
		
		Item::create([
			'name' => 'wine',
			'map_id' => $receptionRoom->id
		]);

	// Wizard Tower Items
		$wizardTower = Map::where('location_name', 'wizard_tower')->firstOrFail();
		
		Item::create([
			'name' => 'potion_invisibility',
			'map_id' => $wizardTower->id
		]);

		Item::create([
			'name' => 'potion_strength',
			'map_id' => $wizardTower->id
		]);

		Item::create([
			'name' => 'potion_regeneration',
			'map_id' => $wizardTower->id
		]);	

	// Dressing Room Item
		$dressingRoom = Map::where('location_name', 'dressing_room')->firstOrFail();

		Item::create([
			'name' => 'queen_sleeping_clothing',
			'map_id' => $dressingRoom->id
		]);	


	// Study Item
		$study = Map::where('location_name', 'study')->firstOrFail();

		Item::create([
			'name' => 'note',
			'map_id' => $study->id
		]);	
	
	// King Chamber Item
		$kingChamber = Map::where('location_name', 'king_chamber')->firstOrFail();

		Item::create([
			'name' => 'crown',
			'map_id' => $kingChamber->id
		]);	

	}

}