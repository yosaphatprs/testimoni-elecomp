<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePembinaan extends Migration
{
    public function up()
    {
        // Tabel pembinaan
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'pembinaan_sebelum' => [
                'type' => 'TEXT'
            ],
            'pembinaan_setelah' => [
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
        $this->forge->createTable('pembinaan');
    }

    public function down()
    {
        $this->forge->dropTable('pembinaan');
    }
}