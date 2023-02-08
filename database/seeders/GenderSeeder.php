<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    public function run()
    {
        DB::table('genders')->insert([
            [
                'description' => 'Male'
            ],
            [
                'description' => 'Female'
            ]
        ]);
    }
}
