<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['AreaName' => 'Kasoa Area'],
            ['AreaName' => 'Kaneshie Area'],
            ['AreaName' => 'Downtown Ofaakor Area'],
        ];

        DB::table('tblarea')->insert($areas);
    }
}
