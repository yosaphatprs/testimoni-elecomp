<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSosialMedia extends Migration
{
    public function up()
    {
        // Tabel sosial_media
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'ig' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'twitter' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'facebook' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'tikTok' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
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
        $this->forge->createTable('sosial_media');
    }

    public function down()
    {
        $this->forge->dropTable('sosial_media');
    }
}