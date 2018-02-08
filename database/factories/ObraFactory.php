<?php

use Faker\Generator as Faker;
use \Carbon\Carbon;

$factory->define(App\Obra::class, function (Faker $faker) {

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());

    return [
        'name' =>$faker->unique()->domainWord,
        'type'=> $faker->word,
        'tecnique' => $faker->word,
        'materials'=> $faker->word,
        'review' => $faker->realText(200),
        'created_at' => ($time1 < $time2) ? $time1 : $time2,
        'updated_at' => ($time1 > $time2) ? $time1 : $time2
    ];
});