<h5>Panduan</h5>
<div class="row mt-3">
    <div class="col-md-8">
        <a href="<?= base_url("admin/panduan/add") ?>" class="btn btn-primary mb-2">Tambah Panduan</a>
        <?= $this->session->flashdata("add"); ?>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-primary">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokumen as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?= $key + 1; ?></th>
                            <td><?= $value['judul']; ?></td>
                            <td><?= $value['jenis'] ? str_replace('-', " ", $value['jenis']) : ""; ?></td>
                            <td>
                                <a class="btn btn-info mr-1" href="<?= base_url("admin/panduan/edit/") . $value['panduan_id'] ?>">edit</a>
                                <a class="btn btn-danger" href="<?= base_url("admin/panduan/delete/") . $value['panduan_id'] ?>" onclick="return confirm('Yakin mau dihapus ?');">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>