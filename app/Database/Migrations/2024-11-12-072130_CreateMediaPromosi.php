<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMediaPromosi extends Migration
{
    public function up()
    {
        // Tabel media promosi
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'media_sebelum' => [
                'type' => 'TEXT'
            ],
            'media_setelah' => [
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
        $this->forge->createTable('media_promosi');
    }

    public function down()
    {
        $this->forge->dropTable('media_promosi');
    }
}