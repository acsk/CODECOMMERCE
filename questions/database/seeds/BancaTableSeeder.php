<?php

use Illuminate\Database\Seeder;
use Questions\Banca;
use Faker\Factory as Faker;

class BancaTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('bancas')->truncate();

        Banca::create(['nome' => 'CESPE']);
        Banca::create(['nome' => 'CESGRANRIO']);
        Banca::create(['nome' => 'IADES']);
        Banca::create(['nome' => 'CONSULPLAN']);
        Banca::create(['nome' => 'FCC']);
        Banca::create(['nome' => 'FGV']);
        Banca::create(['nome' => 'IBFC']);
        Banca::create(['nome' => 'FUMARC']);
        Banca::create(['nome' => 'IDECAN']);
        Banca::create(['nome' => 'AOCP']);
    }

}
