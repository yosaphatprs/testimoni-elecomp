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
    <link rel="stylesheet" href="/css/login.css">
</head>

<body class="app app-login p-0">
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-popup" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
        <script>
            setTimeout(function() {
                document.querySelector('.alert-popup').style.display = 'none';
            }, 3000);
        </script>
    <?php endif; ?>

    <div class="row g-0 app-auth-wrapper">
        <div class="col-6 col-md-7 col-lg-6 auth-main-col  d-flex justify-content-center  " style="padding-top:50px">
            <div>
                <div class="app-auth-branding mb-4 d-flex justify-content-center align-items-center"><a class="app-logo" href=""><img class="logo-icon me-2" style="height:auto; width:180px;" src="<?php echo base_url('/images/logo.png'); ?>" alt="logo"></a></div>

                <div class="head" style="padding-left:100px; padding-right:100px">
                    <p class="title ">Login</p>
                    <p class="subtitle ">Masukkan data akun yang telah didaftarkan sebelumnya</p>

                </div>
                <div class="" style="    padding-top:40px;">
                    <form class="auth-form login-form" method="post" action=<?= base_url('login') ?>>
                        <?= csrf_field(); ?>
                        <div class="email mb-3">
                            <div>
                                <label for="email">Email</label>
                            </div>
                            <div>
                                <input type="email" name="email" id="email" required placeholder="Contoh : eksporindonesia@gmail.com" />
                            </div>

                        </div><!--//form-group-->
                        <div class="password mb-3">
                            <div>
                                <label for="password">Kata Sandi</label>
                            </div>
                            <div class="password-wrapper">
                                <input type="password" name="password" id="password" required placeholder="Password minimal 8 karakter dan harus ada karakter spesial" />
                                <i class="fas fa-eye toggle-password"></i>
                            </div>
                        </div>

                        <div class="trouble">
                            <p><a href=" ">Lupa Password ?</a></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-log-in  w-100 theme-btn mx-auto">Log In</button>
                        </div>
                        <div class="sign-up-link">
                            <p>Belum memiliki akun? <a href="/RegistrasiController">Register</a></p>

                        </div>
                    </form>

                </div>

            </div>

        </div><!--//auth-main-col-->
        <div class="col-6 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->
    </div><!--//row-->
</body>
<!-- Bootstrap JS for alert dismissal -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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