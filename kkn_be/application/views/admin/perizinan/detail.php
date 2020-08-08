<h5>Detail Pemohon</h5>
<p>Nama : <?= $user['nama_lengkap']; ?></p>
<p>File Perizinan : <a href="<?= base_url() . str_replace(' ', '_', $surat['path']) ?>" download>Download</a> </p>

<h5 class="mt-4">Kirim berkas ke pemohon</h5>
<form method="post" action="<?= base_url("admin/perizinan/submit"); ?>" enctype="multipart/form-data" novalidate class="box">

    <div class="box__input">
        <svg class="box__icon" xmlns="http://www.w3.org/2000/svg" width="50" height="43" viewBox="0 0 50 43">
            <path d="M48.4 26.5c-.9 0-1.7.7-1.7 1.7v11.6h-43.3v-11.6c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v13.2c0 .9.7 1.7 1.7 1.7h46.7c.9 0 1.7-.7 1.7-1.7v-13.2c0-1-.7-1.7-1.7-1.7zm-24.5 6.1c.3.3.8.5 1.2.5.4 0 .9-.2 1.2-.5l10-11.6c.7-.7.7-1.7 0-2.4s-1.7-.7-2.4 0l-7.1 8.3v-25.3c0-.9-.7-1.7-1.7-1.7s-1.7.7-1.7 1.7v25.3l-7.1-8.3c-.7-.7-1.7-.7-2.4 0s-.7 1.7 0 2.4l10 11.6z" /></svg>
        <input type="file" name="files" id="file" class="box__file" />
        <!-- <input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple /> -->
        <input type="hidden" value="<?= $surat['surat_id']; ?>" name="surat_id" class="box__file" />
        <label for="file"><strong class="mr-1">Pilih file</strong><span class="box__dragndrop"> atau drag ke sini</span>.</label>
        <button type="submit" class="box__button">Upload</button>
    </div>
    <div class="box__uploading">Uploading&hellip;</div>
    <div class="box__success">Selamat file anda telah terkirim! Mohon tunggu, Data akan segera kami proses.</div>
    <div class="box__error">Error! <span></span>. <a href="<?= base_url("perizinan/submit"); ?>" class="box__restart" role="button">Coba lagi!</a></div>
</form>

<h5 class="mt-5">Tolak Berkas Perizinan</h5>
<form action="<?= base_url("admin/perizinan/reject"); ?>" method="POST">
    <div class="form-group">
        <textarea type="text" class="form-control form-control-user " id="fm_keterangan" name="keterangan" placeholder="Berikan alasan" value="" required="true"></textarea>
    </div>
    <input type="hidden" value="<?= $surat['surat_id']; ?>" name="surat_id" class="box__file" />
    <button type="submit" class="btn btn-primary px-3">Tolak Pengajuan</button>
</form>