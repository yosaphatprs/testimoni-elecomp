<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableSertifikatAddAutoIncrement extends Migration
{
    public function up()
    {
        $this->forge->modifyColumn('sertifikat', [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ]
        ]);
    }

    public function down()
    {
        //
    }
}