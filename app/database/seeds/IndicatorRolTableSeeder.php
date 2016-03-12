<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use SisInd\Entities\Indicator_Rol;


class IndicatorRolTableSeeder extends Seeder {

	public function run()
	{
            Indicator_Rol::create([
                'id'            => 1,
                'indicator_id'  => 1,
                'rol_id'        => 1
            ]);
            Indicator_Rol::create([
                'id'            => 2,
                'indicator_id'  => 2,
                'rol_id'        => 1
            ]);
            Indicator_Rol::create([
                'id'            => 3,
                'indicator_id'  => 1,
                'rol_id'        => 2
            ]);
            Indicator_Rol::create([
                'id'            => 4,
                'indicator_id'  => 1,
                'rol_id'        => 3
            ]);
            Indicator_Rol::create([
                'id'            => 5,
                'indicator_id'  => 2,
                'rol_id'        => 3
            ]);
            Indicator_Rol::create([
                'id'            => 6,
                'indicator_id'  => 3,
                'rol_id'        => 3
            ]);
	}

}