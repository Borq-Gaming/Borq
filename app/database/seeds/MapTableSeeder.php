<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class MapTableSeeder extends Seeder {

	public function run()
	{

		Map::create([

			'location' 			=> 'couryard',
			'north'				=> 'castle_entrance',
			'south'				=> 'none',
			'east'				=> 'southeast_tower',
			'west'				=> 'southwest_tower',
			'description'		=> 'You see the courtyard before you.  To your right (east) is a tower entrance.  To your left (west) is another tower entrance.  North of you, you see a well, and beyond that, the entrance to the castle.  It looks like the entrance is guarded by 2 soldiers.',
			'objects'			=> '',
			'guard_id'			=> '0', // will have a number (1-8) corresponding to the guard(s) in the location 

			'location' 			=> 'southeast_tower_outer',
			'north'				=> 'stables',
			'south'				=> 'none',
			'east'				=> 'blocked', // requires key to unlock
			'west'				=> 'courtyard',
			'description'		=> 'You see a door to the guard tower.  You hear horses nickering from the direction of the building to the north.  You think that building must be the stables.',
			'objects'			=> '',
			'guard_id'			=> '0',

			'location' 			=> 'southeast_tower_inner',
			'north'				=> 'east_wall',
			'south'				=> 'none',
			'east'				=> 'none',
			'west'				=> 'southeast_tower_outer',
			'description'		=> 'Inside the tower, you see a spiraling staircase leading upward.  It appears that this staircase leads to the top of the wall.',
			'objects'			=> 'lantern',
			'guard_id'			=> '0',

			'location' 			=> 'southwest_tower_outer',
			'north'				=> 'barracks',
			'south'				=> 'none',
			'east'				=> 'courtyard',
			'west'				=> 'southwest_tower_inner',
			'description'		=> 'From your location, you see a door to the guard tower on the west side of the courtyard.  North of your location, you see a fortified building.  You hear some clamoring sounds and raucous voices.  The sounds make you think there might be some soldiers in the building',
			'objects'			=> '',
			'guard_id'			=> '0',

			'location' 			=> 'southwest_tower-inner',
			'north'				=> 'west_wall',
			'south'				=> 'none',
			'east'				=> 'none',
			'west'				=> 'southwest_tower_outer',
			'description'		=> 'Inside the southwest tower, you see a spiraling stair going upward.  You think it might lead to the rampart on the western side of the castle.',
			'objects'			=> '',
			'guard_id'			=> '0',

			'location' 			=> 'castle_entrance',
			'north'				=> 'great_hall',
			'south'				=> 'couryard',
			'east'				=> 'stables',
			'west'				=> 'barracks',
			'description'		=> 'You enter an area with 2 burly guards, in front of the massive doors to the castle.  The guards look dangerour. You think that they will attack if they see you.',
			'objects'			=> '',
			'guard_id'			=> '1, 2',

			'location' 			=> 'stables',
			'north'				=> 'kitchen',
			'south'				=> 'southeast_tower_outer',
			'east'				=> 'blocked', // will need to determine if northeast guard tower can be entered from ground.  locked by default
			'west'				=> 'castle_entrance',
			'description'		=> 'You have entered a stable with several horses.  They look at you warily while they feed on hay.',
			'objects'			=> '',
			'guard_id'			=> '0',	

			'location' 			=> 'barracks',
			'north'				=> 'blocked', // will need to determine if northwest guard tower can be entered from ground. locked by default
			'south'				=> 'southeast_tower_outer',
			'east'				=> 'castle_entrance',
			'west'				=> 'none',
			'description'		=> 'You see that this is the barracks for the castle.  It appears to house the soldiers for the king.  You see a sword and a set of armor near one of the bunks that would be a good match.  You also see something gleaming on a nearby table.',
			'objects'			=> 'sword, armor, key',
			'guard_id'			=> '3, 4, 5', // will need to look at removing the guards if a distraction event is written	

			'location' 			=> 'east_wall',
			'north'				=> 'northeast_tower',
			'south'				=> 'southeast_tower_inner',
			'east'				=> 'none',
			'west'				=> 'none',
			'description'		=> 'You see the eastern rampart stretching out to the north.  The rampart connects to another guard tower to the north.  The castle walls are on either side of you.  It looks like a steep and dangerous drop on either side.',
			'objects'			=> '',
			'guard_id'			=> '0',	

			'location' 			=> 'west_wall',
			'north'				=> 'northwest_tower',
			'south'				=> 'southwest_tower_inner',
			'east'				=> 'none',
			'west'				=> 'none',
			'description'		=> 'You look upon the western wall'/'s rampart.  To the north you see another guard tower, as well as a strange looking tower a bit farther north and west.  The strange tower appears to be connected to the guard tower.  On either side of the wall is a steep drop that would be almost certain death.',
			'objects'			=> '',
			'guard_id'			=> '0',	

			'location' 			=> 'northeast_tower',
			'north'				=> 'dressing_room',
			'south'				=> 'east_wall',
			'east'				=> 'none',
			'west'				=> 'outer_receiving',
			'description'		=> 'You have entered the top floor of the northeastern tower. A closed door is to the western side of the chamber.  An open window to the north shows what appears to be the upper floor of the king'/'s castle.  It seems like there is an open window in the castle as well.  You might be able to make the leap down to it if you felt daring',  //determine if we will have a lower floor available to the player
			'objects'			=> '',
			'guard_id'			=> '0',	

			'location' 			=> 'northwest_tower',
			'north'				=> 'wizard_tower',
			'south'				=> 'west_wall',
			'east'				=> 'outer_receiving',
			'west'				=> 'none',
			'description'		=> '',
			'objects'			=> '',
			'guard_id'			=> '6',	

			'location' 			=> 'kitchen',
			'north'				=> 'none',
			'south'				=> 'stables',
			'east'				=> 'none',
			'west'				=> 'great_hall',
			'description'		=> '',
			'objects'			=> 'apple, bread',
			'guard_id'			=> '0',	

			'location' 			=> 'great_hall',
			'north'				=> 'none',
			'south'				=> 'castle_entrance',
			'east'				=> 'kitchen',
			'west'				=> 'reception_room',
			'description'		=> '',
			'objects'			=> '',
			'guard_id'			=> '0',

			'location' 			=> 'reception_room',
			'north'				=> 'none',
			'south'				=> 'none', // need to see if we connect this to the nw tower possibly
			'east'				=> 'great_hall',
			'west'				=> 'study', //stairwell leading up to the 2nd floor
			'description'		=> '',
			'objects'			=> 'wine',
			'guard_id'			=> '0',	

			'location' 			=> 'wizard_tower',
			'north'				=> 'none',
			'south'				=> 'northwest_tower',
			'east'				=> 'none',
			'west'				=> 'none',
			'description'		=> '',
			'objects'			=> 'potion_invisibility, potion_strength, potion_regeneration',
			'guard_id'			=> '0',	

			'location' 			=> 'dressing_room',
			'north'				=> 'king_chamber',
			'south'				=> 'blocked', // locked door? to outer receiving (look at making it one way)
			'east'				=> 'blocked', // can not return to the window in the northeast tower
			'west'				=> 'none',
			'description'		=> '',
			'objects'			=> 'queen_sleeping_clothing',
			'guard_id'			=> '0',	

			'location' 			=> 'study',
			'north'				=> 'king_chamber',
			'south'				=> 'outer_receiving',
			'east'				=> 'none',
			'west'				=> 'reception_room',
			'description'		=> '',
			'objects'			=> 'wine, note',
			'guard_id'			=> '0',	

			'location' 			=> 'outer_receiving',
			'north'				=> 'king_chamber',
			'south'				=> 'none',
			'east'				=> 'northeast_tower',
			'west'				=> 'northwest_tower',
			'description'		=> '',
			'objects'			=> '',
			'guard_id'			=> '7, 8',	

			'location' 			=> 'king_chamber',
			'north'				=> 'window',
			'south'				=> 'outer_receiving',
			'east'				=> 'dressing_room',
			'west'				=> 'study',
			'description'		=> '',
			'objects'			=> 'crown',
			'guard_id'			=> '0', // may need to add 7, 8 guard here depending on how events are handled?

			'location' 			=> 'window',
			'north'				=> 'none',
			'south'				=> 'none',
			'east'				=> 'none',
			'west'				=> 'none',
			'description'		=> 'Window escape - the end...', // write content
			'objects'			=> '',
			'guard_id'			=> '0', // may need to add 7, 8 guard here depending on how events are handled?

		]);
	}

}