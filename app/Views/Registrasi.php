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

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url('/css/portal.css'); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/registrasi.css">
</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-6 col-md-7 col-lg-6 auth-main-col d-flex justify-content-center" style="padding-top:10px">
            <div>
                <div class="head" style="padding-left:175px; padding-right:175px">
                    <p class="title">Registrasi</p>
                    <p class="subtitle">Daftarkan perusahaanmu untuk mulai melacak progress</p>
                </div>
                <div style="padding-top:20px;">
                    <form class="auth-form login-form" method="post" action="<?= base_url('signUp') ?>">
                        <?= csrf_field(); ?>
                        <div class="email mb-3">
                            <div>
                                <label class="form-label">Nama Lengkap</label>
                            </div>
                            <div>
                                <input type="text" class="" name="Nama" placeholder="Contoh : Budi Susanto" required>
                            </div>
                        </div>

                        <div class="email mb-3">
                            <div>
                                <label class="form-label">Nama Perusahaan</label>
                            </div>
                            <div>
                                <input type="text" class="" name="Nama" placeholder="Contoh : PT. Ekspor Indonesia" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="email mb-3 col-6 ">
                                <div>
                                <label class="form-label">Nomor Telepon</label>
                                </div>
                                <div>
                                <input type="text" class="" name="Nomor_telepon" placeholder="Contoh : 087865789543" required>
                                </div>
                            </div>
                            <div class="mb-3 col-6">
                            <label class="form-label">Alamat Perusahaan</label>
                            <input type="text" name="alamat" placeholder="Contoh : Jalan Mawar Melati Indah 12" required>
                            </div>
                        </div>

                        <div class="email mb-3">
                            <div>
                                <label class="form-label">Email</label>
                            </div>
                            <div>
                            <input type="email" class="" name="email" placeholder="Contoh : eksporindonesia@gmail.com" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <div class="password-wrapper">
                                <input type="password" class="" name="password" id="password" placeholder="Password minimal 8 karakter dan harus ada karakter spesial" required>
                                <i class="fas fa-eye toggle-password"></i>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn-log-in w-100 theme-btn mx-auto">Registrasi</button>
                        </div>
                        <div class="sign-up-link">
                            <p>Sudah memiliki akun ? <a href="/LoginController">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-5 col-lg-6 h-100 auth-background-col"></div>
    </div>
</body>
<script>
    const togglePassword = document.querySelector('.toggle-password');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function(e) {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>
