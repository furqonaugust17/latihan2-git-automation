<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            'divisi_id' => 1, // Ubah dengan ID divisi yang sesuai
            'nama_pegawai' => 'Revan Devri, S.Pd',
            'tgl_lahir' => '1990-01-15',
            'jenis_kelamin' => 'Laki-laki',
            'email' => 'revan@example.com',
            'no_tlp' => '081234567890',
            'alamat' => 'Jl. Contoh No. 123',
            'avatar' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
