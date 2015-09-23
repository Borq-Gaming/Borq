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

		DB::table('users')->delete();
		DB::table('maps')->delete();
		DB::table('actions')->delete();
		DB::table('guards')->delete();

		// $this->call('UsersTableSeeder');
		$this->call('MapsTableSeeder');
		$this->call('ActionsTableSeeder');
		// $this->call('GuardsTableSeeder');

	}

}



