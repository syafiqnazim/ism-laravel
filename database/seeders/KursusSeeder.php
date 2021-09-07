<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Faker;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kursus = [
            [
                'nama_kursus' => 'Kursus Pengurusan Kewangan',
                'kapasiti' => '40',
                'kluster' => 'Finance Units',
                'peruntukan' => '300',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Kursus Pembangunan Ihsan',
                'kapasiti' => '30',
                'kluster' => 'Research & Development',
                'peruntukan' => '200',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Kursus Sukarelawan',
                'kapasiti' => '40',
                'kluster' => 'Volunteerism & Social Entrepreneurship',
                'peruntukan' => '1000',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Kursus Kewanitaan',
                'kapasiti' => '40',
                'kluster' => 'Capacity & Gender Development',
                'peruntukan' => '300',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Program Hari Keluarga',
                'kapasiti' => '200',
                'kluster' => 'Administration & Human Resource Units',
                'peruntukan' => '5000',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
        ];

        DB::table('kursuses')->insert($kursus);
    }
}
