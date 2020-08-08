<h5>Tambah Panduan</h5>
<div class="row">
    <div class="col-md-6">
        <form action="<?= base_url("admin/panduan/save") ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="masukkan judul" required>
            </div>

            <div class="form-group">
                <label for="judul">Jenis Panduan</label>
                <select class="form-control form-control-user " id="fm_jenis" name="jenis" required="true">
                    <option value="Surat-Keterangan-Ahli-Waris">Surat Keterangan Ahli Waris</option>
                    <option value="Surat-Keterangan-Domisili">Surat Keterangan Domisili</option>
                    <option value="Surat-Keterangan-Kematian">Surat Keterangan Kematian</option>
                    <option value="Surat-Keterangan-Pindah">Surat Keterangan Pindah</option>
                    <option value="Surat-Keterangan-Tidak-Mampu">Surat Keterangan Tidak Mampu</option>
                    <option value="Surat-Keterangan-Usaha">Surat Keterangan Usaha</option>
                    <option value="Surat-Pengantar-Pembuatan-KTP">Surat Pengantar Pembuatan KTP</option>

                </select>
            </div>

            <label for="judul">Upload File</label>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="file" name="file" required>
                <label class="custom-file-label" for="file">Pilih file...</label>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>