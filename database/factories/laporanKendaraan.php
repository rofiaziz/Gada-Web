<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\vehicle::class, function (Faker $faker) {
    return [
        'id_satpam'=>'2',
        'id_client'=>'2',
        'id_outsourcing'=>'2',
        'Date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'Time_in'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'Time_out'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'Driver_name'=>$faker->firstName,
        'vehicle_num'=>$faker->randomElement(['AA 1111 BB','A 2222 B','C 3333 D']),
        'Month'=>$faker->month($max = 'now'),
        'note'=>$faker-> sentence($nbWords = 6, $variableNbWords = true),
        'File_attachment'=>'https://via.placeholder.com/150x150',
   ];
});
