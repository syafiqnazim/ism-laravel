<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmodulKursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $submodul = [
            [
                'nama_submodul' => 'Kewangan',
            ],
            [
                'nama_submodul' => 'Perakaunan',
            ],
            [
                'nama_submodul' => 'Jati Diri',
            ],
            [
                'nama_submodul' => 'Sukan & Rekreasi',
            ],
            [
                'nama_submodul' => 'Matematik',
            ],
        ];

        DB::table('submodul_kursuses')->insert($submodul);
    }
}
