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
		DB::table('items')->delete();

		// $this->call('UsersTableSeeder'); // review for removal
		$this->call('MapsTableSeeder');
		// $this->call('GuardsTableSeeder');
		$this->call('ItemsTableSeeder');
		$this->call('ActionsTableSeeder');

	}

}



