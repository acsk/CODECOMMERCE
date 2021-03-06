<?php

use CodeCommerce\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        DB::table('products')->truncate();
        $faker = Faker::create('pt_BR');

        foreach (range(1, 50) as $i) {

            Product::create([

                'name' => $faker->name(),
                'description' => $faker->sentence(),
                'price' => $faker->randomNumber(2),
                'category_id' => $faker->numberBetween(1,15)
            ]);
        }
    }

}
