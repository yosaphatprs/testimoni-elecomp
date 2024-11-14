<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropTbPencapaianEkspor extends Migration
{
    public function up()
    {
        $this->forge->dropTable('tb_pencapaian_ekspor');
    }

    public function down()
    {
        //
    }
}