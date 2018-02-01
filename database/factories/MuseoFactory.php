
<?php
use Faker\Generator as Faker;
use \Carbon\Carbon;
$factory->define(App\Museo::class, function (Faker $faker) {

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    return [
        'name' =>$faker->domainWord,
        'horario_apertura'=> $faker->numberBetween(6,12),
        'horario_cierre'=> $faker->numberBetween(18,24),
        'web' => $faker->url,
        'social' => $faker->word,
        'type'=> $faker->word,
        'period' => $faker->word,
        'description' => $faker->realText(200),
        'created_at' => ($time1 < $time2) ? $time1 : $time2,
        'updated_at' => ($time1 > $time2) ? $time1 : $time2
    ];
});