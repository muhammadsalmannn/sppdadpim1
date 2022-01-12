<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\SuratSeeder;
use Database\Seeders\JabatanSeeder;
use Database\Seeders\PangkatSeeder;
use Database\Seeders\PegawaiSeeder;
use Database\Seeders\KendaraanSeeder;
use Database\Seeders\PerjalananSeeder;
use Database\Seeders\PengikutSeeder;

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
            UserSeeder::class,
            JabatanSeeder::class,
            PangkatSeeder::class,
            // PengikutSeeder::class,
            // PegawaiSeeder::class,
            // PerjalananSeeder::class,
            // SuratSeeder::class,
            KendaraanSeeder::class,
        ]);
    }
}