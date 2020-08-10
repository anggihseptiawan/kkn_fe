<h5>Edit Panduan</h5>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url("admin/panduan/update/") . $file['panduan_id']; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $file['judul'] ?>" placeholder="masukkan judul" required>
            </div>

            <div class="form-group">
                <label for="judul">Jenis Panduan</label>
                <select class="form-control form-control-user " id="fm_jenis" name="jenis" required="true">
                     <option value="Surat-Keterangan-Ahli-Waris" <?= $file['jenis'] == "Surat-Keterangan-Ahli-Waris" ? "selected" : ""; ?>>Surat Keterangan Ahli Waris</option>
                    <option value="Surat-Keterangan-Domisili" <?= $file['jenis'] == "Surat-Keterangan-Domisili" ? "selected" : ""; ?>>Surat Keterangan Domisili</option>
                    <option value="Surat-Keterangan-Kematian" <?= $file['jenis'] == "Surat-Keterangan-Kematian" ? "selected" : ""; ?>>Surat Keterangan Kematian</option>
                    <option value="Surat-Keterangan-Pindah" <?= $file['jenis'] == "Surat-Keterangan-Pindah" ? "selected" : ""; ?>>Surat Keterangan Pindah</option>
                   
                    <option value="Surat-Keterangan-Tidak-Mampu" <?= $file['jenis'] == "Surat-Keterangan-Tidak-Mampu" ? "selected" : ""; ?>>Surat Keterangan Tidak Mampu</option>
                    <option value="Surat-Keterangan-Usaha" <?= $file['jenis'] == "Surat-Keterangan-Usaha" ? "selected" : ""; ?>>Surat Keterangan Usaha</option>
                    <option value="Surat-Pengantar-Pengurusan-KTP" <?= $file['jenis'] == "Surat-Pengantar-Pengurusan-KTP" ? "selected" : ""; ?>>Surat Pengantar Pengurusan KTP</option>
                </select>
            </div>

            <label for="judul">Upload File</label>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="file">Pilih file...</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>