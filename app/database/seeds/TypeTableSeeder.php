<?php


class TypeTableSeeder extends Seeder {

	public function run()
	{
		Type::create([

			'id'  => 1,
			'name'=> 'Oficina'
			]);

		Type::create([

			'id'  => 2,
			'name'=> 'Carrera'
			]);
	}

}