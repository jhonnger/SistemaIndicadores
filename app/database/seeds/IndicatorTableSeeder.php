<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use SisInd\Entities\Indicator;

class IndicatorTableSeeder extends Seeder {

	public function run()
	{
		Indicator::create([
			'id'    		=> 1 ,
			'name'  		=> 'GII - 70', 			
			'description'  	=> 'Docentes'
		]);

		Indicator::create([
			'id'    		=> 2 ,
			'name'  		=> 'GII - 71' , 			
			'description'  	=> 'Docentes'
		]);

		Indicator::create([
			'id'    		=> 3 ,
			'name'  		=> 'GII - 72' , 			
			'description'  	=> 'Docentes'
		]);

		
	}

}