<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class MapsTableSeeder extends Seeder {

	public function run()
	{

	// Courtyard Room
		$courtyard = Map::create([

			'location_name'		=> 'courtyard',
			'display_name'		=> 'Castle Courtyard',
			'image'				=> 'images/areas/courtyard.png',
			'description'		=> 'You see the courtyard before you.  To the east is a tower entrance.  To west is another tower entrance.  North of you, you see a large statue in a fountain (thats a strange fixture for a castle), and beyond that, the entrance to the castle.  It looks like the entrance is guarded by 2 soldiers.',
		]);

	// South East Tower (outer)
		$southEastTowerOuter = Map::create([

			//block the east route (door) unless player has key
			'location_name'		=> 'southeast_tower_outer',
			'display_name'		=> 'South East Guard Tower',
			'image'				=> 'images/areas/tower.png',
			'description'		=> 'You see a door east of you in the base of the tower.  You hear horses nickering from the direction of the building to the north.  You think that building must be the stables.',
		]);

	// South East Tower (inner)
		$southEastTowerInner = Map::create([

			'location_name'		=> 'southeast_tower_inner',
			'display_name'		=> 'Inner Chamber - South East Tower',
			'image'				=> 'images/areas/se-inner-tower.png',
			'description'		=> 'Inside the tower, you see a staircase on the north side leading upward. It appears that this staircase leads to the top of the wall. Thats convenient. And possibly somewhat familiar...',
			'objects'			=> 'lantern',
		]);

	// South West Tower (outer)	
		$southWestTowerOuter = Map::create([

			'location_name'		=> 'southwest_tower_outer',
			'display_name'		=> 'South West Guard Tower',
			'image'				=> 'images/areas/tower.png',
			'description'		=> 'From your location, you see a door to the guard tower on the west side of the courtyard. North of your location, you see a fortified building. You hear some clamoring sounds and raucous singing.  Its either soldiers having fun or M*A*S*H is on. Its probably the former.',
		]);

	// South West Tower (inner)
		$southWestTowerInner = Map::create([

			'location_name'		=> 'southwest_tower_inner',
			'display_name'		=> 'Inner Chamber - South West Tower',
			'image'				=> 'images/areas/sw-inner-tower.png',
			'description'		=> 'Inside the tower, you see a staircase on the north side leading upward. It appears that this staircase leads to the top of the wall. Thats convenient.',
		]);

	// Castle Entrance
		$castleEntrance = Map::create([

			'location_name'		=> 'castle_entrance',
			'display_name'  	=> "Castle Entrance",
			'image'				=> 'images/areas/castle-entrance.png',
			'description'		=> 'You enter an area with 2 burly guards in front of the massive doors to the castle. The guards look dangerous. You think that they will attack if they see you.',
		]);

	// Stables
		$stables = Map::create([

			// will need to determine if northeast guard tower can be entered from ground.  locked by default
			'location_name'		=> 'stables',
			'display_name'		=> 'Stables',
			'image'				=> 'images/areas/stables.png',
			'description'		=> 'You have entered a stable with several horses. They look at you warily while they feed on hay. You look warily back at them. Fair is fair after all.',
		]);

	// Barracks
		$barracks = Map::create([

			// will need to determine if northwest guard tower can be entered from ground. locked by default
			// will need to look at removing the guards if a distraction event is written	
			'location_name'		=> 'barracks',
			'display_name'		=> 'Barracks',
			'image'				=> 'images/areas/barracks.png',
			'description'		=> 'You see that this is the barracks for the castle. It appears to house the soldiers for the king (very astute of you). You see a sword and a set of armor near one of the bunks that would be a good match.  You also see a key gleaming on a nearby table.',
			'objects'			=> 'sword, armor, key',
		]);

	// East Wall
		$eastWall = Map::create([

			'location_name'		=> 'east_wall',
			'display_name'		=> 'East Wall Ramparts',
			'image'				=> 'images/areas/east-rampart.png',
			'description'		=> 'You see the eastern rampart stretching out to the north.  The rampart connects to another guard tower to the north. The castle walls are on either side of you. It looks like a steep and dangerous drop on either side. You get a sudden urge to jump, but thankfully the game mechanics dont allow for that, so you are safe.',

		]);
		
	// West Wall
		$westWall = Map::create([

			'location_name'		=> 'west_wall',
			'display_name'		=> 'West Wall Ramparts',
			'image'				=> 'images/areas/west-rampart.png',
			'description'		=> 'You look upon the ramparts of the western wall. To the north you see another guard tower, a strange tower appears to be connected to the guard tower. On either side of the wall is a steep drop that would be almost certain death. You wish you had remembered your wingsuit.',
		]);

	// North East Tower
		$northEastTower = Map::create([

			//determine if we will have a lower floor available to the player
			'location_name'		=> 'northeast_tower',
			'display_name'		=> 'North East Tower',
			'image'				=> 'images/areas/ne-inner-tower.png',
			'description'		=> 'You have entered the top floor of the northeastern tower. A closed door is to the western side of the chamber. An open window to the north shows what appears to be the upper floor of the castle. It seems there is an open window in the castle as well. You might be able to make the leap down to it if you felt daring.',  
		]);

	// North West Tower
		$northWestTower = Map::create([

			'location_name'		=> 'northwest_tower',
			'display_name'		=> 'North West Tower',
			'image'				=> 'images/areas/nw-inner-tower.png',
			'description'		=> 'You are in the north west tower of the castle. A small archway and bridge extend to the north west. These lead to another strange tower. It also appears you are not alone...',
		]);

	// Kitchen
		$kitchen = Map::create([

			'location_name'		=> 'kitchen',
			'display_name'		=> 'Kitchen',
			'image'				=> 'images/areas/kitchen.png',
			'description'		=> 'Entering the room, you find yourself in the castle kitchen. Heavenly smells linger, unfortunately all the good food is gone and only a few apples and some bread remains.',
			'objects'			=> 'apple, bread',
		]);

	// Great Hall
		$greatHall = Map::create([

			'location_name'		=> 'great_hall',
			'display_name'		=> 'Great Hall',
			'image'				=> 'images/areas/greathall.png',
			'description'		=> 'You are in a magnificent room that includes an impressive throne, beautiful tapestries, and other impressive things (probably). All the items are securely fastened to walls, floor, and furniture though. What a shame...',
		]);

	// Reception Room
		$receptionRoom = Map::create([

			// need to see if we connect this to the nw tower possibly
			// west route = stairwell leading up to the 2nd floor
			'location_name'		=> 'reception_room',
			'display_name'		=> 'Reception Room',
			'image'				=> 'images/areas/reception.png',
			'description'		=> 'You enter a lavishly appointed room. The king must have vast wealth! (I mean, he is king after all) In the north corner of the room, you notice a set of stairs leading upward. To your east is the Great Hall. One thing you notice is a full bottle of wine on one of the tables. This will be a good evening',
			'objects'			=> 'wine',

		]);

	// Wizard Tower
		$wizardTower = Map::create([

			'location_name'		=> 'wizard_tower',
			'display_name' 		=> 'Wizard Tower',
			'image'				=> 'images/areas/wizard.png',
			'description'		=> 'In this arcane room, you notice a vast array of strange and exotic items. You are afraid to even touch them, but a few bottles draw your eye. You were gonna touch them anyway, right? ...',
			'objects'			=> 'potion_invisibility, potion_strength, potion_regeneration',
		]);

	// Dressing Room
		$dressingRoom = Map::create([

			// locked door? to outer receiving (look at making it one way)
			// can not return to the window in the northeast tower
			'location_name'		=> 'dressing_room',
			'display_name'		=> 'Dressing and Wash Room',
			'image'				=> 'images/areas/dressing.png',
			'description'		=> 'You find yourself in the king and queens dressing chamber. Peeking through the door to the west, you see the sleeping chambers. There are many expensive garments hanging in the closet. You\'d look fabulous in one of those.',
			'objects'			=> 'gown',
		]);

	// Study
		$study = Map::create([

			'location_name'		=> 'study',
			'display_name'		=> 'Study',
			'image'				=> 'images/areas/study.png',
			'description'		=> 'Upon entering this room, you notice that it is filled with books, writing material, and comfortable furniture. A set of stairs to the south leads down. Peeking through the door to the east, you see the sleeping chambers.',
			'objects'			=> 'note',
		]);

	// Outer Receiving
		$outerReceiving = Map::create([
			//determine if we want to create a balcony room...if so, it is south_map_id

			'location_name'		=> 'outer_receiving',
			'display_name'		=> 'Outer Receiving Chamber',
			'image'				=> 'images/areas/receiving.png',
			'description'		=> 'This room appears to be an area that grants a more comfortable setting for the king and queen to receive guests. On the north wall you see a magnificent set of double doors... and a magnificent set of double guards!',
		]);

	// King Chamber
		$kingChamber = Map::create([
			// may need to add 2 guards here depending on how events are handled?
			'location_name'		=> 'king_chamber',
			'display_name'		=> 'King and Queen - Bed Chamber',
			'image'				=> 'images/areas/bedroom.png',
			'description'		=> 'The elegant room that you have just entered has a large bed and beautiful furniture. Additionally, there is an exquisitely decorated crown next to the bed. The room appears to be royally occupied...',
			'objects'			=> 'crown',
		]);
		
	// Exit Window
		$window = Map::create([
			'location_name'		=> 'window',
			'image'				=> 'images/areas/window-exit.png',
			'display_name'		=> 'Out the Window',
			'description'		=> 'You take a running leap out the window. It is then that you realize you are quite a ways up in the air. You revel in your few seconds of flight. Thankfully you already won, nothing can take change that. <br><br>---Credits---<br>Developers:<br>Timothy Birrell<br>Matt Reat<br>David Rodrigues<br><br>With thanks to Codeup', // write content

		]);
		
	// Lost Game
		$gameover = Map::create([
			'location_name'		=> 'gameover',
			'image'				=> 'images/areas/castle-outer.png',
			'display_name'		=> 'Game Over',
			'description'		=> 'You gave it your all, but that was not enough. You are destined to hang in the morning. Some how you escape and run away or something, idk. Deus ex Machina can only be abused so much. <br><br>---Credits---<br>Developers:<br>Timothy Birrell<br>Matt Reat<br>David Rodrigues<br><br>With thanks to Codeup', // write content

		]);

// Separator between map description and objects arrays and the navigation
	
	// Courtyard Navigation
		$courtyard->north_map_id = $castleEntrance->id;
		$courtyard->east_map_id = $southEastTowerOuter->id;
		$courtyard->west_map_id = $southWestTowerOuter->id;
		$courtyard->save();

	// South East Tower Outer Navigation
		$southEastTowerOuter->north_map_id = $stables->id;
		$southEastTowerOuter->east_map_id = $southEastTowerInner->id;
		$southEastTowerOuter->west_map_id = $courtyard->id;
		$southEastTowerOuter->save();

	// South East Tower Inner Navigation
		$southEastTowerInner->north_map_id = $eastWall->id;
		$southEastTowerInner->west_map_id = $southEastTowerOuter->id;
		$southEastTowerInner->save();


	// South West Tower Outer Navigation
		$southWestTowerOuter->north_map_id = $barracks->id;
		$southWestTowerOuter->east_map_id = $courtyard->id;
		$southWestTowerOuter->west_map_id = $southWestTowerInner->id;
		$southWestTowerOuter->save();

	// South West Tower Inner Navigation
		$southWestTowerInner->north_map_id = $westWall->id;
		$southWestTowerInner->east_map_id = $southWestTowerOuter->id;
		$southWestTowerInner->save();

	// Castle Entrance Navigation
		$castleEntrance->north_map_id = $greatHall->id;
		$castleEntrance->south_map_id = $courtyard->id;
		$castleEntrance->east_map_id = $stables->id;
		$castleEntrance->west_map_id = $barracks->id;
		$castleEntrance->save();

	// Stables Navigation
		$stables->north_map_id = $kitchen->id;
		$stables->south_map_id = $southEastTowerOuter->id;
		$stables->west_map_id = $castleEntrance->id;
		$stables->save();

	// Barracks Navigation
		$barracks->south_map_id = $southWestTowerOuter->id;
		$barracks->east_map_id = $castleEntrance->id;
		$barracks->save();

	// East Wall Navigation
		$eastWall->north_map_id = $northEastTower->id;
		$eastWall->south_map_id = $southEastTowerInner->id;
		$eastWall->save();

	// West Wall Navigation
		$westWall->north_map_id = $northWestTower->id;
		$westWall->south_map_id = $southWestTowerInner->id;
		$westWall->save();

	// North East Tower Navigation
		$northEastTower->north_map_id = $dressingRoom->id;
		$northEastTower->south_map_id = $eastWall->id;
		$northEastTower->west_map_id = $outerReceiving->id;
		$northEastTower->save();

	// North West Tower Navigation
		$northWestTower->south_map_id = $westWall->id;
		$northWestTower->east_map_id = $outerReceiving->id;
		$northWestTower->west_map_id = $wizardTower->id;
		$northWestTower->save();

	// Kitchen Navigation
		$kitchen->south_map_id = $stables->id;
		$kitchen->west_map_id = $greatHall->id;
		$kitchen->save();

	// Great Hall Navigation
		$greatHall->south_map_id = $castleEntrance->id;
		$greatHall->east_map_id = $kitchen->id;
		$greatHall->west_map_id = $receptionRoom->id;
		$greatHall->save();

	// Reception Room Navigation
		$receptionRoom->north_map_id = $study->id;
		$receptionRoom->east_map_id = $greatHall->id;
		$receptionRoom->save();

	// Wizard Tower Navigation
		$wizardTower->east_map_id = $northWestTower->id;
		$wizardTower->save();

	// Dressing Room Navigation
		$dressingRoom->west_map_id = $kingChamber->id;
		$dressingRoom->save();

	// Study Navigation
		$study->east_map_id = $kingChamber->id;
		$study->south_map_id = $receptionRoom->id;
		$study->save();

	// Outer Receiving Navigation
		$outerReceiving->north_map_id = $kingChamber->id;
		$outerReceiving->east_map_id = $northEastTower->id;
		$outerReceiving->west_map_id = $northWestTower->id;
		$outerReceiving->save();

	// King Chamber Navigation
		// determine if we want to have the user have access to the window // maybe just capture crown and end game // if window ends game, it is north_map_id
		$kingChamber->north_map_id = $window->id;
		$kingChamber->south_map_id = $outerReceiving->id;
		$kingChamber->east_map_id = $dressingRoom->id;
		$kingChamber->west_map_id = $study->id;
		$kingChamber->save();

	}

}