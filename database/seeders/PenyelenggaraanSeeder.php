<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Faker;

class PenyelenggaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyelenggaraan = [
            [
                "jenis_kerosakan" => 'Bangunan',
                "keterangan_kerosakan" => 'Retak',
                "penyelenggara" => 'Kamarul Bin Saad',
                "tarikh_aduan" => Faker::fakeDates(),
                "tarikh_selesai" => Faker::fakeDates(),
                "status" => 'Selesai',
            ],
            [
                "jenis_kerosakan" => 'Bangunan',
                "keterangan_kerosakan" => 'Retak',
                "penyelenggara" => 'Kamarul Bin Saad',
                "tarikh_aduan" => Faker::fakeDates(),
                "tarikh_selesai" => Faker::fakeDates(),
                "status" => 'Selesai',
            ],
            [
                "jenis_kerosakan" => 'Bangunan',
                "keterangan_kerosakan" => 'Retak',
                "penyelenggara" => 'Kamarul Bin Saad',
                "tarikh_aduan" => Faker::fakeDates(),
                "tarikh_selesai" => Faker::fakeDates(),
                "status" => 'Selesai',
            ],
            [
                "jenis_kerosakan" => 'Bangunan',
                "keterangan_kerosakan" => 'Retak',
                "penyelenggara" => 'Kamarul Bin Saad',
                "tarikh_aduan" => Faker::fakeDates(),
                "tarikh_selesai" => Faker::fakeDates(),
                "status" => 'Selesai',
            ],
            [
                "jenis_kerosakan" => 'Bangunan',
                "keterangan_kerosakan" => 'Retak',
                "penyelenggara" => 'Kamarul Bin Saad',
                "tarikh_aduan" => Faker::fakeDates(),
                "tarikh_selesai" => Faker::fakeDates(),
                "status" => 'Selesai',
            ],
        ];

        DB::table('penyelenggaraans')->insert($penyelenggaraan);
    }
}
