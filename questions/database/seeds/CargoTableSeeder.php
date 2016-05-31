<?php

use Illuminate\Database\Seeder;
use Questions\Cargo;

//use Faker\Factory as Faker;

class CargoTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('cargos')->truncate();

        //   $faker = Faker::create();
        // foreach (range(1, 15) as $i) {
        Cargo::create(['nome' => 'Analista de Sistemas ']);
        Cargo::create(['nome' => 'Analista de Telecomunicações']);
        Cargo::create(['nome' => 'Analista de Banco de Dados']);
        Cargo::create(['nome' => 'Administrador']);
        Cargo::create(['nome' => 'Advogado']);
        Cargo::create(['nome' => 'Agente de Saúde']);
        Cargo::create(['nome' => 'Arquiteto']);
        Cargo::create(['nome' => 'Engenheiro Mecânico']);

        //}
    }

}
