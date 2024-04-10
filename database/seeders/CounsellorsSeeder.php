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
            'UserId'=>1,
            'Name' => 'Counsellor George',
            'Phone' => '+254785324',
            'Sector' => 'counselling',

        ]);
    }
}
