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
        
            DB::table('products')->insert(
                [
                    'name' => 'Chó cục bông',
                    'image' => 'public/abc.jpeg',
                    'category_id' => $faker->numberBetween(1, 5),
                    'price' => $faker->numberBetween(150000, 2000000),
                    'oldprice'=>$faker->numberBetween(200000,3000000),
                    'description'=>$faker->sentence(20),
                    'quantity'=>100
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Chó Alaka',
                    'image' => 'public/1.jpeg',
                    'category_id' => $faker->numberBetween(1, 5),
                    'price' => $faker->numberBetween(150000, 2000000),
                    'oldprice'=>$faker->numberBetween(200000,3000000),
                    'description'=>$faker->sentence(20),
                    'quantity'=>100
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Chó Nâu Trắng',
                    'image' => 'public/nautrang.jpeg',
                    'category_id' => $faker->numberBetween(1, 5),
                    'price' => $faker->numberBetween(150000, 2000000),
                    'oldprice'=>$faker->numberBetween(200000,3000000),
                    'description'=>$faker->sentence(20),
                    'quantity'=>100
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Chó Ngố',
                    'image' => 'public/ngo.jpeg',
                    'category_id' => $faker->numberBetween(1, 5),
                    'price' => $faker->numberBetween(150000, 2000000),
                    'oldprice'=>$faker->numberBetween(200000,3000000),
                    'description'=>$faker->sentence(20),
                    'quantity'=>100
                ]
            );
            DB::table('products')->insert(
                [
                    'name' => 'Chó nhin mặt Ngốc',
                    'image' => 'public/ngox.jpeg',
                    'category_id' => $faker->numberBetween(1, 5),
                    'price' => $faker->numberBetween(150000, 2000000),
                    'oldprice'=>$faker->numberBetween(200000,3000000),
                    'description'=>$faker->sentence(20),
                    'quantity'=>100
                ]
            );
    }
}
