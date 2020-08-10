<!DOCTYPE html>
<html>

<head>
    <title>Cikolelet</title>

    <script>
        (function(e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
        })(document, window, 0);
    </script>

    <link rel="shortcut icon" href="<?= base_url("assets") ?>/img/main-logo-.png">
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="description" content="Cikolelet  ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Cikolelet">
    <meta name="twitter:description" content="Cikolelet  ">
    <meta name="twitter:image" content="asset/img/main-logo-.png">
    <meta property="og:title" content="Cikolelet">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="asset/img/main-logo-.png">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/"); ?>sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/"); ?>style.css">

</head>

<body>
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <nav class="col-md-12 navbar navbar-blog navbar-expand-lg navbar-light fixed-top" id="myHeader">
                    <img class="logoku" src="<?= base_url("assets"); ?>/img/logo2.png" alt="Logo Cikolelet">

                    <a class="bolded pl-10" href="<?= base_url("/"); ?>">CIKOLELET</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menux">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menux">
                        <ul class="nav nav-pills  flex-column flex-lg-row  ml-auto" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link bolded <?= $active == 'home' ? "active" : "" ?>" href="<?= base_url("home") ?>">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bolded <?= $active == 'sk' ? "active" : "" ?>" href="<?= base_url("SK") ?>">Info Pengajuan Surat</a>
                            </li>

                            <?php if ($this->session->userdata('email')) : ?>

                                <!-- Khusus user yang login -->
                                <li class="nav-item">
                                    <div class="dropdown show">
                                        <a class="nav-link bolded dropdown-toggle <?= $active == 'user' ? "active" : "" ?>" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?= $user['nama_lengkap']; ?>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <ul class="list-unstyled">
                                                <li><a href="<?= base_url("user"); ?>">Profil Pengguna</a></li>
                                                <li><a href="<?= base_url("perizinan/list_perizinan"); ?>">Daftar Pengajuan</a></li>
                                                <li><a href="<?= base_url("perizinan"); ?>">Lakukan Pengajuan</a></li>
                                                <li><a href="<?= base_url("auth/logout"); ?>">Log out</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </li>

                            <?php else : ?>
                                <!-- Khusus user yang login -->
                                <!-- Link Login dan daftar -->
                                <li class="nav-item">
                                    <a class="nav-link bolded" href="<?= base_url("auth") ?>">Masuk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bolded" href="<?= base_url("auth/register") ?>">Daftar</a>
                                </li>
                                <!-- Link Login dan daftar -->

                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>


    <main class="main_content">
        <?php $this->load->view($page); ?>
    </main>




    <!-- footer awal -->
    <footer>
        <!-- Footer konten -->
        <div class="row head-footer py-3">
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Tentang Desa Cikolelet</h3>
                        </div>
                        <div class="d-flex">
                            <img class="logo-footer" src="<?= base_url("assets") ?>/img/logo2.png" alt="Logo Cikolelet">
                            <p id="tentang" class="text-left">Cikolelet adalah sebuah desa di wilayah kecamatan Cinangka Kabupaten Serang, Banten, Indonesia.</p>
                        </div>
                    </div><!-- end inner -->
                </div><!-- end widget -->
            </div>
            <div class="col-md-6">
                <div class="widget">
                    <div class="widget-inner">
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Alamat Desa</h3>
                        </div>
                        <div id="alamatdesa" class="text-left">
                            <p class="mb-0">Desa Cikolelet, kecamatan Cinangka Kabupaten Serang, Banten, 61484.</p>
                            <p class="mb-0">021000000.</p>
                            <a href="mailto:info@Cikolelet.desa.id">info@Cikolelet.desa.id</a>
                        </div>
                    </div><!-- end inner -->
                </div><!-- end widget -->
            </div>
        </div>


        <div class="row footers py-3">

            <div class="container-fluid">
                <!-- link sosmed -->
                <div class="col-md-12 text-center">
                    <div class="social d-flex justify-content-center">
                        <a href="https:/www.twitter.com" class="icons">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https:/www.facebook.com" class="icons">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https:/www.instagram.com" class="icons">
                            <i class="fab fa-instagram"></i>
                            <a href="https:/www.Whatsapp.com" class="icons">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                    </div>
                </div>

                <div class="col-md-12 text-center">
                    &copy; 2019 Copyright Layanan Desa Cikolelet | All rights reserved.
                </div>

            </div>

            <!-- link sosmed akhir   -->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- footer akhir -->

    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url("assets") ?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url("assets") ?>/js/main.js"></script>
</body>

</html>