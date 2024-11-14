<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => 1,
            'nama_peserta' => 'tooseen',
            'nama_perusahaan' => 'Tooseen.Corp',
            'jenis_perusahaan' => 'Mandiri Cihuy',
            'alamat' => 'Jl, martorejo no.98',
            'telp' => '081931063809',
            'pelatihan_mulai' => '2024-11-13',
            'pelatihan_selesai' => '2024-11-14'
        ];

        // Masukkan data ke dalam tabel 'perusahaan'
        $this->db->table('perusahaan')->insert($data);
    }
}
