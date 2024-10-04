<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_peserta';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'id_peserta',
        'nama_peserta',
        'nama_perusahaan',
        'alamat_perusahaan',
        'nomor_telepon',
        'email',
        'password'
    ];


}