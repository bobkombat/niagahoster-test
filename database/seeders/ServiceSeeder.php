<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_1 = [
            'name' => 'Bayi',
            'before_price' => 19900,
            'after_price' => 14900,
            'user_register' => 938,
        ];

        $data_2 = [
            'name' => 'Pelajar',
            'before_price' => 46900,
            'after_price' => 23450,
            'user_register' => 4168,
        ];

        $data_3 = [
            'name' => 'Personal',
            'before_price' => 58900,
            'after_price' => 38900,
            'user_register' => 10017,
        ];

        $data_4 = [
            'name' => 'Bisnis',
            'before_price' => 109900,
            'after_price' => 65900,
            'user_register' => 3558,
        ];

        DB::table('services')->insert($data_1, $data_2, $data_3, $data_4);
    }
}
