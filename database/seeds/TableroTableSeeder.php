<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();


        // Creamos la colección de datos.
        $data = [];


        for ($i = 0; $i < 20; $i++) :

            array_push($data, [

                'nombre' => $faker->sentence(4, false),
                'fecha' => $faker->date('Y-m-d'),
            ]);

        endfor;



        // Insertamos los datos en la base de datos.
        DB::table('tablero')->insert($data);
    }
}
