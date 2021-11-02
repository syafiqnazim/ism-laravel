<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjektifKursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objektif_kursus = [
            [
                'objektif_kursus' => 'Memupuk Kesedaran',
            ],
            [
                'objektif_kursus' => 'Bijak Berbelanja',
            ],
            [
                'objektif_kursus' => 'Sihat Badan',
            ],
            [
                'objektif_kursus' => 'Teguh Jati Diri',
            ],
            [
                'objektif_kursus' => 'Bebas Hutang',
            ],
        ];

        DB::table('objektif_kursuses')->insert($objektif_kursus);
    }
}
