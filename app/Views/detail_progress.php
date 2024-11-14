<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Detail Pencapaian Ekspor
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="form-container">
        <h1>Tambah Pencapaian Ekspor</h1>
        <form class="form" action="/progress/tambah">
            <div class="form-left">
                <div class="input-form">
                    <label for="tanggal_ekspor">Tanggal Ekspor</label>
                    <input type="text" id="tanggal_ekspor" name="tanggal">
                </div>
                <div class="input-form">
                    <label for="negara_ekspor">Negara Ekspor</label>
                    <input type="text" id="negara_ekspor" name="negara">
                </div>
                <div class="input-form">
                    <label for="jenis_ekspor">Jenis Ekspor</label>
                    <input type="text" id="jenis_ekspor" name="jenis">
                </div>
                <div class="input-form">
                    <label for="produk_ekspor">Produk Ekspor</label>
                    <input type="text" id="produk_ekspor" name="produk">
                </div>
                <div class="input-form">
                    <label for="nama_importir">Nama Importir</label>
                    <input type="text" id="nama_importir" name="nama_importir">
                </div>
            </div>
            <div class="form-right">
                <div class="input-form">
                    <label for="nilai_ekspor_rp">Nilai Ekspor (Rp)</label>
                    <input type="number" id="nilai_ekspor_rp" name="nilai_ekspor_rp">
                </div>
                <div class="input-form">
                    <label for="nilai_ekspor_usd">Nilai Ekspor (USD)</label>
                    <input type="number" id="nilai_ekspor_usd" name="nilai_ekspor_usd">
                </div>
                <div class="input-form">
                    <label for="kuantitas_ekspor">Kuantitas Ekspor</label>
                    <input type="text" id="kuantitas_ekspor" name="kuantitas">
                </div>
                <div class="input-form">
                    <label for="bukti_ekspor">Bukti Ekspor</label>
                    <input type="text" id="bukti_ekspor" name="bukti">
                </div>
                <div class="input-form-button">
                    <a href="/progress">Kembali</a>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>