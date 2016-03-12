<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use SisInd\Entities\Role;

class RoleTableSeeder extends Seeder {

	public function run()
	{
		Role::create([

			'id'    => 1,
			'name'  => 'rol1'
		]);

		Role::create([

			'id'    =>  2,
			'name'  =>  'rol2'

		]);

		Role::create([

			'id'    => 3,
			'name'  =>  'rol3'

		]);

		Role::create([

			'id'    => 4,
			'name'  =>  'ADMIN'
		]);
	}

}