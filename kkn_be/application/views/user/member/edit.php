<main class="">
    <div class="container">
        <div class="row  mt-5 justify-content-center">

            <div class="col-md-8">
                
                <div class="row profil-container rounded ">
                    <div class="card-header col-lg-12 py-3">
                        <h2 class="m-0 font-weight-bold text-primaries ">Edit Profil</h2>

                    </div>

                    <div class="card col-lg-12 profil-form ">
                        <div class="widget-title-outer">
                            <div class="text-center">
                                <img src="<?= base_url(""); ?>assets/img/man.png" class="rounded-circle w-25  mb-4" alt="Account">
                            </div>
                        </div>
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Informasi Diri</h3>
                        </div>
                        <form class="user" action="<?= base_url("user/update"); ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nik" value="<?= $nik; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" value="<?= $nama; ?>">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="gender" required="true">
                                    <option value="laki-laki" <?= $gender == 'laki-laki' ? "selected" : "" ?>>Laki-laki</option>
                                    <option value="perempuan" <?= $gender == 'perempuan' ? "selected" : "" ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tmp_lahir" value="<?= $tmp_lahir; ?>">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $tgl_lahir; ?>">
                            </div>

                            <div class="form-group">
                                <textarea type="text" class="form-control" name="alamat" value="<?= $alamat; ?>"><?= $alamat; ?></textarea>
                            </div>

                            <div class="widget-title-outer">
                                <h3 class="widget-title">Data Akun</h3>
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username" value="<?= $username; ?>">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="nohp" value="<?= $nohp; ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="<?= $email; ?>">
                            </div>

                            <button type="submit" class="btnSubmit w-100">Simpan Perubahan</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>




</main>