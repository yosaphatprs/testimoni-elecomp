<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgressModel extends Model
{
    protected $table      = 'progress';     // Nama tabel
    protected $primaryKey = 'id';           // Kolom primary key
    
    // Kolom yang boleh diisi (fillable)
    protected $allowedFields = [
        'id_perusahaan',
        'tanggal_ekspor',
        'nilai_ekspor_rp',
        'nilai_ekspor_usd',
        'negara_ekspor',
        'jenis_ekspor',
        'kuantitas_ekspor',
        'produk_ekspor',
        'bukti_ekspor',
        'nama_importir',
        'created_at',
        'updated_at'
    ];

    // Tanggal yang akan otomatis diatur
    protected $useTimestamps = true; // Untuk mengaktifkan fitur created_at dan updated_at
    
    // Jika kamu ingin mengatur format tanggal secara manual
    // protected $dateFormat = 'datetime';  // defaultnya adalah datetime

    // Menambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'id_perusahaan'       => 'required|is_natural_no_zero',
        'tanggal_ekspor'      => 'required|valid_date',
        'nilai_ekspor_rp'     => 'required|decimal',
        'nilai_ekspor_usd'    => 'required|decimal',
        'negara_ekspor'       => 'required|max_length[100]',
        'jenis_ekspor'        => 'required|max_length[50]',
        'kuantitas_ekspor'    => 'required|decimal',
        'produk_ekspor'       => 'required|string',
        'bukti_ekspor'        => 'required|string',
        'nama_importir'       => 'required|max_length[255]',
        'created_at'          => 'valid_date',
        'updated_at'          => 'valid_date'
    ];

    // Pesan kesalahan untuk validasi
    protected $validationMessages = [
        'id_perusahaan' => [
            'required' => 'ID perusahaan harus diisi.',
            'is_natural_no_zero' => 'ID perusahaan harus berupa angka yang valid.'
        ],
        'tanggal_ekspor' => [
            'valid_date' => 'Tanggal ekspor harus berupa tanggal yang valid.'
        ],
        'nilai_ekspor_rp' => [
            'decimal' => 'Nilai ekspor (IDR) harus berupa angka desimal.'
        ],
        'nilai_ekspor_usd' => [
            'decimal' => 'Nilai ekspor (USD) harus berupa angka desimal.'
        ],
        'negara_ekspor' => [
            'max_length' => 'Negara ekspor maksimal 100 karakter.'
        ],
        'jenis_ekspor' => [
            'max_length' => 'Jenis ekspor maksimal 50 karakter.'
        ],
        'kuantitas_ekspor' => [
            'decimal' => 'Kuantitas ekspor harus berupa angka desimal.'
        ],
        'produk_ekspor' => [
            'string' => 'Produk ekspor harus berupa teks.'
        ],
        'bukti_ekspor' => [
            'string' => 'Bukti ekspor harus berupa teks.'
        ],
        'nama_importir' => [
            'max_length' => 'Nama importir maksimal 255 karakter.'
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
        return $this->join('perusahaan', 'perusahaan.id = progress.id_perusahaan')
                    ->select('perusahaan.*, progress.*')
                    ->findAll();
    }
}
