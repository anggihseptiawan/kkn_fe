

 <!-- Content Row -->
 <div class="row">
<!-- Daftar Pengajuan -->
     <div class="col-xl-4 col-lg-5">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan</h6>
                
             </div>
             <!-- Card Body -->
             <div class="card-body">
                
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
             </div>
         </div>
     </div>
     <!-- Panduan -->
     <div class="col-xl-8 col-lg-7">
         <div class="card shadow mb-4">
             <!-- Card Header - Dropdown -->
             <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <h6 class="m-0 font-weight-bold text-primary">Panduan</h6>
                 
             </div>
             <!-- Card Body -->
             <div class="card-body">
                 
            <div class="row mt-3">
                <div class="col-md-12">
                    

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
             </div>
         </div>
     </div>

     
 </div>
