<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            ['DistrictName' => 'New Amanfro District'],
            ['DistrictName' => 'Odokor District'],
            // Add more districts as needed
        ];

        DB::table('tbldistrict')->insert($districts);
    }
}
