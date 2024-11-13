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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #eff0f7;
        }

        .title {
            font-size: 25px;
            font-weight: 400;
            font-family: 'Marcellus', serif;
            color: black;
        }

        .subtitle {
            font-size: 15px;
            color: rgba(0, 0, 0, 0.74);
            margin: 0px !important;
            font-family: 'Marcellus', serif;
        }

        .btn-log-in {
            background-color: #4C3D3D;
            height: 50px;
            color: #ffffff;
            font-weight: 500;
            font-size: 14px;
            border-radius: 10px;
            font-family: 'Marcellus', serif;
        }

        .auth-background-col {
            background-image: url('/images/login.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .trouble a {
            font-size: 12px;
            color: #C07F00;
            text-decoration: none;
        }
    </style>
</head>

<body class="app app-login p-0">

    <!-- Flash Alert -->
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 d-flex justify-content-center p-5">
            <div class="w-100">
                <div class="app-auth-branding mb-4 text-center">
                    <a class="app-logo" href=""><img class="img-fluid" style="width: 180px;" src="<?php echo base_url('/images/logo.png'); ?>" alt="logo"></a>
                </div>

                <div class="text-center mb-4">
                    <p class="title">Login</p>
                    <p class="subtitle">Masukkan data akun yang telah didaftarkan sebelumnya</p>
                </div>

                <form class="auth-form login-form" method="post" action="<?= base_url('login') ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required placeholder="Contoh : eksporindonesia@gmail.com">
                    </div>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <div class="password-wrapper">
                            <input type="password" class="form-control" name="password" id="password" required placeholder="Password minimal 8 karakter dan harus ada karakter spesial">
                            <i class="fas fa-eye toggle-password"></i>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-3">
                        <a href="#" class="trouble">Lupa Password?</a>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-log-in w-100">Log In</button>
                    </div>

                    <div class="text-center mt-3">
                        <p>Belum memiliki akun? <a href="/registrasi" class="text-decoration-none" style="color: #C07F00;">Register</a></p>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-5 col-lg-6 d-none d-md-block auth-background-col"></div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Password Toggle Script -->
    <script>
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
