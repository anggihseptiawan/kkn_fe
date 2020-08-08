<h5>Daftar Pemohon</h5>
<div class="list-group">
    <?php if ($pengajuan) : ?>
        <?php foreach ($pengajuan as $key => $value) : ?>
            <?php $user = $this->db->get_where('user', ['user_id' => $value['user_id']])->row_array();
            $user_id = $value['user_id'];
            $surat_id = $value['surat_id']; ?>
            <a href="<?= base_url("admin/perizinan/detail_pengajuan/$user_id/$surat_id"); ?>" class="list-group-item list-group-item-action">
                <div class="descrption float-left">
                    <p class="mb-0"><?= $user['nama_lengkap']; ?></p>
                    <small class="d-block">Jenis : <?= $value['jenis']; ?> </small>
                </div>
                <p class="float-right badge <?= $value['status'] == 0 ? "badge-primary" : "badge-success" ?>"><?= $value['status'] == 0 ? "Menuggu" : "Diterima" ?></p>
            </a>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="alert alert-primary">Belum ada pengajuan</div>
    <?php endif; ?>
</div>