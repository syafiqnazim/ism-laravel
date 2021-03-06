<?php

namespace Database\Seeders;

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
            PenyelenggaraanSeeder::class,
            TempahanKenderaanSeeder::class,
            SenaraiPemanduSeeder::class,
            SenaraiKenderaanSeeder::class,
            PengurusanIctSeeder::class,
            ObjektifKursusSeeder::class,
            SubmodulKursusSeeder::class,
            KlusterSeeder::class,
        ]);
    }
}
