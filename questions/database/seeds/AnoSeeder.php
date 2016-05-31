<?php

use Illuminate\Database\Seeder;
use Questions\Ano;
class AnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('anos')->truncate();

         Ano::create(['ano' => '2001']);
         Ano::create(['ano' => '2002']);
         Ano::create(['ano' => '2003']);
         Ano::create(['ano' => '2004']);
         Ano::create(['ano' => '2005']);
         Ano::create(['ano' => '2006']);
         Ano::create(['ano' => '2007']);
         Ano::create(['ano' => '2008']);
         Ano::create(['ano' => '2009']);
         Ano::create(['ano' => '2010']);
         Ano::create(['ano' => '2011']);
         Ano::create(['ano' => '2012']);
         Ano::create(['ano' => '2013']);
         Ano::create(['ano' => '2014']);
         Ano::create(['ano' => '2015']);
         Ano::create(['ano' => '2016']);
           
    }
    
}
