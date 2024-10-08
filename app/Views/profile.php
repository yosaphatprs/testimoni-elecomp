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

    .content-profile {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .content-profile .tab-container {

        display: flex;
    }

    .content-profile .tab-container .tabs {
        line-height: 50px;
        width: calc(100% - 1200px);
        /* Hanya garis stroke di kanan */
        border-right: 1px solid grey;
        /* Atur warna dan ketebalan sesuai kebutuhan */
    }

    .content-profile .tab-container .tabs .tabs-btn a {
        color: #4C3D3D;
        text-decoration: none;
    }

    .content-profile .tab-container .tab-content {
        padding-left: 20px;
        padding-top: 5px;
    }

    .legalitas-before-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .legalitas-grid {
        display: grid;
        grid-template-columns: repeat(2, 500px);
        gap: 10px;
        margin-bottom: 30px;
    }

    .content-before-content-one,
    .content-before-content-two,
    .content-before-content-three,
    .content-before-content-four,
    .content-before-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .content-before-content-one p,
    .content-before-content-two p,
    .content-before-content-three p,
    .content-before-content-four p,
    .content-before-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .content-before-content-one h5,
    .content-before-content-two h5,
    .content-before-content-three h5,
    .content-before-content-four h5,
    .content-before-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }

    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    .produk-before-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .produk-grid {
        display: grid;
        grid-template-columns: repeat(2, 500px);
        gap: 10px;
        margin-bottom: 30px;
    }

    .produk-before-content-one,
    .produk-before-content-two,
    .produk-before-content-three,
    .produk-before-content-four,
    .produk-before-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .produk-before-content-one p,
    .produk-before-content-two p,
    .produk-before-content-three p,
    .produk-before-content-four p,
    .produk-before-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .produk-before-content-one h5,
    .produk-before-content-two h5,
    .produk-before-content-three h5,
    .produk-before-content-four h5,
    .produk-before-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }


    .sertifikasi-before-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .sertifikasi-grid {
        display: grid;
        grid-template-columns: repeat(3, 3fr);
        gap: 10px;
        margin-bottom: 30px;
    }

    .sertifikasi-before-content-one,
    .sertifikasi-before-content-two,
    .sertifikasi-before-content-three,
    .sertifikasi-before-content-four,
    .sertifikasi-before-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .sertifikasi-before-content-one p,
    .sertifikasi-before-content-two p,
    .sertifikasi-before-content-three p,
    .sertifikasi-before-content-four p,
    .sertifikasi-before-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .sertifikasi-before-content-one h5,
    .sertifikasi-before-content-two h5,
    .sertifikasi-before-content-three h5,
    .sertifikasi-before-content-four h5,
    .sertifikasi-before-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }


    .sertifikasi-before-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .sertifikasi-grid {
        display: grid;
        grid-template-columns: repeat(3, 3fr);
        gap: 10px;
        margin-bottom: 30px;
    }

    .sertifikasi-before-content-one,
    .sertifikasi-before-content-two,
    .sertifikasi-before-content-three,
    .sertifikasi-before-content-four,
    .sertifikasi-before-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .sertifikasi-before-content-one p,
    .sertifikasi-before-content-two p,
    .sertifikasi-before-content-three p,
    .sertifikasi-before-content-four p,
    .sertifikasi-before-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .sertifikasi-before-content-one h5,
    .sertifikasi-before-content-two h5,
    .sertifikasi-before-content-three h5,
    .sertifikasi-before-content-four h5,
    .sertifikasi-before-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }

    .pameran-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .pameran-grid {
        display: grid;
        grid-template-columns: repeat(2, 500px);
        gap: 10px;
        margin-bottom: 30px;
    }

    .pameran-content-one,
    .pameran-content-two,
    .pameran-content-three,
    .pameran-content-four,
    .pameran-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .pameran-content-one p,
    .pameran-content-two p,
    .pameran-content-three p,
    .pameran-content-four p,
    .pameran-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .pameran-content-one h5,
    .pameran-content-two h5,
    .pameran-content-three h5,
    .pameran-content-four h5,
    .pameran-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }

    .ekspor-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .ekspor-grid {
        display: grid;
        grid-template-columns: repeat(2, 500px);
        gap: 10px;
        margin-bottom: 30px;
    }

    .ekspor-content-one,
    .ekspor-content-two,
    .ekspor-content-three,
    .ekspor-content-four,
    .ekspor-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .ekspor-content-one p,
    .ekspor-content-two p,
    .ekspor-content-three p,
    .ekspor-content-four p,
    .ekspor-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .ekspor-content-one h5,
    .ekspor-content-two h5,
    .ekspor-content-three h5,
    .ekspor-content-four h5,
    .ekspor-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }

    .promosi-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .promosi-grid {
        display: grid;
        grid-template-columns: repeat(2, 500px);
        gap: 10px;
        margin-bottom: 30px;
    }

    .promosi-content-one,
    .promosi-content-two,
    .promosi-content-three,
    .promosi-content-four,
    .promosi-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .promosi-content-one p,
    .promosi-content-two p,
    .promosi-content-three p,
    .promosi-content-four p,
    .promosi-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .promosi-content-one h5,
    .promosi-content-two h5,
    .promosi-content-three h5,
    .promosi-content-four h5,
    .promosi-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }

    .pembinaan-content {
        margin: 20px;
        /* Optional: margin for the overall container */
    }

    .pembinaan-grid {
        display: grid;
        grid-template-columns: repeat(2, 500px);
        gap: 10px;
        margin-bottom: 30px;
    }

    .pembinaan-content-one,
    .pembinaan-content-two,
    .pembinaan-content-three,
    .pembinaan-content-four,
    .pembinaan-content-five {
        background-color: #f8f8f8;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;

    }

    .pembinaan-content-one p,
    .pembinaan-content-two p,
    .pembinaan-content-three p,
    .pembinaan-content-four p,
    .pembinaan-content-five p {
        font-size: 12px;
        margin-bottom: 8px;

    }

    .pembinaan-content-one h5,
    .pembinaan-content-two h5,
    .pembinaan-content-three h5,
    .pembinaan-content-four h5,
    .pembinaan-content-five h5 {
        font-size: 14px;
        margin-bottom: 15px;

    }


    .tab-button {
        text-decoration: none;
        padding: 10px;
        font-size: 16px;
        color: #333;
        position: relative;
        transition: all 0.3s ease;
    }

    .tab-button:hover {
        color: #000;
    }

    .tab-button::after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        background-color: #000;
        left: 0;
        bottom: 0;
        transition: width 0.3s ease;
    }

    .tab-button:hover::after,
    .tab-button.active::after {
        /* Underline on hover and when active */
        width: 100%;
    }

    .tab-button.active {
        color: #000;
        /* Optional: Change text color for active tab */
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
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="legalitas">Legalitas</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="produk">Produk</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="sertifikasi">Sertifikasi</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="pengalaman-pameran">Pengalaman Pameran</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="pengalaman-ekspor">Pengalaman Ekspor</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="media-promosi">Media Promosi</a>
            </div>
            <div class="tabs-btn">
                <a href="#" class="tab-button" data-tab="pembinaan">Pembinaan</a>
            </div>
        </div>

        <div class="content">
            <div class="content">
                <div class="tab-content legalitas active">
                    <div id="legalitas-before" class="content ">
                        <h4>Legalitas Awal</h4>
                        <div class="legalitas-before-content">
                            <div class="legalitas-grid">
                                <div class="content-before-content-one">
                                    <p><strong>Company Name:</strong> PT Maju Terus</p>
                                    <p><strong>Legal Form:</strong> Perseroan Terbatas (PT)</p>
                                    <p><strong>Establishment Date:</strong> 2015-07-20</p>
                                    <p><strong>Notarial Deed Number:</strong> Deed No. 22/2015</p>
                                    <p><strong>Notary Name:</strong> Ahmad Rifai, SH</p>
                                    <p><strong>Company Address:</strong> Jl. Anggrek No. 25, Bandung</p>
                                    <p><strong>Business Sector:</strong> Teknologi Informasi</p>
                                </div>
                                <div class="content-before-content-two">
                                    <h5>Business Permit</h5>
                                    <p><strong>Permit Number:</strong> SIUP No. 567/2021</p>
                                    <p><strong>Issued By:</strong> Dinas Perdagangan Bandung</p>
                                    <p><strong>Issue Date:</strong> 2021-05-15</p>
                                    <p><strong>Valid Until:</strong> 2026-05-15</p>
                                </div>
                                <div class="content-before-content-three">
                                    <h5>Company Registration Certificate</h5>
                                    <p><strong>Registration Number:</strong> TDP No. 789/2016</p>
                                    <p><strong>Issued By:</strong> Dinas Perindustrian dan Perdagangan</p>
                                    <p><strong>Issue Date:</strong> 2016-03-18</p>
                                    <p><strong>Valid Until:</strong> 2031-03-18</p>
                                </div>
                                <div class="content-before-content-four">
                                    <h5>Legal Representative</h5>
                                    <p><strong>Name:</strong> Andi Pratama</p>
                                    <p><strong>Position:</strong> CEO</p>
                                    <p><strong>Contact:</strong> +62 813 9876 5432</p>

                                </div>
                                <div class="content-before-content-five">

                                    <h5>Amendments</h5>
                                    <p><strong>Amendment Date:</strong> 2023-04-15 — Perubahan nama perusahaan dari PT Karya Digital menjadi PT Maju Terus </p>
                                    <p><strong>Amendment Date:</strong> 2024-01-10 — Perubahan alamat kantor pusat dari Jl. Kemangi No. 18 ke Jl. Anggrek No. 25</p>

                                </div>
                            </div>
                        </div>
                        <h4>Legalitas Akhir</h4>
                        <div class="legalitas-before-content">
                            <div class="legalitas-grid">
                                <div class="content-before-content-one">
                                    <p><strong>Company Name:</strong> PT Example Corp</p>
                                    <p><strong>Legal Form:</strong> Perseroan Terbatas (PT)</p>
                                    <p><strong>Establishment Date:</strong> 2010-05-10</p>
                                    <p><strong>Notarial Deed Number:</strong> Deed No. 12/2010</p>
                                    <p><strong>Notary Name:</strong> John Doe, SH</p>
                                    <p><strong>Company Address:</strong> Jl. Dummy No. 123, Jakarta</p>
                                    <p><strong>Business Sector:</strong> Software Development</p>
                                </div>
                                <div class="content-before-content-two">
                                    <h5>Business Permit</h5>
                                    <p><strong>Permit Number:</strong> SIUP No. 1234/2020</p>
                                    <p><strong>Issued By:</strong> Dinas Perdagangan Jakarta</p>
                                    <p><strong>Issue Date:</strong> 2020-04-25</p>
                                    <p><strong>Valid Until:</strong> 2025-04-25</p>
                                </div>
                                <div class="content-before-content-three">
                                    <h5>Company Registration Certificate</h5>
                                    <p><strong>Registration Number:</strong> TDP No. 4321/2011</p>
                                    <p><strong>Issued By:</strong> Dinas Perindustrian dan Perdagangan</p>
                                    <p><strong>Issue Date:</strong> 2011-06-15</p>
                                    <p><strong>Valid Until:</strong> 2031-06-15</p>
                                </div>
                                <div class="content-before-content-four">
                                    <h5>Legal Representative</h5>
                                    <p><strong>Name:</strong> Jane Smith</p>
                                    <p><strong>Position:</strong> CEO</p>
                                    <p><strong>Contact:</strong> +62 812 3456 7890</p>
                                </div>
                                <div class="content-before-content-five">
                                    <h5>Amendments</h5>
                                    <p><strong>Amendment Date:</strong> 2022-08-01 — Perubahan nama perusahaan dari PT Dummy Digital menjadi PT Example Corp</p>
                                    <p><strong>Amendment Date:</strong> 2023-03-15 — Perubahan alamat kantor pusat dari Jl. Lama No. 100 ke Jl. Dummy No. 123</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="tab-content produk">
                    <h4>Produk Awal</h4>
                    <div class="produk-before-content">
                        <div class="produk-grid">
                            <div class="produk-before-content-one">
                                <h5>Product Name: Smart Watch</h5>
                                <p><strong>Description:</strong> A feature-packed smartwatch with fitness tracking, heart rate monitoring, and customizable watch faces.</p>
                                <p><strong>Price:</strong> Rp 1,500,000</p>
                                <p><strong>Availability:</strong> In Stock</p>
                            </div>
                        </div>
                    </div>
                    <h4>Produk Akhir</h4>
                    <div class="produk-before-content">
                        <div class="produk-grid">
                            <div class="produk-before-content-one">
                                <h5>Product Name: Wireless Earbuds</h5>
                                <p><strong>Description:</strong> High-quality wireless earbuds with noise cancellation and long battery life.</p>
                                <p><strong>Price:</strong> Rp 850,000</p>
                                <p><strong>Availability:</strong> Out of Stock</p>
                            </div>
                            <div class="produk-before-content-two">
                                <h5>Product Name: Laptop Pro 2024</h5>
                                <p><strong>Description:</strong> A powerful laptop with a 14-inch display, 16GB RAM, and 1TB SSD storage.</p>
                                <p><strong>Price:</strong> Rp 15,000,000</p>
                                <p><strong>Availability:</strong> In Stock</p>
                            </div>
                            <div class="produk-before-content-three">
                                <h5>Product Name: Gaming Chair</h5>
                                <p><strong>Description:</strong> Ergonomic gaming chair with adjustable armrests and back support.</p>
                                <p><strong>Price:</strong> Rp 3,200,000</p>
                                <p><strong>Availability:</strong> In Stock</p>
                            </div>
                            <div class="produk-before-content-four">
                                <h5>Product Name: Portable Charger 20,000mAh</h5>
                                <p><strong>Description:</strong> High-capacity portable charger with fast charging and dual USB ports.</p>
                                <p><strong>Price:</strong> Rp 450,000</p>
                                <p><strong>Availability:</strong> Limited Stock</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-content sertifikasi">
                    <h4>Sertifikasi Awal</h4>
                    <div class="sertifikasi-before-content">
                        <div class="sertifikasi-grid">
                            <div class="sertifikasi-before-content-one">
                                <h5>Certification Title: ISO 9001:2015</h5>
                                <p><strong>Certificate Number:</strong> 12345/ISO9001</p>
                                <p><strong>Issue Date:</strong> 2020-08-12</p>
                                <p><strong>Issuer:</strong> International Organization for Standardization (ISO)</p>
                            </div>
                        </div>
                    </div>
                    <h4>Sertifikasi Akhir</h4>
                    <div class="sertifikasi-before-content">
                        <div class="sertifikasi-grid">
                            <div class="sertifikasi-before-content-one">
                                <h5>Certification Title: ISO 14001:2015</h5>
                                <p><strong>Certificate Number:</strong> 67890/ISO14001</p>
                                <p><strong>Issue Date:</strong> 2021-11-05</p>
                                <p><strong>Issuer:</strong> International Organization for Standardization (ISO)</p>
                            </div>
                            <div class="sertifikasi-before-content-two">
                                <h5>Certification Title: OHSAS 18001</h5>
                                <p><strong>Certificate Number:</strong> 11223/OHSAS</p>
                                <p><strong>Issue Date:</strong> 2019-03-20</p>
                                <p><strong>Issuer:</strong> British Standards Institution (BSI)</p>
                            </div>
                            <div class="sertifikasi-before-content-three">
                                <h5>Certification Title: Halal Certification</h5>
                                <p><strong>Certificate Number:</strong> HAL123456</p>
                                <p><strong>Issue Date:</strong> 2022-07-15</p>
                                <p><strong>Issuer:</strong> Majelis Ulama Indonesia (MUI)</p>
                            </div>
                            <div class="sertifikasi-before-content-four">
                                <h5>Certification Title: CE Marking</h5>
                                <p><strong>Certificate Number:</strong> CE098765</p>
                                <p><strong>Issue Date:</strong> 2020-04-18</p>
                                <p><strong>Issuer:</strong> European Conformity (CE)</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-content pengalaman-pameran">
                    <h4>Pengalaman Pameran</h4>
                    <div class="pameran-content">
                        <div class="pameran-grid">
                            <div class="pameran-content-one">
                                <h5>Exhibition: Tech Innovation Expo 2023</h5>
                                <p><strong>Date:</strong> 2023-06-15 to 2023-06-18</p>
                                <p><strong>Location:</strong> Jakarta Convention Center, Jakarta</p>
                                <p><strong>Description:</strong> Showcased the latest innovations in AI and cloud computing. PT Maju Terus demonstrated its cutting-edge SaaS platform.</p>
                            </div>
                            <div class="pameran-content-two">
                                <h5>Exhibition: Global Startups Summit 2022</h5>
                                <p><strong>Date:</strong> 2022-09-05 to 2022-09-07</p>
                                <p><strong>Location:</strong> Bali International Convention Centre, Bali</p>
                                <p><strong>Description:</strong> Participated in a forum of global startups, where PT Maju Terus presented its digital marketing services to international investors.</p>
                            </div>
                            <div class="pameran-content-three">
                                <h5>Exhibition: IT & Digital Transformation Expo 2021</h5>
                                <p><strong>Date:</strong> 2021-11-20 to 2021-11-22</p>
                                <p><strong>Location:</strong> Surabaya Grand Hall, Surabaya</p>
                                <p><strong>Description:</strong> Focused on digital transformation trends. PT Maju Terus highlighted its web development solutions for SMEs and large enterprises.</p>
                            </div>
                            <div class="pameran-content-four">
                                <h5>Exhibition: Indonesia Tech Expo 2020</h5>
                                <p><strong>Date:</strong> 2020-02-10 to 2020-02-12</p>
                                <p><strong>Location:</strong> Medan Convention Center, Medan</p>
                                <p><strong>Description:</strong> An annual technology showcase, where PT Maju Terus introduced its new software suite aimed at optimizing business workflows.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-content pengalaman-ekspor">
                    <h4>Pengalaman Ekspor</h4>
                    <div class="ekspor-content">
                        <div class="ekspor-grid">
                            <div class="ekspor-content-one">
                                <h5>Export Destination: United States</h5>
                                <p><strong>Year:</strong> 2023</p>
                                <p><strong>Product:</strong> Software as a Service (SaaS) for E-Commerce</p>
                                <p><strong>Description:</strong> Successfully exported our SaaS platform to various e-commerce companies in the US, providing a comprehensive solution for managing online stores.</p>
                            </div>
                            <div class="ekspor-content-two">
                                <h5>Export Destination: Singapore</h5>
                                <p><strong>Year:</strong> 2022</p>
                                <p><strong>Product:</strong> Cloud-Based Marketing Tools</p>
                                <p><strong>Description:</strong> Delivered cloud-based marketing software to startups and small businesses in Singapore, helping them scale their marketing efforts effectively.</p>
                            </div>
                            <div class="ekspor-content-three">
                                <h5>Export Destination: Australia</h5>
                                <p><strong>Year:</strong> 2021</p>
                                <p><strong>Product:</strong> Custom Web Development Services</p>
                                <p><strong>Description:</strong> Provided custom web development services to tech companies in Australia, focusing on responsive design and high-performance web applications.</p>
                            </div>
                            <div class="ekspor-content-four">
                                <h5>Export Destination: Japan</h5>
                                <p><strong>Year:</strong> 2020</p>
                                <p><strong>Product:</strong> AI-Powered Business Solutions</p>
                                <p><strong>Description:</strong> Exported AI-powered business automation solutions to companies in Japan, helping streamline operations and improve productivity.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-content media-promosi">
                    <h4>Media Promosi</h4>
                    <div class="promosi-content">
                        <div class="promosi-grid">
                            <div class="promosi-content-one">
                                <h5>Media: Digital Catalog</h5>
                                <p><strong>Year:</strong> 2023</p>
                                <p><strong>Description:</strong> Developed an interactive digital catalog featuring all product offerings, including detailed specifications, pricing, and customer reviews. Distributed via email campaigns and social media channels.</p>
                            </div>
                            <div class="promosi-content-two">
                                <h5>Media: Social Media Ads</h5>
                                <p><strong>Year:</strong> 2022</p>
                                <p><strong>Description:</strong> Launched targeted advertising campaigns on Facebook and Instagram to promote our new software solutions. These ads reached over 50,000 users in our target demographic.</p>
                            </div>
                            <div class="promosi-content-three">
                                <h5>Media: Google Ads</h5>
                                <p><strong>Year:</strong> 2021</p>
                                <p><strong>Description:</strong> Implemented Google Ads to drive traffic to our website and increase product inquiries. Focused on search and display ads with a focus on the Southeast Asia region.</p>
                            </div>
                            <div class="promosi-content-four">
                                <h5>Media: Printed Brochures</h5>
                                <p><strong>Year:</strong> 2020</p>
                                <p><strong>Description:</strong> Produced and distributed printed brochures at various tech conferences and events. Highlighted our full suite of web development and IT services.</p>
                            </div>
                            <div class="promosi-content-five">
                                <h5>Media: Video Marketing</h5>
                                <p><strong>Year:</strong> 2019</p>
                                <p><strong>Description:</strong> Created a series of promotional videos demonstrating the features and benefits of our products. These videos were shared on YouTube and embedded in our website.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-content pembinaan">
                    <h4>Program Pembinaan</h4>
                    <div class="pembinaan-content">
                        <div class="pembinaan-grid">
                            <div class="pembinaan-content-one">
                                <h5>Program: Digital Innovation Coaching</h5>
                                <p><strong>Year:</strong> 2023</p>
                                <p><strong>Organizer:</strong> Ministry of Industry</p>
                                <p><strong>Description:</strong> Participated in a coaching program focusing on digital transformation and innovation. The program enhanced our ability to integrate cutting-edge technology into our products, significantly improving efficiency and user experience.</p>
                            </div>
                            <div class="pembinaan-content-two">
                                <h5>Program: Quality Management System Training</h5>
                                <p><strong>Year:</strong> 2022</p>
                                <p><strong>Organizer:</strong> ISO Certification Body</p>
                                <p><strong>Description:</strong> Completed a comprehensive training on ISO 9001 standards to improve the quality management system of the company. This led to streamlined processes and higher product consistency.</p>
                            </div>
                            <div class="pembinaan-content-three">
                                <h5>Program: Export Readiness Program</h5>
                                <p><strong>Year:</strong> 2021</p>
                                <p><strong>Organizer:</strong> Indonesian Export Development Agency</p>
                                <p><strong>Description:</strong> A coaching program that prepared our company for international markets. The program provided insights into export regulations, global market strategies, and improved our export-related services.</p>
                            </div>
                            <div class="pembinaan-content-four">
                                <h5>Program: Product Innovation & Design Workshop</h5>
                                <p><strong>Year:</strong> 2020</p>
                                <p><strong>Organizer:</strong> Indonesian Chamber of Commerce</p>
                                <p><strong>Description:</strong> Attended a workshop that focused on product design and innovation. It resulted in the creation of a new product line, increasing the company's competitive edge in the market.</p>
                            </div>
                            <div class="pembinaan-content-five">
                                <h5>Program: Sustainable Business Practices Training</h5>
                                <p><strong>Year:</strong> 2019</p>
                                <p><strong>Organizer:</strong> Global Green Initiative</p>
                                <p><strong>Description:</strong> A training program aimed at integrating sustainability into business practices. This helped us adopt eco-friendly production methods and reduce our environmental impact.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>
<script>
    // Select all tab buttons and content
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    // Add event listeners to all tab buttons
    tabButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            // Get the data-tab value from the clicked button
            const targetTab = this.getAttribute('data-tab');

            // Hide all tab contents
            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            // Show the selected tab content by adding 'active' class
            document.querySelector('.' + targetTab).classList.add('active');
        });
    });
</script>

<?= $this->endSection() ?>