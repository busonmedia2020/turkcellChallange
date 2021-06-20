<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seederArray = [
            ["name" => "John Doe","email" => "john@doe.com" , "gsm_no" => "905331234567" ,"department_id" => 1],
            ["name" => "Mary Lee","email" => "mary@lee.com" , "gsm_no" => "905331234568" ,"department_id" => 2]
        ];
        foreach ($seederArray as $index) {
            DB::table('customers')->insert([
                'name' => $index["name"],
                'email' => $index["email"],
                'gsm_no' => $index["gsm_no"],
                'department_id' => $index["department_id"]
            ]);
        }
    }
}
