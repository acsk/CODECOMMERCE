<?php

use Illuminate\Database\Seeder;
use Questions\Prova;
use Faker\Factory as Faker;

class ProvaSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();

        DB::table('provas')->truncate();

        foreach (range(1, 20) as $i) {

           Prova::create([

                'banca_id' => $faker->numberBetween(1, 10),
                'cargo_id' => $faker->numberBetween(1, 8),
                'orgao_id' => $faker->numberBetween(1, 8),
                'nivel_id' => $faker->numberBetween(1,3),
                'ano_id' => $faker->numberBetween(1, 8)
            ]);
        }
    }

}
