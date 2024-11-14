<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSertifikat extends Migration
{
    public function up()
    {
        // Tabel Sertifikat
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'sertifikat_awal' => [
                'type' => 'TEXT'
            ],
            'sertifikat_akhir' => [
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
        $this->forge->createTable('sertifikat');
    }

    public function down()
    {
        $this->forge->dropTable('sertifikat');
    }
}