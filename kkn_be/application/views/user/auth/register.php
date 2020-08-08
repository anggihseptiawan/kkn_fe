<main class="">
    <div class="container">
        <div class="row  mt-5 justify-content-center">
            <div class="col-md-10">
                <div class="row login-container rounded ">
                    <div class="col-lg-12 login-form ">
                        <form class="user" action="<?= base_url("auth/register") ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-title-outer">
                                        <h3 class="widget-title">Informasi Diri</h3>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user " id="nik" name="nik" placeholder="NIK" value="" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user " id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="" required="true">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control form-control-user " id="gender" name="gender" required="true">
                                            <option value="0">Pilih Jenis Kelamin</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user " id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" value="" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-user " id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="" required="true">
                                    </div>

                                    <div class="form-group">
                                        <textarea type="text" class="form-control form-control-user " id="alamat" name="alamat" placeholder="Alamat" value="" required="true"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="widget-title-outer">
                                        <h3 class="widget-title">Data Akun</h3>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user " id="username" name="username" placeholder="User Name" value="" required="true">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control form-control-user " id="nohp" name="nohp" placeholder="Nomer Handphone" value="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user " id="email" name="email" placeholder="Email" value="" required="">
                                    </div>
                                    <div class="form-group ">
                                        <input type="password" class="form-control form-control-user " id="password" name="password1" value="" placeholder="Password" required="">
                                    </div>
                                    <div class="form-group ">
                                        <input type="password" class="form-control form-control-user " id="password2" name="password2" value="" placeholder="Konfirmasi Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btnSubmit w-100" value="Daftar" />
                                    </div>
                                    <div class="text-center">Sudah punya akun, Silahkan <a class="bolded" href="<?= base_url("auth") ?>">Masuk</a> </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</main>