<main class="">
    <div class="container">
        <div class="row  mt-5 justify-content-center">
            <div class="col-md-10">
                <div class="row login-container rounded ">
                    <!-- for background image sebelah kiri -->
                    <div class="col-lg-6 bg-login-form rounded text-center">

                    </div>
                    <div class="col-lg-6 login-form text-center">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="widget-title-outer">
                            <h3 class="widget-title">CIKOLELET</h3>
                        </div>
                        <form class="user" action="<?= base_url("auth"); ?>" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user " id="email" name="email" placeholder="Email" value="" required="">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control form-control-user " id="password" name="password" value="" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btnSubmit w-100">Masuk</button>
                            </div>
                            <div class="text-center">Belum punya akun, Silahkan <a class="bolded" href="<?= base_url("auth/register") ?>">Daftar</a> </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</main>