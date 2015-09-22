<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('map', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->string('north');
			$table->string('south');
			$table->string('east');
			$table->string('west');
			$table->varchar('description');
			$table->string('objects')->nullable();
			$table->string('guard_id');

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
		Schema::drop('map');
	}

}
