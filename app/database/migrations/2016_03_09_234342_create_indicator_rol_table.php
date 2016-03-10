<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndicatorRolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('indicator_rol', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('indicator_id')->unsigned();
			$table->integer('rol_id')->unsigned();

			$table->foreign('indicator_id')->references('id')->on('indicators');
			$table->foreign('rol_id')->references('id')->on('roles');

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
		Schema::drop('indicator_rol');
	}

}
