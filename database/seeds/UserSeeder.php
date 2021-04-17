<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function PHPSTORM_META\map;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    
    {   $faker = Faker\Factory::create();   
        for ($i=1; $i <= 5; $i++) { 
            $user = DB::table('users')->insert([
                'username' => $faker->unique()->numerify('##########'),
                'password' => Hash::make('password'),
            ]);
        }
       
    }
}
