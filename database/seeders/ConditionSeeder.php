<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert([
        	['condition' => 'Applied'],
        	['condition' => 'Accepted'],
        	['condition' => 'Refused'],
        	['condition' => 'Hired :)']
        ]);
    }
}
