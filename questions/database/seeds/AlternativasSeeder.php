<?php

use Illuminate\Database\Seeder;
use Questions\Alternativa;
use Questions\Questaos;
use Faker\Factory as Faker;

class AlternativasSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        DB::table('alternativas')->truncate();
        DB::table('questaos')->truncate();

        foreach (range(1, 20) as $p) { //prova

            foreach (range(1, 2) as $q) { // questao
                

                foreach (range(1, 5) as $a) { // alternativas

                    Alternativa::create([

                        'prova_id' => $p,
                        'questao_id' => $q,
                        'descricao' => $faker->sentence(),
                        'anulada' => 0,
                        'resposta' => 0
                    ]);
                }
            }
        }
    }

}
