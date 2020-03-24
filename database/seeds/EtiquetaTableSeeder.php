<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $data = [];

        // poblamos la tabla etiqueta
        for ($i = 0; $i < 30; $i++) :

            array_push($data, [
                'tag' => $faker->word()
            ]);

        endfor;

        DB::table('etiqueta')->insert($data);

        // poblamos la tabla nota_etiqueta

        $data = [];


        for ($i = 0; $i < 10; $i++) :

            array_push($data, [
                'idNot' => $faker->numberBetween(1, 50),
                'idTag' => $faker->numberBetween(1, 30)
            ]);

        endfor;

        DB::table('nota_etiqueta')->insert($data);


    }
}
