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
			$table->integer('player_location_id')->unsigned();
			$table->foreign('player_location_id')->references('id')->on('map');
			$table->integer('health');
			$table->integer('weapon')->nullable();
			$table->integer('armor')->nullable();
			$table->varchar('apples')->nullable();
			$table->varchar('bread')->nullable();
			$table->varchar('sword')->nullable();
			$table->varchar('armor')->nullable();
			$table->varchar('key')->nullable();
			$table->varchar('wine')->nullable();
			$table->varchar('lantern')->nullable();
			$table->varchar('note')->nullable();
			$table->varchar('queen_sleeping_clothing')->nullable();
			$table->varchar('potion_invisibility')->nullable();
			$table->varchar('potion_strength')->nullable();
			$table->varchar('potion_regeneration')->nullable();
			$table->varchar('crown')->nullable();
			$table->integer('guard_1_health');
			$table->integer('guard_2_health');
			$table->integer('guard_3_health');
			$table->integer('guard_4_health');
			$table->integer('guard_5_health');
			$table->integer('guard_6_health');
			$table->integer('guard_7_health');
			$table->integer('guard_8_health');
			$table->integer('stealth');
			$table->boolean('access_x'); // need to add all the access flags as they are built.  access grants permission to block paths

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
