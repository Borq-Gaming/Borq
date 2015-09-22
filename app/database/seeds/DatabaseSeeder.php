<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('games')->delete();
		DB::table('map')->delete();
		DB::table('use')->delete();

		$this->call('GamesTableSeeder');
		$this->call('MapTableSeeder');
		$this->call('UseTableSeeder');
	}

}



