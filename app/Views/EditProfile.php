<?= $this->extend('Layout/user_layout') ?>

<?= $this->section('title') ?>
Edit Profile
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <!-- FontAwesome JS -->
    <script defer src="<?php echo base_url('assets/plugins/fontawesome/js/all.min.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Font Marcellus -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="app app-edit-profile p-0">
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4" style="width: 600px; background-color: #fdf8e7;">
        <h3 class="text-center mb-4">Edit Profile</h3>
        <form method="post" action="#">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="Nama" placeholder="Contoh : Budi Susanto" value="Naila Putri Saraswati" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" name="Nama_perusahaan" placeholder="Contoh : PT. Ekspor Indonesia" value="Food and Beverages Company" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="Nomor_telepon" placeholder="Contoh : 087865789543" value="087865789543" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Alamat Perusahaan</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Contoh : Jalan Mawar Melati Indah 12" value="Jalan Dahan GJ1 No D1/C23, Kedung Kandang" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Contoh : eksporindonesia@gmail.com" value="foodandbeverages@email.com" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Isi untuk mengganti password">
                    <span class="input-group-text">
                        <i class="fas fa-eye toggle-password" style="cursor: pointer;"></i>
                    </span>
                </div>
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-secondary" onclick="window.history.back();" style="width: 100px;">Kembali</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>

