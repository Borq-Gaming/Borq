<?php

// Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

class ActionsTableSeeder extends Seeder {

	public function run()
	{

		$key_door = new Action();
		$key_door->item_1	= 'key';
		$key_door->item_2	= 'door';
		$key_door->result	= 'The door unlocks and swings open. You can now go east into the tower.';
		$key_door->save();

		$lantern_hay = new Action();
		$lantern_hay->item_1	= 'lantern';
		$lantern_hay->item_2	= 'hay';
		$lantern_hay->result	= 'You stick some hay into the lantern. As it catches fire you drop it all on the rest of the hay, the fire is spreading quickly and you can hear the gaurds coming to invesigate.';
		$lantern_hay->save();

	}

}