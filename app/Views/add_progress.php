<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Tambah Pencapaian Ekspor
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
<script>
$(function() {
    $("#tanggal_ekspor").datepicker({
        dateFormat: 'dd/mm/yy'
    });
});
</script>
<style>
.form-container {
    background-color: #FFF7D4;
}

.form-container .form input {
    background-color: #FFF7D4;
}

.form-container .btn-primary {
    background-color: #4C3D3D;
    width: 45%;
}

@media (max-width: 576px) {
    .form-container .btn-primary {
        width: 100%;
    }
}

/* Remove Up and Down Arrow */
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    appearance: textfield;
    -moz-appearance: textfield;
}
</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container px-md-0 px-4">
    <div class="form-container mt-5 px-5 py-5">
        <h1 class="text-center">Tambah Pencapaian Ekspor</h1>
        <form class="form row px-md-5 mt-5" action="/progress/edit">
            <div class="col-md px-5">
                <div class="input-form mb-3">
                    <label class="form-label" for="tanggal_ekspor">Tanggal Ekspor</label>
                    <input class="form-control border border-dark border-2" type="text" id="tanggal_ekspor"
                        name="tanggal">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="negara_ekspor">Negara Ekspor</label>
                    <input class="form-control border border-dark border-2" type="text" id="negara_ekspor"
                        name="negara">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="jenis_ekspor">Jenis Ekspor</label>
                    <input class="form-control border border-dark border-2" type="text" id="jenis_ekspor" name="jenis">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="produk_ekspor">Produk Ekspor</label>
                    <input class="form-control border border-dark border-2" type="text" id="produk_ekspor"
                        name="produk">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="nama_importir">Nama Importir</label>
                    <input class="form-control border border-dark border-2" type="text" id="nama_importir"
                        name="nama_importir">
                </div>
            </div>
            <div class="col-md px-5">
                <div class="input-form mb-3">
                    <label class="form-label" for="nilai_ekspor_rp">Nilai Ekspor (Rp)</label>
                    <input class="form-control border border-dark border-2" type="number" id="nilai_ekspor_rp"
                        name="nilai_ekspor_rp">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="nilai_ekspor_usd">Nilai Ekspor (USD)</label>
                    <input class="form-control border border-dark border-2" type="number" id="nilai_ekspor_usd"
                        name="nilai_ekspor_usd">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="kuantitas_ekspor">Kuantitas Ekspor</label>
                    <input class="form-control border border-dark border-2" type="text" id="kuantitas_ekspor"
                        name="kuantitas">
                </div>
                <div class="input-form mb-3">
                    <label class="form-label" for="bukti_ekspor">Bukti Ekspor</label>
                    <input class="form-control border border-dark border-2" type="text" id="bukti_ekspor" name="bukti">
                </div>
                <div
                    class="input-form mb-3 d-flex flex-md-row flex-column justify-content-between align-items-center mt-5">
                    <a class="btn btn-primary border border-dark border-2" href="/progress">Kembali</a>
                    <button class="btn btn-primary border border-dark border-2 mt-md-0 mt-3"
                        type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>