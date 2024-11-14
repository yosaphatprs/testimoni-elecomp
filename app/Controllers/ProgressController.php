<?php

namespace App\Controllers;
use App\Models\ProgressModel;

class ProgressController extends BaseController
{
    public function index(): string
    {
        $model = new ProgressModel();
        $data['progress'] = $model->findAll();
        return view('dashboard_progress', $data);
    }

    public function add(): string
    {
        return view('add_progress');
    }

    public function edit($id): string
    {
                // Membuat instance dari model ProgressModel
                $model = new ProgressModel();
        
                // Mengambil data berdasarkan ID
                $data['progress'] = $model->find($id);  // Mengambil satu data berdasarkan ID
                
                // Pastikan data ditemukan, jika tidak, tampilkan error atau redirect
                if (empty($data['progress'])) {
                    throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan.");
                }
        return view('edit_progress',$data);
    }

    public function detail($id): string
    {
        $model = new ProgressModel();
        
        // Mengambil data berdasarkan ID
        $data['progress'] = $model->find($id);  // Mengambil satu data berdasarkan ID
        
        // Pastikan data ditemukan, jika tidak, tampilkan error atau redirect
        if (empty($data['progress'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Data tidak ditemukan.");
        }
        return view('detail_progress',$data);
    }
    public function update($id)
    {
        // Update data berdasarkan ID
        $model = new ProgressModel();
        
        $data = [
            'tanggal_ekspor' => $this->request->getPost('tanggal'),
            'negara_ekspor' => $this->request->getPost('negara'),
            'jenis_ekspor' => $this->request->getPost('jenis'),
            'produk_ekspor' => $this->request->getPost('produk'),
            'nama_importir' => $this->request->getPost('nama_importir'),
            'nilai_ekspor_rp' => $this->request->getPost('nilai_ekspor_rp'),
            'nilai_ekspor_usd' => $this->request->getPost('nilai_ekspor_usd'),
            'kuantitas_ekspor' => $this->request->getPost('kuantitas'),
            'bukti_ekspor' => $this->request->getPost('bukti')
        ];
        
        // Lakukan update berdasarkan ID
        $model->update($id, $data);

        // Redirect setelah update
        return redirect()->to('/progress');
    }
}