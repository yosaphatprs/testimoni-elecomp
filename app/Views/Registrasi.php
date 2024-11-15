<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>

    <!-- FontAwesome JS -->
    <script defer src="<?php echo base_url('assets/plugins/fontawesome/js/all.min.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Font Marcellus -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/registrasi.css">
</head>

<body class="app app-login p-0">
    <div class="row g-0 vh-100">
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="w-75">
                <div class="text-center mb-4">
                    <p class="title">Registrasi</p>
                    <p class="subtitle">Daftarkan perusahaanmu untuk mulai melacak progress</p>
                </div>
                <form class="auth-form" method="post" action="<?= base_url('signUp') ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="Nama" placeholder="Contoh : Budi Susanto" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="Nama_perusahaan" placeholder="Contoh : PT. Ekspor Indonesia" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="Nomor_telepon" placeholder="Contoh : 087865789543" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Alamat Perusahaan</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Contoh : Jalan Mawar Melati Indah 12" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Contoh : eksporindonesia@gmail.com" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password minimal 8 karakter dan harus ada karakter spesial" required>
                            <span class="input-group-text">
                                <i class="fas fa-eye toggle-password" style="cursor: pointer;"></i>
                            </span>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-log-in w-100">Registrasi</button>
                    </div>

                    <div class="text-center mt-3">
                        <p class="sign-up-link">Sudah memiliki akun? <a href="/login" class="text-decoration-none" style="color: #C07F00;">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 auth-background-col d-none d-lg-block"></div>
    </div>

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
