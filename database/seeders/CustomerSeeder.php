<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'paketkuota' => 'KUOTA SETRIKA',
            'berat' => '50',
            'harga' => '225000',
            'cabang' => 'MLPTI Bekasi',
        ]);
    }
}
