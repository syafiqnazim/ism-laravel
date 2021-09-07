<?php

namespace Database\Seeders;

use App\Models\Penceramah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            KursusSeeder::class,
            PenceramahSeeder::class,
            AsramaSeeder::class,
        ]);
    }
}
