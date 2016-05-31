<?php

use Illuminate\Database\Seeder;
use Questions\Nivel;

class NivelSeeder extends Seeder
{
    
    public function run()
    {
      
        DB::table('nivels')->truncate();

        Nivel::create(['nome' => 'Fundamental']);
        Nivel::create(['nome' => 'Médio']);
        Nivel::create(['nome' => 'Superior']);
        
    
    }
}
