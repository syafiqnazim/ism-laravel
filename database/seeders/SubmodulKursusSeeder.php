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
                'nama_submodul' => 'Kewangan 1',
                'kursus_id' => '1',
                'penceramah_id' => '1',
            ],
            [
                'nama_submodul' => 'Testing 1',
                'kursus_id' => '1',
                'penceramah_id' => '1',
            ],
            [
                'nama_submodul' => 'Perakaunan 2',
                'kursus_id' => '2',
                'penceramah_id' => '1',
            ],
            [
                'nama_submodul' => 'Jati Diri 3',
                'kursus_id' => '3',
                'penceramah_id' => '1',
            ],
            [
                'nama_submodul' => 'Sukan & Rekreasi 4',
                'kursus_id' => '4',
                'penceramah_id' => '1',
            ],
            [
                'nama_submodul' => 'Matematik 5',
                'kursus_id' => '5',
                'penceramah_id' => '1',
            ],
        ];

        DB::table('submodul_kursuses')->insert($submodul);
    }
}
