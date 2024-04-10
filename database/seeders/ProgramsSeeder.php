<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([

            'Name' => 'Parent Counselling',
            'Day' => 'Monday',
            'Duration' => '45',
            'CounsellorId' => 1,
            'Price' => '3500',

        ]);
    }
}
