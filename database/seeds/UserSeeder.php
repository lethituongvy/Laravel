<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            DB::table('users')->insert(
                [ 
                    'name' => $faker->name,
                    'username'=> "admin",
                    'password'=>Hash::make("admin"),
                    'email' => $faker->unique()->email,
                    'role' => "admin"
                ]
            );
            DB::table('users')->insert(
                [ 
                    'name' => $faker->name,
                    'username'=> "user",
                    'password'=>Hash::make("user"),
                    'email' => $faker->unique()->email,
                    'role' => "user"
                ]
            );
        
    }
    
}
