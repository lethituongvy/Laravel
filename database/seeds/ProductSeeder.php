<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert(
                [
                    'name' => $faker->name,
                    'image' => 'public/abc.jpeg',
                    'category_id' => $faker->numberBetween(1, 5),
                    'price' => $faker->numberBetween(150000, 2000000),
                    'oldprice'=>$faker->numberBetween(200000,3000000),
                    'description'=>$faker->sentence(20),
                    'quantity'=>100
                ]
            );
        }
    }
}
