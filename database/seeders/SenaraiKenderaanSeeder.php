<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SenaraiKenderaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $senarai_kenderaan = [
            [
                'no_pendaftaran' => 'WKL 7793',
                'jenama' => 'HINO',
                'jenis_kenderaan' => 'Bas',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'no_pendaftaran' => 'VA 123',
                'jenama' => 'Toyota Hilux',
                'jenis_kenderaan' => 'Kereta',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'no_pendaftaran' => 'KED 3456',
                'jenama' => 'Honda Accord',
                'jenis_kenderaan' => 'Kereta',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'no_pendaftaran' => 'AAB 8055',
                'jenama' => 'Toyota Hi-Ace',
                'jenis_kenderaan' => 'Van',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'no_pendaftaran' => 'JKL 809',
                'jenama' => 'BMW 3 Series',
                'jenis_kenderaan' => 'Kereta',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ];

        DB::table('senarai_kenderaans')->insert($senarai_kenderaan);
    }
}
