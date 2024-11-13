<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Tambah Pencapaian Ekspor
<?= $this->endSection() ?>

<?= $this->section('head') ?>

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
.container {
    height: 128vh;
}

.form-container {
    background-color: #FFF7D4;
    width: 80%;
    margin-top: 4rem;
    margin-left: auto;
    margin-right: auto;
    padding-top: 2rem;
    padding-left: 8rem;
    padding-right: 8rem;
    padding-bottom: 9rem;
}

.form-container h1 {
    text-align: center;
}

.form {
    margin-top: 5rem;
    display: flex;
    width: 100%;
}

.form-container .form .form-left,
.form-container .form .form-right {
    width: 100%;
}

.form-container .form .form-right {
    margin-left: 8rem;
}

.form-container .form .input-form {
    margin-bottom: 1.4rem;
    display: flex;
    flex-direction: column;
}

.form-container .form .input-form-button {
    padding-top: 1.4rem;
    display: flex;
    flex-direction: row;
}

.form-container .form .input-form-button button:nth-child(2) {
    margin-left: 2rem;
}

.form-container .form .input-form-button button {
    width: 100%;
    background-color: #4C3D3D;
    margin-top: auto;
    padding-left: 1rem;
    padding-right: 1rem;
    padding-top: 0.8rem;
    padding-bottom: 0.8rem;
    font-size: 1.1rem;
    color: #FFF;
}

.form-container .form .input-form label {
    margin-bottom: 0.4rem;
    font-size: 1.1rem;
}

.form-container .form .input-form input {
    border-radius: 0.6rem;
    font-size: 1.1rem;
    padding: 0.6rem;
    padding-left: 0.8rem;
    background-color: #FFF7D4;
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

@media only screen and (max-width: 600px) {
    .form {
        display: flex;
        flex-direction: column;
    }

    .form-container .form .form-right {
        margin-left: 0;
    }

    .form-container {
        padding-left: 2rem;
        padding-right: 2rem;
    }
}
</style>

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
                    <button type="button" onclick="window.history.back();">Kembali</button>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>