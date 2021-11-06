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
                'objektif_kursus' => 'Memupuk Kesedaran 1',
                'kursus_id' => '1',
            ],
            [
                'objektif_kursus' => 'Bijak Berbelanja 2',
                'kursus_id' => '2',
            ],
            [
                'objektif_kursus' => 'Sihat Badan 3',
                'kursus_id' => '3',
            ],
            [
                'objektif_kursus' => 'Teguh Jati Diri 4',
                'kursus_id' => '4',
            ],
            [
                'objektif_kursus' => 'Bebas Hutang 5',
                'kursus_id' => '5',
            ],
        ];

        DB::table('objektif_kursuses')->insert($objektif_kursus);
    }
}
