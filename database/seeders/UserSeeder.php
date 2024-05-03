<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id'=>1,
            'name' => 'George',
            'email' => 'george@gmail.com',
            'password' => bcrypt('George243#'),
            'type' => '1',
            ],

            [
            'id'=>2,
            'name' => 'Milkah',
            'email' => 'milkah@gmail.com',
            'password' => bcrypt('Milkah243#'),
            'type' => '1',
            ]
    
    ]);
    }
}
