<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Faker;

class PengurusanIctSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengurusan_ict = [
            [
                "nama_kursus" => 'Kursus Pengurusan Kewangan',
                "peralatan" => 'Laptop',
                "jumlah" => '10',
                "nama_penempah" => 'Sazali Shaari',
                "tarikh_mula" => Faker::fakeDates(),
                "tarikh_akhir" => Faker::fakeDates(),
            ],
            [
                "nama_kursus" => 'Kursus Pembangunan Ihsan',
                "peralatan" => 'Projector',
                "jumlah" => '2',
                "nama_penempah" => 'Karim Benzema',
                "tarikh_mula" => Faker::fakeDates(),
                "tarikh_akhir" => Faker::fakeDates(),
            ],
            [
                "nama_kursus" => 'Kursus Sukarelawan',
                "peralatan" => 'Monitor',
                "jumlah" => '3',
                "nama_penempah" => 'Hamdan Yaakob',
                "tarikh_mula" => Faker::fakeDates(),
                "tarikh_akhir" => Faker::fakeDates(),
            ],
            [
                "nama_kursus" => 'Kursus Kewanitaan',
                "peralatan" => 'Laptop',
                "jumlah" => '6',
                "nama_penempah" => 'Wan Daniel',
                "tarikh_mula" => Faker::fakeDates(),
                "tarikh_akhir" => Faker::fakeDates(),
            ],
            [
                "nama_kursus" => 'Program Hari Keluarga',
                "peralatan" => 'Projector',
                "jumlah" => '1',
                "nama_penempah" => 'Kamarulzaman Hisham',
                "tarikh_mula" => Faker::fakeDates(),
                "tarikh_akhir" => Faker::fakeDates(),
            ],
        ];

        DB::table('pengurusan_icts')->insert($pengurusan_ict);
    }
}
