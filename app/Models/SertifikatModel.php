<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatModel extends Model
{
    protected $table      = 'sertifikat';     // Nama tabel
    protected $primaryKey = 'id_perusahaan';  // Kolom primary key
    
    // Kolom yang boleh diisi (fillable)
    protected $allowedFields = [
        'id_perusahaan',
        'sertifikat_awal',
        'sertifikat_akhir',
        'created_at',
        'updated_at'
    ];

    // Tanggal yang akan otomatis diatur
    protected $useTimestamps = true; // Untuk mengaktifkan fitur created_at dan updated_at
    
    // Menambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'id_perusahaan'     => 'required|is_natural_no_zero',
        'sertifikat_awal'   => 'permit_empty|string',
        'sertifikat_akhir'  => 'permit_empty|string',
        'created_at'         => 'valid_date',
        'updated_at'         => 'valid_date'
    ];

    // Pesan kesalahan untuk validasi
    protected $validationMessages = [
        'id_perusahaan' => [
            'required' => 'ID perusahaan harus diisi.',
            'is_natural_no_zero' => 'ID perusahaan harus berupa angka yang valid.'
        ],
        'sertifikat_awal' => [
            'string' => 'Sertifikat awal harus berupa teks.'
        ],
        'sertifikat_akhir' => [
            'string' => 'Sertifikat akhir harus berupa teks.'
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
        return $this->join('perusahaan', 'perusahaan.id = sertifikat.id_perusahaan')
                    ->select('perusahaan.*, sertifikat.*')
                    ->findAll();
    }
}
