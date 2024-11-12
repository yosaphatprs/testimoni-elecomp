<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgress extends Migration
{
    public function up()
    {
        // Tabel progress
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true
            ],
            'tanggal_ekspor' => [
                'type' => 'DATE'
            ],
            'nilai_ekspor_rp' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2'
            ],
            'nilai_ekspor_usd' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2'
            ],
            'negara_ekspor' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'jenis_ekspor' => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'kuantitas_ekspor' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2'
            ],
            'produk_ekspor' => [
                'type' => 'TEXT'
            ],
            'bukti_ekspor' => [
                'type' => 'TEXT'
            ],
            'nama_importir' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                null => true
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                null => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_perusahaan', 'perusahaan', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('progress');
    }

    public function down()
    {
        $this->forge->dropTable('progress');
    }
}