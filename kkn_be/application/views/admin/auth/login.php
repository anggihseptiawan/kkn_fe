<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login" style="background: url(<?= base_url("assets/images/img3.jpg"); ?>); background-size: cover;"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <p class="text-gray-900 mb-4">Selamat Datang, Silahkan Login</p>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('admin/auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" placeholder="Masukkan email" name="email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('admin/auth/registration'); ?>">Belum punya akun ? Daftar!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>