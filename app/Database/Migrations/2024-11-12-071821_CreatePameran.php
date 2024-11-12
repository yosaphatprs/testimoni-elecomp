<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePameran extends Migration
{
    public function up()
    {
        // Tabel Pameran
        $this->forge->addField([
            'id_perusahaan' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'primary'    => true
            ],
            'pameran_sebelum' => [
                'type' => 'TEXT'
            ],
            'pameran_setelah' => [
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
        $this->forge->createTable('pameran');   
    }

    public function down()
    {
        $this->forge->dropTable('pameran');
    }
}