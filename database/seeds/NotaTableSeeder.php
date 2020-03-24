<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker\Factory::create();

        $data = [];

        for ($i = 0; $i < 50; $i++) :

            array_push($data, [

                'idTab' => $faker->numberBetween(1, 23),
                'texto' => $faker->text(),
                'fecha' => $faker->date('Y-m-d'),
                'completado' => $faker->boolean(),
            ]);

        endfor;

        DB::table('nota')->insert($data);
    }
}
