<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
         DB::table('users')->insert([
            [   
                'role_id' => '1',
                'gender_id' => '1',
                'first_name' => 'lilo',
                'last_name' => 'marcus',
                'photo' => 'lilo_marcus.jpg',
                'email' => 'admin@amazing.com',
                'password' => Hash::make('admin123')
            ]
        ]);
    }
}
