<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\DetailPeriksa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memangil data seeder untuk tabel
        $this->call(UsersTableSeeder::class);
        $this->call(ObatTableSeeder::class);
        $this->call(PeriksaTableSeeder::class);
        $this->call(DetailPeriksa::class);
    }
}
