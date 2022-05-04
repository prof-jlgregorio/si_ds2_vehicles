<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'name' => 'Fiat Marea Turbo 24v',
            'register' => '222333'
        ]);

        DB::table('vehicles')->insert([
            'name' => 'Opala 4.4',
            'register' => '112233'
        ]);
    }
}
