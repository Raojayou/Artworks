<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 20)->create()->each(function (App\User $user) {
            factory(\App\Obra::class, 10)->create(['user_id' => $user->id]);

            factory(App\Museo::class, 10)->create(['user_id' => $user->id]);

            //Comentario temporal para preparar el añadido de Obra dentro de Museo.
            //->each(function (App\Museo $museo) {
            //factory(\App\Obra::class, 10)->create(['museo_id' => $museo->id]);
            //});
        });
    }
}