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
        background: url('<?= base_url('images/hero-image-profile.jpg') ?>') no-repeat center center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    /* Profile Image Adjustments */
    .profile-image {
        position: absolute;
        top: 78%;
        left: 10%;
        transform: translate(-50%, -50%);
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 5px solid white;
        z-index: 10;
    }

    /* Profile Section */
    .profile-section {
        display: flex;
        justify-content: space-between;
        padding: 30px;
        padding-left: 250px;
        background-color: #f5f5f5;
        margin-top: -80px;
        line-height: 30px;
        position: relative;
    }

    .profile-card {
        text-align: left;
        width: 100%;
    }

    .profile-card h3 {
        font-size: 24px;
    }

    .profile-card h5 {
        font-size: 16px;
        color: #C07F00;
    }

    .location-company {
        display: flex;
        align-items: center;
    }

    .location-company p {
        margin-left: 5px;
        font-size: 14px;
    }

    /* Styling untuk Contact Details dan Address Details */
    .company-information {
        display: flex;
        background-color: rgba(255, 247, 212, 0.3);
        width: auto;
        align-items: center;
        padding: 10px 30px;
        gap: 30px;
        border-radius: 5px;
        border: 1px solid rgba(76, 61, 61, 0.5);
    }

    .contact-details,
    .address-details {
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .contact-details h4,
    .address-details h4 {
        font-size: 12px;
    }

    .contact-details p,
    .address-details p {
        font-size: 10px;
    }

    /* Tambahkan border antara Contact Details dan Address Details */
    .contact-details {
        position: relative;
        padding-right: 30px;
    }

    .contact-details::after {
        content: "";
        width: 1px;
        height: 100%;
        background-color: #ddd;
        position: absolute;
        top: 0;
        right: 0;
    }

    .address-details {
        width: 250px;
    }

    /* Sosial Media Icons */
    .social-icons {
        display: flex;
        margin-top: 15px;
        gap: 10px;
        align-items: center;
    }

    .social-icons i {
        font-size: 20px;
    }

    .edit-profile-btn button {
        width: 150px;
        height: 44px;
        background-color: #4C3D3D;
        font-size: 16px;
        color: white;
        text-align: center;
        border-radius: 5px;
        margin-left: 10px;

    }
    .content-profile{
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .content-profile .tab-container {
      
        display: flex;
    }
    .content-profile .tab-container .tabs{
        line-height: 50px;
        width: calc(100% - 1200px);
        /* background-color: #C07F00; */
      

    }
    .content-profile .tab-container .tabs .tabs-btn a{
        color: #4C3D3D;
        text-decoration: none;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero-section">
    <div class="hero-text">
    </div>
    <img src="<?= base_url('images/Profile_user.png') ?>" alt="Naila Putri" class="profile-image">
</div>

<div class="profile-section">
    <div class="profile-card">
        <h3>Naila Putri Saraswati</h3>
        <h5>Food and Beverages Company</h5>
        <div class="location-company">
            <i class="fa-solid fa-location-dot"></i>
            <p>East Java, Indonesia</p>
        </div>

        <div class="social-icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-tiktok"></i>
        </div>
    </div>
    <div class="company-information">
        <div class="contact-details">
            <h4>Contact Perusahaan</h4>
            <p>foodandbeverages@email.com</p>
            <p>+62 3321 4695 8997</p>
        </div>
        <div class="address-details">
            <h4>Alamat Perusahaan</h4>
            <p>Jalan Dahan GJ1 No D1/C23, Kedung Kandang</p>
            <p>Kota Malang, Jawa Timur, Indonesia</p>
        </div>
    </div>
    <div class="edit-profile-btn">
        <button>Edit Profile</button>
    </div>

</div>
<div class="content-profile">
    <div class="tab-container">
        <!-- Tabs Section -->
        <div class="tabs">
            <div class="tabs-btn"> <a href="#" class="tab-button active" data-tab="legalitas">Legalitas</a></div>
            <div class="tabs-btn"> <a  href="#"  class="tab-button" data-tab="sertifikat">Produk</a></div>
            <div class="tabs-btn"><a href="#"  class="tab-button" data-tab="pengalaman">Sertifikasi</a> </div>
            <div class="tabs-btn"> <a href="#" class="tab-button active" data-tab="legalitas">Pengalaman Pameran</a></div>
            <div class="tabs-btn"> <a  href="#"  class="tab-button" data-tab="sertifikat">Pengalaman Ekspor</a></div>
            <div class="tabs-btn"><a href="#"  class="tab-button" data-tab="pengalaman">Media Promosi</a> </div>
            <div class="tabs-btn"><a href="#"  class="tab-button" data-tab="pengalaman">Pembinaan</a> </div>

        </div>

        <!-- Content Section -->
        <div class="tab-content">
            <div id="legalitas" class="content active">
                <h4>Legalitas Awal</h4>
                <img src="<?= base_url('images/certificate1.png') ?>" alt="Certificate 1" class="certificate-image">
            </div>
            <div id="sertifikat" class="content">
                <h4>Sertifikat</h4>
                <div class="row">
                    <img src="<?= base_url('images/certificate2.png') ?>" alt="Certificate 2" class="certificate-image">
                    <img src="<?= base_url('images/certificate3.png') ?>" alt="Certificate 3" class="certificate-image">
                </div>
            </div>
            <div id="pengalaman" class="content">
                <h4>Pengalaman Pameran</h4>
                <p>Deskripsi pengalaman pameran Anda akan muncul di sini.</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>