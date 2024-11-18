<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableSertifikat extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('sertifikat', ['sertifikat_awal', 'sertifikat_akhir']);

        $this->forge->addColumn('sertifikat', [
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'first'          => true,
                'null'           => false
            ],
            'sertifikat' => [
                'type'       => 'TEXT',
                'null'       => false,
                'after'      => 'id_perusahaan'
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['lama', 'baru'],
                'default'    => 'baru',
                'after'      => 'sertifikat'
            ]
        ]);

        $this->db->query('ALTER TABLE `sertifikat` ADD PRIMARY KEY(`id`)');
    }

    public function down()
    {
        //
    }
}