
<?php
use Faker\Generator as Faker;
use \Carbon\Carbon;
$factory->define(App\Museo::class, function (Faker $faker) {

    $time1 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    $time2 = Carbon::createFromTimestamp($faker->dateTimeThisDecade()->getTimestamp());
    return [
        'horario_de_apertura' => $faker->randomDigit,
        'pagina_web' => $faker->address,
        'redes_sociales' => $faker->word,
        'tipo_de_museo' => $faker->word,
        'epoca_de_las_obras' => $faker->word,
        'descripcion' => $faker->realText(255),
        'created_at' => ($time1 < $time2) ? $time1 : $time2,
        'updated_at' => ($time1 > $time2) ? $time1 : $time2
    ];
});