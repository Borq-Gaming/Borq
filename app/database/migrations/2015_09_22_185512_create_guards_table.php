<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('health');
			$table->integer('guard_location_id')->unsigned();
			$table->foreign('guard_location_id')->references('id')->on('map');

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
		Schema::drop('guards');
	}

}
