<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Section;
use Faker\Factory as Faker;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table('sections')->truncate();
        $faker = Faker::create();

        foreach (range(1, 4) as $i) {

            Section::create([

                'name' => $faker->name(),
                'description' => $faker->sentence()
                
            ]);
        }
    }
}
