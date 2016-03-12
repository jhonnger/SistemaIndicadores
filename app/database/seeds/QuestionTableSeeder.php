<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use SisInd\Entities\Question;

class QuestionTableSeeder extends Seeder {

	public function run()
	{
		Question::create([

			'id'      		=>  1,
			'name'    		=> 'Porcentaje de docentes ordinarios',
			'operands'		=> 'Número de docentes ordinarios,Número total de docentes',
			'equation'		=> 'op1/op2*100',
			'indicator_id' 	=> 1

		]);

		Question::create([

			'id'      		=>  2,
			'name'    		=> 'Porcentaje de docentes a tiempo completo',
			'operands'		=> 'Número de docentes a tiempo completo,Número total de docentes',
			'equation'		=> 'op1/op2*100',
			'indicator_id' 	=> 2

		]);

		Question::create([

			'id'      		=>  3,
			'name'    		=> 'Porcentaje de docentes nombrados del área básica',
			'operands'		=> 'Número de docentes nombrados del área básica,Número total de docentes del área básica',
			'equation'		=> 'op1/op2*100',
			'indicator_id' 	=> 3

		]);

		Question::create([

			'id'      		=>  4,
			'name'    		=> 'Porcentaje de docentes nombrados del área formativa',
			'operands'		=> 'Número de docentes nombrados del área formativa,Número total de docentes del área formativa',
			'equation'		=> 'op1/op2*100',
			'indicator_id' 	=> 3

		]);
	}

}