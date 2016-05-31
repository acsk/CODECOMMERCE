<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


        $this->call('BancaTableSeeder');
        $this->call('OrgaoTableSeeder');
        $this->call('CargoTableSeeder');
        $this->call('AnoSeeder');
        $this->call('NivelSeeder');
        $this->call('ProvaSeeder');
        $this->call('QuestaoSeeder');
        $this->call('AlternativasSeeder');


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }

}
