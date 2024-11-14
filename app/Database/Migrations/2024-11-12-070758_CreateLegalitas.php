<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLegalitas extends Migration
{
    public function up()
    {
        // Tabel legalitas
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'legalitas_sebelum' => [
                'type' => 'TEXT'
            ],
            'legalitas_setelah' => [
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
        $this->forge->createTable('legalitas');
    }

    public function down()
    {
        $this->forge->dropTable('legalitas');
    }
}