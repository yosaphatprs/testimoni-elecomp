<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Dashboard Perusahaan
<?= $this->endSection() ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* Hero Section */
    .hero-section {
        height: calc(100vh - 300px);
        background: url('<?= base_url('images/hero-dashboarduser.jpg') ?>') no-repeat center center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        text-align: center;
        color: #4C3D3D;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #FFF7D4;
        opacity: 0.3;
        z-index: 1;
    }

    .hero-section * {
        position: relative;
        z-index: 2;
    }

    .hero-text {
        max-width: 600px;
    }

    .hero-text h1 {
        font-size: 32px;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .hero-text p {
        font-size: 17px;
        margin-bottom: 30px;
    }

    .hero-text .btn {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #4C3D3D;
        color: #FFF;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
    }

    .hero-text .btn:hover {
        background-color: #3b3131;
    }



    /* Styling untuk Contact Details dan Address Details */
    .company-information {
        display: flex;
        justify-content: center;
        background-color: rgba(255, 247, 212, 0.3);
        width: 93%; 
        align-items: center;
        padding: 10px 30px;
        gap: 30px;
        border-radius: 5px;
        border: 1px solid rgba(76, 61, 61, 0.5);
        margin: 30px auto 0;
    }

    /* Styling for user and bootcamp details */
    .user-details,
    .bootcamp-details {
        border-radius: 8px;
        margin-bottom: 15px;
        padding: 10px;
        width: auto; 
        white-space: nowrap; 
        flex-grow: 1; 
    }

    .user-details {
        position: relative;
        padding-right: 30px;
    }

    .user-details::after {
        content: "";
        width: 1px;
        height: 100%;
        background-color: #ddd;
        position: absolute;
        top: 0;
        right: 0;
    }

    /* Profile content padding */
    .content-profile {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .search-bar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .overview-title {
        font-size: 24px;
        font-weight: bold;
        color: #4C3D3D;
    }

    .search-input-container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 361px;
    position: relative; /* Tambahkan ini untuk membuat posisi icon berdasarkan container */
}


    .search-input {
        width: 100%;
        height: 37px;
        padding: 0 40px 0 15px;
        background-color: #FFFFFF;
        border: 1px solid #4C3D3D;
        border-radius: 10px;
        font-family: 'Marcellus', sans-serif;
        font-size: 16px;
        color: #898989;
        box-sizing: border-box;
    }

    .search-input::placeholder {
        color: #898989;
    }

    .search-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 18px;
        color: #4C3D3D;
        cursor: pointer;
    }
    /* Table styling */
    .table-container {
        margin-top: 20px;
        
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 5px;
        overflow: hidden;
    }

    table, th, td {
        border: 1px solid #4C3D3D;
    }

    th {
        padding: 10px;
        text-align: left;
        background-color: #FFD95A; 
        color: #4C3D3D;
    }

    tbody tr:nth-child(odd) {
        background-color: #FFF7D4; 
    }

    tbody tr:nth-child(even) {
        background-color: #FFFFFF; 
    }

    td {
        padding: 10px;
        text-align: left;
    }
    

</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero-section">
    <div class="hero-text">
        <h1>Dashboard Perusahaan</h1>
        <p>Selamat Datang, <b>Alifia Putri Budiyanti.</b> 
            <br>Lihat perkembangan terbaru perusahaan anda di sini.</br></p>
        <a href="<?= base_url('/profile') ?>" class="btn">My Profile</a>
    </div>
</div>

<div class="company-information">
    <div class="user-details">
        <h4>PT JAYA SUKSES</h4>
        <p>Nama Peserta : Alifia Putri Budiyanti</p>
        <p>Alamat Perusahaan : Jalan Mawar Merah Nomor 13</p>
    </div>
    <div class="bootcamp-details">
        <h4>MASA PELATIHAN</h4>
        <p>Tanggal Mulai  : 01 - 07 - 2023</p>
        <p>Tanggal Selesai : 09 - 10 - 2023</p>
    </div>
</div>

<div class="content-profile">
<div class="search-bar-container">
    <h2 class="overview-title">OVERVIEW</h2>
    <div class="search-input-container">
        <input type="text" class="search-input" placeholder="Cari Data">
        <i class="fas fa-search search-icon"></i>
    </div>
</div>


    <!-- Table Section -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kriteria</th>
                    <th>Sebelum</th>
                    <th>Sesudah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Legalitas</td>
                    <td>
                        <a href="<?= base_url('documents/document.txt') ?>" target="_blank">
                            <i class="<?= getFileIcon('documents/document.txt') ?>"></i> <?= basename('documents/document.txt') ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('documents/Shame.pdf') ?>" target="_blank">
                            <i class="<?= getFileIcon('documents/Shame.pdf') ?>"></i> <?= basename('documents/Shame.pdf') ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Ekspor</td>
                    <td>
                        <a href="<?= base_url('documents/ekspor-before.docx') ?>" target="_blank">
                            <i class="<?= getFileIcon('documents/ekspor-before.docx') ?>"></i> <?= basename('documents/ekspor-before.docx') ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('documents/ekspor-after.xlsx') ?>" target="_blank">
                            <i class="<?= getFileIcon('documents/ekspor-after.xlsx') ?>"></i> <?= basename('documents/ekspor-after.xlsx') ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sertifikasi</td>
                    <td>
                        <a href="<?= base_url('documents/company-logo.png') ?>" target="_blank">
                            <i class="<?= getFileIcon('documents/company-logo.png') ?>"></i> <?= basename('documents/company-logo.png') ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('documents/company-update.jpg') ?>" target="_blank">
                            <i class="<?= getFileIcon('documents/company-update.jpg') ?>"></i> <?= basename('documents/company-update.jpg') ?>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</div>

<?= $this->endSection() ?>

<?php
function getFileIcon($file) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION)); // Get the file extension

    // Return the appropriate Font Awesome icon class based on the file extension
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            return 'fas fa-file-image';  // Image file icon
        case 'pdf':
            return 'fas fa-file-pdf';    // PDF file icon
        case 'doc':
        case 'docx':
        case 'txt':
            return 'fas fa-file-alt';    // Document file icon (Word, text)
        case 'xls':
        case 'xlsx':
            return 'fas fa-file-excel';  // Excel file icon
        default:
            return 'fas fa-file';        // Generic file icon for unknown types
    }
}
?>