<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProgressSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => 1,
            'id_perusahaan' => 1,
            'tanggal_ekspor' => '2024-11-15',
            'nilai_ekspor_rp' => 15000.00,
            'nilai_ekspor_usd' => 1.00,
            'negara_ekspor' => 'Ngawi Nation',
            'jenis_ekspor' => 'ndatau',
            'kuantitas_ekspor' => 30.00,
            'produk_ekspor' => 'cengkeh',
            'bukti_ekspor' => 'cihuy paling png',
            'nama_importir' => 'Saputro'
        ];

        // Masukkan data ke dalam tabel 'progress'
        $this->db->table('progress')->insert($data);
    }
}
