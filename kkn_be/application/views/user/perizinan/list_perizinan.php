<div class="container-fluid">
    <main class="list_perizinan">
        <div class="card my-4 px-3">
            <h4 class="my-3 font-weight-bold">Daftar Pengajuan Surat Keterangan</h4>
            <div class="list-group">
                <?php if ($pengajuan) : ?>
                    <?php foreach ($pengajuan as $key => $value) : ?>
                        <div class="list-group-item list-group-item-action">
                            <div class="descrption float-left">
                                <p class="mb-0">Pengajuan <span class="font-weight-bold"><?= str_replace('-', ' ', $value['jenis']); ?></span></p>
                                <small class="d-block">Tanggal Pengajuan : <?= $value['created_at']; ?> </small>

                                <?php if ($value['status'] == 1) : ?>
                                    <p class="mb-0">Berkas Pengajuan : <a href="<?= base_url() . str_replace(" ", '_', $value["path_admin"]);  ?>" download>Download disini</a> </p>
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
        </div>
    </main>
</div>