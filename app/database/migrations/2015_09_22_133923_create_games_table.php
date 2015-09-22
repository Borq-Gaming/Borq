<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('health');
			$table->integer('weapon')->nullable();
			$table->integer('armor')->nullable();
			$table->varchar('backpack')->nullable();
			$table->integer('guard_1_health');
			$table->integer('guard_2_health');
			$table->integer('guard_3_health');
			$table->integer('guard_4_health');
			$table->integer('guard_5_health');
			$table->integer('guard_6_health');
			$table->integer('guard_7_health');
			$table->integer('guard_8_health');
			$table->integer('stealth');
			$table->boolean('access_x');

			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('games');
	}

}
