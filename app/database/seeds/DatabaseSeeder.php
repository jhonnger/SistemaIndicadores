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

		$this->call('RoleTableSeeder');
		$this->call('IndicatorTableSeeder');
		$this->call('QuestionTableSeeder');
		
		
		
		$this->call('TypeTableSeeder');
		$this->call('OficceTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('IndicatorUserTableSeeder');
		$this->call('IndicatorRolTableSeeder');
		// $this->call('UserTableSeeder');
	}

}
