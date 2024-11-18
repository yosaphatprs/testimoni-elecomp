<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbDataPerusahaan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_perusahaan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Nama_perusahaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Alamat_perusahaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Nama_peserta' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Legalitas_before' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Legalitas_after' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Produk_before' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Produk_after' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Sertifikasi_before' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Sertifikasi_after' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Pengalaman_pameran_before' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Pengalaman_pameran_after' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Pengalaman_ekspor_before' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Media_promosi_before' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Media_promosi_after' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Awal_pembinaan' => [
                'type' => 'DATE',
            ],
            'Akhir_pembinaan' => [
                'type' => 'DATE',
            ],
        ]);
        $this->forge->addKey('id_perusahaan', true);
        $this->forge->createTable('tb_data_perusahaan');
    }

    public function down()
    {
        if (!empty($result)) {
            $this->forge->dropTable('tb_data_perusahaan');
        }
    }
}