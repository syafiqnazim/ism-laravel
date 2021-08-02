<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Pentadbir Sistem'],
            ['name' => 'Urusetia Kursus'],
            ['name' => 'Pegawai ISM'],
            ['name' => 'Urusetia Tempahan'],
            ['name' => 'Pentadbir Aset']
        ];

        DB::table('roles')->insert($roles);
    }
}
