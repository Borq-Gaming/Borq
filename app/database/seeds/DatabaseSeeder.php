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
		DB::table('uses')->delete();
		DB::table('guards')->delete();
		DB::table('items')->delete();

		// $this->call('UsersTableSeeder'); // review for removal
		$this->call('MapsTableSeeder');
		// $this->call('UsesTableSeeder');
		$this->call('GuardsTableSeeder');
		$this->call('ItemsTableSeeder');

	}

}



