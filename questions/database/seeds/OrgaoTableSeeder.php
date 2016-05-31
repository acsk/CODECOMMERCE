<?php

use Illuminate\Database\Seeder;
use Questions\Orgao;

//use Faker\Factory as Faker;

class OrgaoTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('orgaos')->truncate();

        Orgao::create(['nome' => 'TRT-AL']);
        Orgao::create(['nome' => 'TRT-SP']);
        Orgao::create(['nome' => 'TRT-RJ']);
        Orgao::create(['nome' => 'EBSERH']);
        Orgao::create(['nome' => 'PREFEITURA DE ARAPIARACA - AL']);
        Orgao::create(['nome' => 'EBGE']);
        Orgao::create(['nome' => 'INSS']);
        Orgao::create(['nome' => 'BANCO DO BRASIL']);
        Orgao::create(['nome' => 'BANCO DO NORDESTE']);
        Orgao::create(['nome' => 'TCE - PA']);
    }

}
