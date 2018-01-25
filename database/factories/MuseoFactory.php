
<?php
use Faker\Generator as Faker;
use \Carbon\Carbon;
$factory->define(App\Museo::class, function (Faker $faker) {

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    return [
        'name' =>$faker->domainName,
        'horario'=> $faker->randomDigit,
        'web' => $faker->address,
        'social' => $faker->word,
        'type'=> $faker->word,
        'period' => $faker->word,
        'description' => $faker->realText(255),
        'created_at' => ($time1 < $time2) ? $time1 : $time2,
        'updated_at' => ($time1 > $time2) ? $time1 : $time2
    ];
});




