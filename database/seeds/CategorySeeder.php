<?php

use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('categories')->insert(
            [ 
                'name' => "Chó cảnh"
            ]
            );
        DB::table('categories')->insert(
            [ 
                'name' => "Mèo Cảnh"
            ]
            );
        DB::table('categories')->insert(
            [ 
                'name' => "Bán chó cảnh"
            ]
            );
        DB::table('categories')->insert(
            [ 
                'name' => "Bán mèo cảnh"
            ]
            );
        DB::table('categories')->insert(
            [ 
                'name' => "Shop phụ kiện"
            ]
            );
    }
}
