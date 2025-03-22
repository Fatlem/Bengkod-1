<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PeriksaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'id_pasien' => 2,
                'id_dokter' => 1,
                'tgl_periksa' => now(),
                'catatan' => 'Pemeriksaan rutin, pasien dalam keadaan sehat.',
                'biaya_periksa' => 200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pasien' => 4,
                'id_dokter' => 3,
                'tgl_periksa' => now()->subDays(1),
                'catatan' => 'Pasien mengalami sakit kepala, diberikan obat analgesik.',
                'biaya_periksa' => 150000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pasien' => 1,
                'id_dokter' => 2,
                'tgl_periksa' => now()->subDays(2),
                'catatan' => 'Pemeriksaan mata, tidak ada masalah.',
                'biaya_periksa' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pasien' => 3,
                'id_dokter' => 5,
                'tgl_periksa' => now()->subDays(3),
                'catatan' => 'Pasien mengalami batuk berat, diberikan obat antitusif.',
                'biaya_periksa' => 180000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pasien' => 5,
                'id_dokter' => 4,
                'tgl_periksa' => now()->subDays(4),
                'catatan' => 'Pemeriksaan jantung, pasien sehat.',
                'biaya_periksa' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
