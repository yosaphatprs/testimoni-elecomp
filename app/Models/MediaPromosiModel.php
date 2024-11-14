<?php

namespace App\Models;

use CodeIgniter\Model;

class MediaPromosiModel extends Model
{
    protected $table      = 'media_promosi';  // Nama tabel
    protected $primaryKey = 'id_perusahaan';  // Kolom primary key
    
    // Kolom yang boleh diisi (fillable)
    protected $allowedFields = [
        'id_perusahaan',
        'media_sebelum',
        'media_setelah',
        'created_at',
        'updated_at'
    ];

    // Tanggal yang akan otomatis diatur
    protected $useTimestamps = true;  // Mengaktifkan fitur created_at dan updated_at
    
    // Menambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'id_perusahaan'   => 'required|is_natural_no_zero',
        'media_sebelum'   => 'permit_empty|string',
        'media_setelah'   => 'permit_empty|string',
        'created_at'      => 'valid_date',
        'updated_at'      => 'valid_date'
    ];

    // Pesan kesalahan untuk validasi
    protected $validationMessages = [
        'id_perusahaan' => [
            'required' => 'ID perusahaan harus diisi.',
            'is_natural_no_zero' => 'ID perusahaan harus berupa angka yang valid.'
        ],
        'media_sebelum' => [
            'string' => 'Media promosi sebelumnya harus berupa teks.'
        ],
        'media_setelah' => [
            'string' => 'Media promosi setelahnya harus berupa teks.'
        ],
        'created_at' => [
            'valid_date' => 'Tanggal dibuat tidak valid.'
        ],
        'updated_at' => [
            'valid_date' => 'Tanggal diperbarui tidak valid.'
        ]
    ];

    // Menambahkan pengaturan untuk menghandle waktu secara otomatis
    protected $useSoftDeletes = false;  // Jika ingin soft delete, atur menjadi true
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Menambahkan relasi ke tabel perusahaan jika diperlukan
    public function getPerusahaan()
    {
        return $this->join('perusahaan', 'perusahaan.id = media_promosi.id_perusahaan')
                    ->select('perusahaan.*, media_promosi.*')
                    ->findAll();
    }
}
