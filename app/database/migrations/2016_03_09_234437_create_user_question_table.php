<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_question', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('question_id')->unsigned();
			$table->integer('user_id')->unsigned();

			$table->foreign('question_id')->references('id')->on('questions');
			$table->foreign('user_id')->references('id')->on('users');

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
		Schema::drop('user_question');
	}

}
