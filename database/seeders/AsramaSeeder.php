<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Faker;

class AsramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asrama = [
            [
                'kod_asrama' => 'Bilik A001',
                'kapasiti' => '2',
                'status' => 'available',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_tamat' => Faker::fakeDates(),
            ],
            [
                'kod_asrama' => 'Bilik A002',
                'kapasiti' => '2',
                'status' => 'available',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_tamat' => Faker::fakeDates(),
            ],
            [
                'kod_asrama' => 'Bilik A003',
                'kapasiti' => '2',
                'status' => 'available',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_tamat' => Faker::fakeDates(),
            ],
            [
                'kod_asrama' => 'Bilik A004',
                'kapasiti' => '2',
                'status' => 'available',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_tamat' => Faker::fakeDates(),
            ],
            [
                'kod_asrama' => 'Bilik A005',
                'kapasiti' => '2',
                'status' => 'available',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_tamat' => Faker::fakeDates(),
            ],
        ];

        DB::table('asramas')->insert($asrama);
    }
}
