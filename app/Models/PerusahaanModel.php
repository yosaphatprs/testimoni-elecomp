<?php

namespace App\Models;

use CodeIgniter\Model;

class PerusahaanModel extends Model
{
    protected $table      = 'perusahaan';  // Nama tabel
    protected $primaryKey = 'id';         // Kolom primary key
    
    // Kolom yang boleh diisi (fillable)
    protected $allowedFields = [
        'nama_peserta',
        'nama_perusahaan',
        'jenis_perusahaan',
        'alamat',
        'telp',
        'pelatihan_mulai',
        'pelatihan_selesai',
        'created_at',
        'updated_at'
    ];
    
    // Tanggal yang akan otomatis diatur
    protected $useTimestamps = true; // Untuk mengaktifkan fitur created_at dan updated_at
    
    // Jika kamu ingin mengatur format tanggal secara manual
    // protected $dateFormat = 'datetime';  // defaultnya adalah datetime

    // Menambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'nama_peserta'       => 'required|min_length[3]|max_length[255]',
        'nama_perusahaan'    => 'required|min_length[3]|max_length[255]',
        'jenis_perusahaan'   => 'required|min_length[3]|max_length[100]',
        'alamat'             => 'required',
        'telp'               => 'required|min_length[10]|max_length[15]',
        'pelatihan_mulai'    => 'required|valid_date',
        'pelatihan_selesai'  => 'required|valid_date'
    ];

    // Pesan kesalahan untuk validasi
    protected $validationMessages = [
        'nama_peserta' => [
            'required' => 'Nama peserta harus diisi.',
            'min_length' => 'Nama peserta minimal 3 karakter.',
            'max_length' => 'Nama peserta maksimal 255 karakter.'
        ],
        'nama_perusahaan' => [
            'required' => 'Nama perusahaan harus diisi.',
            'min_length' => 'Nama perusahaan minimal 3 karakter.',
            'max_length' => 'Nama perusahaan maksimal 255 karakter.'
        ],
        'jenis_perusahaan' => [
            'required' => 'Jenis perusahaan harus diisi.',
            'min_length' => 'Jenis perusahaan minimal 3 karakter.',
            'max_length' => 'Jenis perusahaan maksimal 100 karakter.'
        ],
        'alamat' => [
            'required' => 'Alamat perusahaan harus diisi.'
        ],
        'telp' => [
            'required' => 'Nomor telepon harus diisi.',
            'min_length' => 'Nomor telepon minimal 10 karakter.',
            'max_length' => 'Nomor telepon maksimal 15 karakter.'
        ],
        'pelatihan_mulai' => [
            'required' => 'Tanggal mulai pelatihan harus diisi.',
            'valid_date' => 'Tanggal mulai pelatihan tidak valid.'
        ],
        'pelatihan_selesai' => [
            'required' => 'Tanggal selesai pelatihan harus diisi.',
            'valid_date' => 'Tanggal selesai pelatihan tidak valid.'
        ]
    ];

    // Menambahkan pengaturan untuk menghandle waktu secara otomatis
    protected $useSoftDeletes = false; // Jika ingin soft delete, atur menjadi true
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
