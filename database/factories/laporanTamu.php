<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\guest::class, function (Faker $faker) {
    return [
         'id_satpam'=>'1',
         'id_client'=>'1',
         'id_outsourcing'=>'2',
         'address'=>$faker->address,
         'phone_num'=>$faker->phoneNumber,
         'requirement'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
         'company'=> $faker->randomElement(['BNI','BRI','BCA','Mandiri']),
         'File_attachment'=>'https://via.placeholder.com/150x150',
    ];
});
