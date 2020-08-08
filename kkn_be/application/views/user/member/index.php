<main class="">
    <div class="container">
        <div class="row  mt-5 justify-content-center">

            <div class="col-md-8 ">
               
                <div class="row profil-container rounded ">
                    <div class="card-header col-lg-12 py-3">
                        <h2 class="m-0 font-weight-bold text-primaries ">Profil Pengguna</h2>

                    </div>
                    <div class="card col-lg-12 profil-form">
                        <div class="text-center">
                            <img src="<?= base_url(""); ?>assets/img/man.png" class="rounded-circle w-25  mb-4" alt="Account">
                        </div>
                        <div class="widget-title-outer">
                            <h3 class="widget-title">Informasi Diri</h3>
                        </div>
                        <table class="table  table-borderless table-striped table-condensed ">

                            <tbody>
                                <tr>
                                    <th scope="row">NIK</th>
                                    <td><?= $nik; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td><?= $nama; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kelamin</th>
                                    <td colspan="2"><?= $gender; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td colspan="2"><?= $tmp_lahir; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td colspan="2"><?= $tgl_lahir; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td colspan="2"><?= $alamat; ?></td>

                                </tr>
                            </tbody>
                        </table>

                        <div class="widget-title-outer mt-2">
                            <h3 class="widget-title">Data Akun</h3>
                        </div>
                        <table class="table  table-borderless table-striped table-condensed ">

                            <tbody>
                                <tr>
                                    <th scope="row">Username</th>
                                    <td><?= $username; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Nomor Hanphone</th>
                                    <td><?= $nohp; ?></td>

                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td colspan="2"><?= $email; ?></td>

                                </tr>

                            </tbody>

                        </table>
                        <a href="<?= base_url("user/edit") ?>" class="btnSubmit w-100 d-block text-center">Edit Profil</a>

                    </div>

                </div>
            </div>
        </div>

    </div>




</main>