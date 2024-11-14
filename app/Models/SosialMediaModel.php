<?php

namespace App\Models;

use CodeIgniter\Model;

class SosialMediaModel extends Model
{
    protected $table      = 'sosial_media';  // Nama tabel
    protected $primaryKey = 'id_perusahaan'; // Kolom primary key
    
    // Kolom yang boleh diisi (fillable)
    protected $allowedFields = [
        'id_perusahaan',
        'ig',
        'twitter',
        'facebook',
        'tikTok',
        'created_at',
        'updated_at'
    ];

    // Tanggal yang akan otomatis diatur
    protected $useTimestamps = true; // Untuk mengaktifkan fitur created_at dan updated_at
    
    // Jika kamu ingin mengatur format tanggal secara manual
    // protected $dateFormat = 'datetime';  // defaultnya adalah datetime

    // Menambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'id_perusahaan' => 'required|is_natural_no_zero',
        'ig'            => 'permit_empty|max_length[100]',
        'twitter'       => 'permit_empty|max_length[100]',
        'facebook'      => 'permit_empty|max_length[100]',
        'tikTok'        => 'permit_empty|max_length[100]',
        'created_at'    => 'valid_date',
        'updated_at'    => 'valid_date'
    ];

    // Pesan kesalahan untuk validasi
    protected $validationMessages = [
        'id_perusahaan' => [
            'required' => 'ID perusahaan harus diisi.',
            'is_natural_no_zero' => 'ID perusahaan harus berupa angka yang valid.'
        ],
        'ig' => [
            'max_length' => 'Instagram maksimal 100 karakter.'
        ],
        'twitter' => [
            'max_length' => 'Twitter maksimal 100 karakter.'
        ],
        'facebook' => [
            'max_length' => 'Facebook maksimal 100 karakter.'
        ],
        'tikTok' => [
            'max_length' => 'TikTok maksimal 100 karakter.'
        ],
        'created_at' => [
            'valid_date' => 'Tanggal dibuat tidak valid.'
        ],
        'updated_at' => [
            'valid_date' => 'Tanggal diperbarui tidak valid.'
        ]
    ];

    // Menambahkan pengaturan untuk menghandle waktu secara otomatis
    protected $useSoftDeletes = false; // Jika ingin soft delete, atur menjadi true
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Menambahkan relasi ke tabel perusahaan jika diperlukan
    public function getPerusahaan()
    {
        return $this->join('perusahaan', 'perusahaan.id = sosial_media.id_perusahaan')
                    ->select('perusahaan.*, sosial_media.*')
                    ->findAll();
    }
}
