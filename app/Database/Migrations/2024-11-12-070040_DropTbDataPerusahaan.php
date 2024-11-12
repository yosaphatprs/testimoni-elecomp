<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropTbDataPerusahaan extends Migration
{
    public function up()
    {
        $this->forge->dropTable('tb_data_perusahaan');
    }

    public function down()
    {
        //
    }
}