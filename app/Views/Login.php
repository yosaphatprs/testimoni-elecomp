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

    <style>
        :root {
            --body-color: #eff0f7;
            --sidebar-color: #ffffff;
            --primary-color: #130c90;
            --primary-color-light: rgba(18, 13, 144, 0.04);
            --toggle-color: var(--primary-color);
            --toggle-color-hover: var(--primary-color-light);
            --text-color: rgba(0, 0, 0, 0.74);
            --border-color: #898989;
        }

        body {
            position: relative;
        }

        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px 20px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 14px;
            line-height: 1.5;
            z-index: 999;
            width: 95%;
        }

        /* Success Alert */
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        /* Danger Alert */
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        /* Other styles... */
        .head {
            text-align: center;
            display: grid;
        }

        .title {
            font-size: 25px;
            font-weight: 400;
            font-family: 'Marcellus', serif;
            color: black;
        }

        .subtitle {
            font-size: 15px;
            color: var(--text-color);
            margin: 0px !important;
            font-family: 'Marcellus', serif;
        }

        .btn-log-in {
            background-color: #4C3D3D;
            height: 50px;
            color: var(--sidebar-color);
            font-weight: 500;
            font-size: 14px;
            border-radius: 10px;
            border: none;
            font-family: 'Marcellus', serif;
        }

        .auth-background-col {
            background-image: url('/images/login.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        label {
            font-size: 14px;
            color: var(--text-color);
            margin-bottom: 10px;
            font-family: 'Marcellus', serif;
        }

        input {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            padding: 10px 20px;
            border: 1px solid var(--border-color);
            font-family: 'Marcellus', serif;

        }

        input::placeholder {
        font-size: 12px;
        }


        .sign-up-link {
            font-size: 14px;
            text-align: center;
            margin: 20px 0px;
            font-family: 'Marcellus', serif;
        }

        .sign-up-link a {
            color: #C07F00;
            font-weight: 500;
            text-decoration: none;
            font-family: 'Marcellus', serif;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 30px;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .trouble {
            text-align: right;
        }

        .trouble a {
            font-size: 12px;
            color: #C07F00;
        }



        @media (max-width: 768px) {
            .auth-background-col {
                display: none;
            }

            .auth-main-col {
                width: 100%;
                padding: 20px;
            }

            .head {
                padding-left: 0;
                padding-right: 0;
            }

            .form-group,
            .form-group input {
                width: 100%;
            }

            .sign-up-link {
                margin-top: 10px;
            }
        }
    </style>
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
                            <p>Belum memiliki akun? <a href="/registrasi">Register</a></p>

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