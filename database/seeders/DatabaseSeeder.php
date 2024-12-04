<?php

namespace Database\Seeders;

use App\Models\Khs;
use App\Models\Matakuliah;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            RuangSeeder::class,
            JadwalSeeder::class,
            DosenSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
            KhsSeeder::class,
            IrsSeeder::class,
            MahasiswaIrsSeeder::class
        ]);
    }
}
