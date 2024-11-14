<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePerusahaan extends Migration
{
    public function up()
    {
        // Tabel perusahaan
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_peserta' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'nama_perusahaan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'jenis_perusahaan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'telp' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
            'pelatihan_mulai' => [
                'type' => 'DATE'
            ],
            'pelatihan_selesai' => [
                'type' => 'DATE'
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
        $this->forge->createTable('perusahaan');
    }

    public function down()
    {
        $this->forge->dropTable('perusahaan');
    }
}