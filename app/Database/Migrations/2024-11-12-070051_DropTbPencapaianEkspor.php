<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropTbPencapaianEkspor extends Migration
{
    public function up()
    {
        $result = $this->db->query("SHOW TABLES LIKE 'tb_pencapaian_ekspor'")->getResult();

        if (!empty($result)) {
            $this->forge->dropTable('tb_pencapaian_ekspor');
        }
    }

    public function down()
    {
        //
    }
}