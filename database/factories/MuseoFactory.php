<?php

use Faker\Generator as Faker;
use \Carbon\Carbon;

$factory->define(App\Museo::class, function (Faker $faker) {

    /**
     * Ordena de más reciente a más antiguo.
     */
    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    /**
     * Datos que rellena el faker.
     */
    return [
        'image'=> 'https://picsum.photos/150/150/?random',
        'name' =>$faker->unique()->domainWord,
        'horario_apertura'=> $faker->unique()->time($format = 'H:i', $max = 'now'),
        'horario_cierre'=> $faker->unique()->time($format = 'H:i', $max = 'now'),
        'web' => $faker->url,
        'social' => $faker->word,
        'type'=> $faker->word,
        'period' => $faker->word,
        'description' => $faker->realText(200),
        'created_at' => ($time1 < $time2) ? $time1 : $time2,
        'updated_at' => ($time1 > $time2) ? $time1 : $time2
    ];
});