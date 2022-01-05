<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $klusters = [
            [
                'id'    =>  1,
                'name'  =>  'Professional Development'
            ],
            [
                'id'    =>  2,
                'name'  =>  'Social Development'
            ],
            [
                'id'    =>  3,
                'name'  =>  'Volunteerism & Social Entrepreneurship'
            ],
            [
                'id'    =>  4,
                'name'  =>  'Capacity & Gender Development'
            ],
            [
                'id'    =>  5,
                'name'  =>  'Research & Development'
            ],
            [
                'id'    =>  6,
                'name'  =>  'Administration and Human Resources Units'
            ],
            [
                'id'    =>  7,
                'name'  =>  'Finance Units'
            ],
            [
                'id'    =>  8,
                'name'  =>  'Domestic and Maintenance Units'
            ],
            [
                'id'    =>  9,
                'name'  =>  'Library and Documentation Centre'
            ],
            [
                'id'    =>  10,
                'name'  =>  'Information Technology Units'
            ],
        ];
        DB::table('klusters')->insert($klusters);
    }
}
