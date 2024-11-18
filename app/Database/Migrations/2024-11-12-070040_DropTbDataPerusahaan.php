<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropTbDataPerusahaan extends Migration
{
    public function up()
    {
        $result = $this->db->query("SHOW TABLES LIKE 'tb_data_perusahaan'")->getResult();

        if (!empty($result)) {
            $this->forge->dropTable('tb_data_perusahaan');
        }
    }

    public function down()
    {
        //
    }
}