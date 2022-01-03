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
                'tajuk_program' => 'Tajuk Program',
                'objektif_program' => 'Objektif Program',
                'kapasiti' => '40',
                'kluster' => '2',
                'peruntukan' => '300',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21', 
            ],
            [
                'nama_kursus' => 'Kursus Pembangunan Ihsan',
                'tajuk_program' => 'Tajuk Program 1',
                'objektif_program' => 'Objektif Program 1',
                'kapasiti' => '30',
                'kluster' => '3',
                'peruntukan' => '200',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Kursus Sukarelawan',
                'tajuk_program' => 'Tajuk Program 2',
                'objektif_program' => 'Objektif Program 2',
                'kapasiti' => '40',
                'kluster' => '4',
                'peruntukan' => '1000',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Kursus Kewanitaan',
                'tajuk_program' => 'Tajuk Program 3',
                'objektif_program' => 'Objektif Program 3',
                'kapasiti' => '40',
                'kluster' => '2',
                'peruntukan' => '300',
                'bilik' => 'Bilik Kuliah 1, ISM',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'bil_keperluan_asrama' => '1/21',
            ],
            [
                'nama_kursus' => 'Program Hari Keluarga',
                'tajuk_program' => 'Tajuk Program 4',
                'objektif_program' => 'Objektif Program 4',
                'kapasiti' => '200',
                'kluster' => '3',
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
