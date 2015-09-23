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
			$table->integer('initial_health');
			$table->integer('map_id')->unsigned();
			$table->foreign('map_id')->references('id')->on('maps');

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
