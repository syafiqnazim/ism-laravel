<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SenaraiPemanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $senarai_pemandu = [
            [
                'nama_pemandu' => 'Hisyam Rahim',
                'ic_pemandu' => '123456121234',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'nama_pemandu' => 'Latif Ibrahim',
                'ic_pemandu' => '123456121234',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
            [
                'nama_pemandu' => 'Rahmat Mega',
                'ic_pemandu' => '123456121234',
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ],
        ];

        DB::table('senarai_pemandus')->insert($senarai_pemandu);
    }
}
