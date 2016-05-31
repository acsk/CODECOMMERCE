<?php

use Illuminate\Database\Seeder;
use Questions\Questao;
use Faker\Factory as Faker;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

        DB::table('questaos')->truncate();

        foreach (range(1, 20) as $i) {

            Questao::create([

                'prova_id' => $i,
                'descricao' => $faker->sentence(50)
                
            ]);
        }
    }
}
