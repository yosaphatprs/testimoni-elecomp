<?php
namespace App\Models;
use CodeIgniter\Model;

class PencapaianEksporModel extends Model{
    protected $table = 'tb_pencapaian_ekspor';
    protected $primaryKey = 'id_pencapaian_ekspor';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'id_pencapaian_ekspor',
        'id_perusahaan',
        'tgl_ekspor',
        'negara_ekspor',
        'nilai_rp_ekspor',
        'nilai_usd_ekspor',
        'kuantitas_ekspor',
        'produk_ekspor',
        'bukti_ekspor',
        'nama_importir',
        'jenis_ekspor'
    ];


}