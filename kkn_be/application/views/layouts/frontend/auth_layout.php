<!DOCTYPE html>
<html>

<head>
    <title>Cikolelet</title>
    <meta name="robots" content="index, follow">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="description" content="Cikolelet  ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Cikolelet">
    <meta name="twitter:description" content="Cikolelet  ">
    <meta name="twitter:image" content="<?= base_url("assets/") ?>img/main-logo-.png">

    <meta property="og:title" content="Cikolelet">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?= base_url("assets/") ?>img/main-logo-.png">

    <link rel="shortcut icon" href="<?= base_url("assets") ?>/img/main-logo-.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets") ?>/css/style.css">

</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <nav class="col-md-12 navbar navbar-blog  navbar-expand-lg navbar-light " id="myHeader">
                <img class="logoku" src="<?= base_url("assets") ?>/img/logo2.png" alt="Logo Cikolelet">

                <a class="bolded pl-10" href="<?= base_url("/"); ?>">CIKOLELET</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menux">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menux">
                    <ul class="nav nav-pills  flex-column flex-lg-row  ml-auto" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("auth") ?>">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("auth/register") ?>">Daftar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <?php $this->load->view($page); ?>




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
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>