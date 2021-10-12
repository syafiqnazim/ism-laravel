<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Faker;
use Illuminate\Support\Carbon;

class TempahanKenderaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tempahan_kenderaan = [
            [
                'nama_penempah' => 'Ahmad Hamdi',
                'ic_penempah' => '123456-12-1234',
                'tujuan' => 'Penghantaran Surat',
                'destinasi' => 'KPWKM dan Sungai Besi, KL',
                'pemandu' => 'Khairul Nizam',
                'jenis_kenderaan' => 'Toyota Hilux',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'nama_penempah' => 'Ahmad Hamdi',
                'ic_penempah' => '123456-12-1234',
                'tujuan' => 'Penghantaran Surat',
                'destinasi' => 'KPWKM dan Sungai Besi, KL',
                'pemandu' => 'Khairul Nizam',
                'jenis_kenderaan' => 'Toyota Hilux',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'nama_penempah' => 'Ahmad Hamdi',
                'ic_penempah' => '123456-12-1234',
                'tujuan' => 'Penghantaran Surat',
                'destinasi' => 'KPWKM dan Sungai Besi, KL',
                'pemandu' => 'Khairul Nizam',
                'jenis_kenderaan' => 'Toyota Hilux',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'nama_penempah' => 'Ahmad Hamdi',
                'ic_penempah' => '123456-12-1234',
                'tujuan' => 'Penghantaran Surat',
                'destinasi' => 'KPWKM dan Sungai Besi, KL',
                'pemandu' => 'Khairul Nizam',
                'jenis_kenderaan' => 'Toyota Hilux',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'nama_penempah' => 'Ahmad Hamdi',
                'ic_penempah' => '123456-12-1234',
                'tujuan' => 'Penghantaran Surat',
                'destinasi' => 'KPWKM dan Sungai Besi, KL',
                'pemandu' => 'Khairul Nizam',
                'jenis_kenderaan' => 'Toyota Hilux',
                'tarikh_mula' => Faker::fakeDates(),
                'tarikh_akhir' => Faker::fakeDates(),
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ];

        DB::table('tempahan_kenderaans')->insert($tempahan_kenderaan);
    }
}
