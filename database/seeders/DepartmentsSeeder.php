<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seederArray = [
            ["name" => "Muhasebe"],
            ["name" => "Pazarlama"]
        ];
        foreach ($seederArray as $index) {
            DB::table('departments')->insert([
                'name' => $index["name"]
            ]);
        }
    }
}
