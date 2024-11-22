<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';     // Nama tabel
    protected $primaryKey = 'id_perusahaan'; // Kolom primary key
    
    // Kolom yang boleh diisi (fillable)
    protected $allowedFields = [
        'id_perusahaan',
        'produk_sebelum',
        'produk_setelah',
        'created_at',
        'updated_at'
    ];

    // Tanggal yang akan otomatis diatur
    protected $useTimestamps = true; // Untuk mengaktifkan fitur created_at dan updated_at
    
    // Jika kamu ingin mengatur format tanggal secara manual
    // protected $dateFormat = 'datetime';  // defaultnya adalah datetime

    // Menambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'id_perusahaan'    => 'required|is_natural_no_zero',
        'produk_sebelum'   => 'permit_empty|string',
        'produk_setelah'   => 'permit_empty|string',
        'created_at'        => 'valid_date',
        'updated_at'        => 'valid_date'
    ];

    // Pesan kesalahan untuk validasi
    protected $validationMessages = [
        'id_perusahaan' => [
            'required' => 'ID perusahaan harus diisi.',
            'is_natural_no_zero' => 'ID perusahaan harus berupa angka yang valid.'
        ],
        'produk_sebelum' => [
            'string' => 'Produk sebelum harus berupa teks.'
        ],
        'produk_setelah' => [
            'string' => 'Produk setelah harus berupa teks.'
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
        return $this->join('perusahaan', 'perusahaan.id = produk.id_perusahaan')
                    ->select('perusahaan.*, produk.*')
                    ->findAll();
    }

    public function getProdukById($id_perusahaan)
    {
        return $this->select('produk_sebelum, produk_setelah') // Ambil kedua gambar
                    ->where('id_perusahaan', $id_perusahaan)
                    ->first(); // Mengambil satu data berdasarkan id_perusahaan
    }
}
