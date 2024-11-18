<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTbPencapaianEkspor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pencapaian_ekspor' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_perusahaan' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'tgl_ekspor' => [
                'type' => 'DATE',
            ],
            'negara_ekspor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nilai_rp_ekspor' => [
                'type' => 'DOUBLE',
            ],
            'nilai_usd_ekspor' => [
                'type' => 'DOUBLE',
            ],
            'kuantitas_ekspor' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'produk_ekspor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'bukti_ekspor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_importir' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenis_ekspor' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_pencapaian_ekspor', true);
        $this->forge->addForeignKey('id_perusahaan', 'tb_data_perusahaan', 'id_perusahaan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tb_pencapaian_ekspor');
    }

    public function down()
    {
        $result = $this->db->query("SHOW TABLES LIKE 'tb_pencapaian_ekspor'")->getResult();

        if (!empty($result)) {
            $this->forge->dropTable('tb_pencapaian_ekspor');
        }
    }
}