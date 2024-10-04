<?php
namespace App\Models;
use CodeIgniter\Model;

class PerusahaanModel extends Model{
    protected $table = 'tb_data_perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'id_perusahaan',
        'id_peserta',
        'Legalitas_before',
        'Legalitas_after',
        'Produk_before',
        'Produk_after',
        'Sertifikasi_before',
        'Sertifikasi_after', 
        'Pengalaman_pameran_before',
        'Pengalaman_pameran_after',
        'Pengalaman_ekspor_before',
        'Media_promosi_before',
        'Media_promosi_after',
        'Awal_pembinaan',
        'Akhir_pembinaan'
    ];


}