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
    {   
        for ($i=1; $i <= 5; $i++) { 
            DB::table('users')->insert([
                'username' => Str::random(10).'@gmail.com',
                'role_id' => $i,
                'password' => Hash::make('password'),
            ]);
        }
       
    }
}
