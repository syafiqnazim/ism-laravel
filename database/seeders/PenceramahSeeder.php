<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenceramahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penceramahs = [
            [
                'name' => 'Mohamad Sazali Shaari',
                'ic_number' => '123456121234',
                'phone_number' => '0123456789',
                'email' => 'sazali@test.com',
                'sector' => 'Kerajaan',
                'title' => 'Encik',
                'gender' => 'Lelaki',
                'bank_number' => '1234567890',
                'bank_name' => 'Maybank',
                'bank_address' => 'Taman Desa',
                'working_address' => 'Menara AIA, Kuala Lumpur',
                'home_address' => 'Sri Petaling',
                'working_number' => '0312345678',
                'home_number' => '0312345678',
                'fax_number' => '0312345678',
                'service_classified' => 'Sendiri',
                'position' => 'Pengurus',
                'grade' => '42',
                'highest_academic' => 'SPM',
                'specialisation' => 'Programming',
                'experience' => '10',
                'professional_member' => 'Tiada',
                'distribution' => 'Tiada'
            ],
            [
                'name' => 'Mohamad Sazali Shaari',
                'ic_number' => '123456121234',
                'phone_number' => '0123456789',
                'email' => 'sazali@test.com',
                'sector' => 'Kerajaan',
                'title' => 'Encik',
                'gender' => 'Lelaki',
                'bank_number' => '1234567890',
                'bank_name' => 'Maybank',
                'bank_address' => 'Taman Desa',
                'working_address' => 'Menara AIA, Kuala Lumpur',
                'home_address' => 'Sri Petaling',
                'working_number' => '0312345678',
                'home_number' => '0312345678',
                'fax_number' => '0312345678',
                'service_classified' => 'Sendiri',
                'position' => 'Pengurus',
                'grade' => '42',
                'highest_academic' => 'SPM',
                'specialisation' => 'Programming',
                'experience' => '10',
                'professional_member' => 'Tiada',
                'distribution' => 'Tiada'
            ],
            [
                'name' => 'Mohamad Sazali Shaari',
                'ic_number' => '123456121234',
                'phone_number' => '0123456789',
                'email' => 'sazali@test.com',
                'sector' => 'Kerajaan',
                'title' => 'Encik',
                'gender' => 'Lelaki',
                'bank_number' => '1234567890',
                'bank_name' => 'Maybank',
                'bank_address' => 'Taman Desa',
                'working_address' => 'Menara AIA, Kuala Lumpur',
                'home_address' => 'Sri Petaling',
                'working_number' => '0312345678',
                'home_number' => '0312345678',
                'fax_number' => '0312345678',
                'service_classified' => 'Sendiri',
                'position' => 'Pengurus',
                'grade' => '42',
                'highest_academic' => 'SPM',
                'specialisation' => 'Programming',
                'experience' => '10',
                'professional_member' => 'Tiada',
                'distribution' => 'Tiada'
            ],
            [
                'name' => 'Mohamad Sazali Shaari',
                'ic_number' => '123456121234',
                'phone_number' => '0123456789',
                'email' => 'sazali@test.com',
                'sector' => 'Kerajaan',
                'title' => 'Encik',
                'gender' => 'Lelaki',
                'bank_number' => '1234567890',
                'bank_name' => 'Maybank',
                'bank_address' => 'Taman Desa',
                'working_address' => 'Menara AIA, Kuala Lumpur',
                'home_address' => 'Sri Petaling',
                'working_number' => '0312345678',
                'home_number' => '0312345678',
                'fax_number' => '0312345678',
                'service_classified' => 'Sendiri',
                'position' => 'Pengurus',
                'grade' => '42',
                'highest_academic' => 'SPM',
                'specialisation' => 'Programming',
                'experience' => '10',
                'professional_member' => 'Tiada',
                'distribution' => 'Tiada'
            ],
            [
                'name' => 'Mohamad Sazali Shaari',
                'ic_number' => '123456121234',
                'phone_number' => '0123456789',
                'email' => 'sazali@test.com',
                'sector' => 'Kerajaan',
                'title' => 'Encik',
                'gender' => 'Lelaki',
                'bank_number' => '1234567890',
                'bank_name' => 'Maybank',
                'bank_address' => 'Taman Desa',
                'working_address' => 'Menara AIA, Kuala Lumpur',
                'home_address' => 'Sri Petaling',
                'working_number' => '0312345678',
                'home_number' => '0312345678',
                'fax_number' => '0312345678',
                'service_classified' => 'Sendiri',
                'position' => 'Pengurus',
                'grade' => '42',
                'highest_academic' => 'SPM',
                'specialisation' => 'Programming',
                'experience' => '10',
                'professional_member' => 'Tiada',
                'distribution' => 'Tiada'
            ],
        ];

        DB::table('penceramahs')->insert($penceramahs);
    }
}
