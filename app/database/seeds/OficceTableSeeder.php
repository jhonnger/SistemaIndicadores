<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use SisInd\Entities\Office;

class OficceTableSeeder extends Seeder {

	public function run()
	{
		Office::create([

			'id'  		=> 1,
			'name' 		=> 'OCAFCA',
			'type_id'  	=> 1

			]);

		Office::create([

			'id'  		=> 2,
			'name' 		=> 'ARQUITECTURA',
			'type_id'  	=> 2

			]);

		Office::create([

			'id'  		=> 3,
			'name' 		=> 'INDUSTRIAL',
			'type_id'  	=> 2

			]);
	}

}