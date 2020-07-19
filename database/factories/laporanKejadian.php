<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\accident::class, function (Faker $faker) {
    return [
        'id_satpam'=>'2',
        'id_client'=>'2',
        'id_outsourcing'=>'2',
        'Incident'=>$faker->sentence($nbWords = 2, $variableNbWords = true),
        'Tindak_lanjut'=>$faker->sentence($nbWords = 3, $variableNbWords = true),
        'note'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        
        'File_attachment'=>'https://via.placeholder.com/150x150',
   ];
});
