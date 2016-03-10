<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('name');
			$table->string('dni');
			$table->integer('office_id')->unsigned();
			$table->integer('rol_id')->unsigned();
			$table->string('remember_token')->nullable;

			$table->foreign('rol_id')->references('id')->on('roles');
			$table->foreign('office_id')->references('id')->on('offices');

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
		Schema::drop('users');
	}

}
