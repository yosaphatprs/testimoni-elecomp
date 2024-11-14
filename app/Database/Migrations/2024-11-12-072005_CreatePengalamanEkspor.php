<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengalamanEkspor extends Migration
{
    public function up()
    {
        // Tabel pengalaman ekspor
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'ekspor_sebelum' => [
                'type' => 'TEXT'
            ],
            'ekspor_setelah' => [
                'type' => 'TEXT'
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
        $this->forge->addForeignKey('id_perusahaan', 'perusahaan', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pengalaman_ekspor');
    }

    public function down()
    {
        $this->forge->dropTable('pengalaman_ekspor');
    }
}