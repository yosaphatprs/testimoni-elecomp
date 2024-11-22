<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\LegalitasModel;
use App\Models\SertifikatModel;

class ProfileController extends BaseController
{
    public function index(): string
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->getProdukById(1); // Misalnya ambil produk untuk id_perusahaan = 1

        $legalitasModel = new LegalitasModel();
        $legalitas = $legalitasModel->getLegalitasById(1); // Ambil data legalitas untuk id_perusahaan = 1

        $sertifikatModel = new SertifikatModel();
        $sertifikat = $sertifikatModel->find(1); // Ambil data sertifikat untuk id_perusahaan = 1

        // Kirimkan data ke view
        return view('profile', [
            'produkSebelum' => $produk['produk_sebelum'],
            'produkSetelah' => $produk['produk_setelah'],
            'legalitasSebelum' => $legalitas['legalitas_sebelum'],
            'legalitasSetelah' => $legalitas['legalitas_setelah'],
            'sertifikatAwal' => $sertifikat['sertifikat_awal'] ?? null,
            'sertifikatAkhir' => $sertifikat['sertifikat_akhir'] ?? null,
        ]);
    }

    public function edit(): string
    {
        return view('editProfile');
    }
}
