<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class CounsellorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counsellors')->insert([
            [
            'UserId'=>1,
            'Name' => 'Counsellor George',
            'Phone' => '+25478532',
            'Sector' => 'counselling',
            ],
    
            [
            'UserId'=>2,
            'Name' => 'Counsellor Milkah',
            'Phone' => '+25474533',
            'Sector' => 'counselling',
            ]

    ]);  
    }
}
