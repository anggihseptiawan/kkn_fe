<div class="container-fluid ">
    <main class="">
        <div class="card shadow my-4 px-2 pb-4">
            <h4 class="my-3 font-weight-bold">Daftar Permohonan Surat Keterangan</h4>
            <div class="list-group">
                <?php if ($pengajuan) : ?>
                    <?php foreach ($pengajuan as $key => $value) : ?>
                        <div class="list-group-item list-group-item-action">
                            <div class="descrption float-left">
                                <p class="mb-0">Pengajuan <span class="font-weight-bold"><?= str_replace('-', ' ', $value['jenis']); ?></span></p>
                                <small class="d-block">Tanggal Permohonan : <?= $value['created_at']; ?> </small>

                                <?php if ($value['status'] == 1) : ?>
                                    <p class="mb-0">Berkas Perizinan : <a href="<?= base_url() . str_replace(" ", '_', $value["path_admin"]);  ?>" download>Download disini</a> </p>
                                <?php elseif ($value['status'] == 2) : ?>
                                    <p class="mb-0">Keterangan : <?= $value['feedback']; ?> </p>
                                <?php endif; ?>
                            </div>
                            <?php if ($value['status'] == 0) : ?>
                                <p class="float-right badge badge-primary">Menuggu</p>
                            <?php elseif ($value['status'] == 1) : ?>
                                <p class="float-right badge badge-success">Diterima</p>
                            <?php else : ?>
                                <p class="float-right badge badge-danger">Ditolak</p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="alert alert-primary">Belum ada pengajuan</div>
                <?php endif; ?>
            </div>



            <h4 class="mt-4">Ajukan Perizinan</h4>
            <div class="form-group">
                <select class="form-control form-control-user " id="fm_jenis" name="jenis" required="true">
                    <option value="0">Pilih Jenis Surat</option>
                    <option value="Surat-Keterangan-Ahli-Waris">Surat Keterangan Ahli Waris</option>
                    <option value="Surat-Keterangan-Domisili">Surat Keterangan Domisili</option>
                    <option value="Surat-Keterangan-Kematian">Surat Keterangan Kematian</option>
                    <option value="Surat-Keterangan-Pindah">Surat Keterangan Pindah</option>
                    <option value="Surat-Keterangan-Tidak-Mampu">Surat Keterangan Tidak Mampu</option>
                    <option value="Surat-Keterangan-Usaha">Surat Keterangan Usaha</option>
                    <option value="Surat-Pengantar-Pembuatan-KTP">Surat Pengantar Pembuatan KTP</option>
                </select>
            </div>
            <div class="form-group">
                <textarea type="text" class="form-control form-control-user " id="fm_keterangan" name="keterangan" placeholder="keterangan" value="" required="true"></textarea>
            </div>

            <form method="post" action="<?= base_url("perizinan/submit"); ?>" enctype="multipart/form-data" novalidate class="box">

                <div class="box__input">
                    <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43">
                        <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z" /></svg>
                    <input type="file" name="files" id="file" class="box__file" />
                    <!-- <input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple /> -->
                    <input type="hidden" value="" name="jenis" id="jenis" class="box__file" />
                    <input type="hidden" value="" name="keterangan" id="keterangan" class="box__file" />
                    <label for="file"><strong class="mr-1">Pilih file</strong><span class="box__dragndrop"> atau drag ke sini</span>.</label>
                    <button type="submit" class="box__button">Upload</button>
                </div>
                <div class="box__uploading">Uploading&hellip;</div>
                <div class="box__success">Selamat file anda telah terkirim! Mohon tunggu, Data akan segera kami proses.</div>
                <div class="box__error">Error! <span></span>. <a href="<?= base_url("perizinan/submit"); ?>" class="box__restart" role="button">Coba lagi!</a></div>
            </form>



        </div>
    </main>


</div>