<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Pentadbir Sistem', 'position' => 'Testing', 'ic_number' => 'Testing', 'phone_number' => 'Testing', 'department' => 'Testing', 'email' => 'sistem@test.com', 'password' => Hash::make('password'), 'role_id' => 1],
            ['name' => 'Urusetia Kursus', 'position' => 'Testing', 'ic_number' => 'Testing', 'phone_number' => 'Testing', 'department' => 'Testing', 'email' => 'kursus@test.com', 'password' => Hash::make('password'), 'role_id' => 2],
            ['name' => 'Pegawai ISM', 'position' => 'Testing', 'ic_number' => 'Testing', 'phone_number' => 'Testing', 'department' => 'Testing', 'email' => 'pegawai@test.com', 'password' => Hash::make('password'), 'role_id' => 3],
            ['name' => 'Urusetia Tempahan', 'position' => 'Testing', 'ic_number' => 'Testing', 'phone_number' => 'Testing', 'department' => 'Testing', 'email' => 'tempahan@test.com', 'password' => Hash::make('password'), 'role_id' => 4],
            ['name' => 'Pentadbir Aset', 'position' => 'Testing', 'ic_number' => 'Testing', 'phone_number' => 'Testing', 'department' => 'Testing', 'email' => 'aset@test.com', 'password' => Hash::make('password'), 'role_id' => 5],
        ];

        DB::table('users')->insert($users);
    }
}
