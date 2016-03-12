<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use SisInd\Entities\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'id'  		=> 1,  
			'name'    	=> 'admin',
			'dni'		=> '12345678',
			'password'	=> \Hash::make(1234),
			'office_id'	=> 1,
			'rol_id'	=> 4
			]);

		User::create([
			'id'  		=> 2,  
			'name'    	=> 'Johnny Cotos Sullon',
			'dni'		=> '48201874',
			'password'	=> \Hash::make(1234),
			'office_id'	=> 1,
			'rol_id'	=> 2
			]);

		User::create([
			'id'  		=> 3,  
			'name'    	=> 'Ana Irina Merino Hurtado',
			'dni'		=> '98765432',
			'password'	=> \Hash::make(123),
			'office_id'	=> 2,
			'rol_id'	=>	3
			]);
	}
}