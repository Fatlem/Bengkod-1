<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Dr. Budi Santoso',
                'email' => 'doctor1@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Kebon Jeruk No. 1, Jakarta',
                'no_hp' => '081234567890',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aisyah',
                'email' => 'patient1@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Raya No. 10, Jakarta',
                'no_hp' => '082345678901',
                'role' => 'pasien',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Siti Nurbaya',
                'email' => 'doctor2@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Sutan Syahrir No. 2, Bandung',
                'no_hp' => '083456789012',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahmad Fauzi',
                'email' => 'patient2@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Merdeka No. 15, Surabaya',
                'no_hp' => '084567890123',
                'role' => 'pasien',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dr. Rudi Hartono',
                'email' => 'doctor3@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'alamat' => 'Jl. Pahlawan No. 5, Yogyakarta',
                'no_hp' => '085678901234',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
