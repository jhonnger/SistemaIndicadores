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

		$this->call('IndicatorRolTableSeeder');
		$this->call('IndicatorTableSeeder');
		$this->call('QuestionTableSeeder');
		$this->call('TypeTableSeeder');
		$this->call('OficceTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('IndicatorUserTableSeeder');
		$this->call('IndicatorRolTableSeeder');
		$this->call('UserQuestionTableSeeder');
		
		// $this->call('UserTableSeeder');
	}

}
