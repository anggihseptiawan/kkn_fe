<main>
	<div class="container-fluid mt-3 ">
		<div class="card shadow mb-4 mt-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold ">Surat Keterangan</h6>
			</div>
			<div id="accordion">
				<!-- Surat Keterangan Ahli Waris -->
				<div class="card-header"  id="headingSeven">
						<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseOne">
							<span class="icon">
								  <i class="fas fa-arrow-right"></i>
							</span>
							<span class="text">Surat Keterangan Ahli Waris</span>
						</a>
				</div>
				<div id="collapseSeven" class="collapse " aria-labelledby="headingSeven" data-parent="#accordion">
						<div class="card-body">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
								  <a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules7" role="tab"
									aria-controls="pills-home" aria-selected="true">Persyaratan</a>
								</li>
								<li class="nav-item">
								  <a class="nav-links" id="pills-pelayanan7-tab" data-toggle="pill" href="#pills-pelayanan7" role="tab"
									aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
								</li>
							
								<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Ahli-Waris') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</ul>
							  <div class="tab-content pt-2 pl-1" id="pills-tabContent">
								<div class="tab-pane fade show active content" id="pills-rules7" role="tabpanel" aria-labelledby="pills-rules7-tab">
									<div id="no-more-tables">
										<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Persyaratan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Persyaratan">
													Surat permohonan (7 rangkap)
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Persyaratan">
													Fotokopi KTP para pemohon (ahli waris) menggunakan kertas A4
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Persyaratan">
													Fotokopi kartu keluarga pewaris (almarhum) menggunakan kertas A4
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Persyaratan">
													Fotokopi buku nikah pewaris (almarhum) menggunakan kertas A4
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Persyaratan">
													Keterangan silsilah keluarga ahli waris dari kelurahan
													</td>
												</tr>
												<tr>
													<td data-title="No">6</td>
													<td data-title="Persyaratan">
													Surat keterangan kematian dan penguburan

													</td>
												</tr>
												<tr>
													<td data-title="No">7</td>
													<td data-title="Persyaratan">
													Catatan sipil kematian
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade content" id="pills-pelayanan7" role="tabpanel" aria-labelledby="pills-pelayanan7-tab">
									<div id="no-more-tables">
										<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Mekanisme Pelayanan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Pelayanan">Membawa seluruh persyaratan kepada RT/RW setempat.
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Pelayanan">Meminta surat pengantar kepada RT/RW setempat.
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Pelayanan">Meminta surat keterangan bermaterai ditandatangani oleh seluruh ahli waris disaksikan dan ditandatangani para saksi, yaitu ketua RT dan RW setempat.
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Pelayanan">Pemohon Mengupload berkas pendukung di website pelayanan Kelurahan sesuai persyaratan
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Pelayanan">Isilah formulir permohonan Surat Keterangan Ahli waris pada template berkas yang telah didownload 
													</td>
												</tr>
												<tr>
													<td data-title="No">6</td>
													<td data-title="Pelayanan">Upload formulir yang sudah diisi
													</td>
												</tr>
												<tr>
													<td data-title="No">7</td>
													<td data-title="Pelayanan">Pemohon menunggu verifikasi data
													</td>
												</tr>
												<tr>
													<td data-title="No">8</td>
													<td data-title="Pelayanan">Setelah diverifikasi Surat Keterangan Ahli waris akan diterbitkan dan dapat dicetak
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							  </div>
						</div>
				</div>
				<!-- Surat Keterangan Ahli Waris -->
				<!-- Surat Keterangan Domisili -->
				<div class="card-header"  id="headingFive">
						<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseDomisili" aria-expanded="true" aria-controls="collapseOne">
							<span class="icon">
								  <i class="fas fa-arrow-right"></i>
							</span>
							<span class="text">Surat Keterangan Domisili</span>
						</a>
				</div>
				<div id="collapseDomisili" class="collapse " aria-labelledby="headingFour" data-parent="#accordion">
						<div class="card-body">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
								  <a class="nav-links active" id="pills-rulesdom-tab" data-toggle="pill" href="#pills-rulesdom" role="tab"
									aria-controls="pills-home" aria-selected="true">Persyaratan</a>
								</li>
								<li class="nav-item">
								  <a class="nav-links" id="pills-pelayanandom-tab" data-toggle="pill" href="#pills-pelayanandom" role="tab"
									aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
								</li>
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Domisili') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</ul>
							  <div class="tab-content pt-2 pl-1" id="pills-tabContent">
								<div class="tab-pane fade show active content" id="pills-rulesdom" role="tabpanel" aria-labelledby="pills-rulesdom-tab">
									<div id="no-more-tables">
										<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Persyaratan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Persyaratan">Surat permohonan yang menunjukkan keabsahan dokumen dan data (ditandatangani di atas materai Rp6.000)
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Persyaratan">Surat pengantar dari Ketua RT dan RW yang disesuaikan dengan data pada KTP
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Persyaratan">Surat kuasa jika pengurusan Surat Domisili diwakilkan dengan materai Rp6.000
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Persyaratan">Scan Kartu Tanda Penduduk (KTP) asli 
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Persyaratan">Scan Kartu Keluarga (KK) asli 
													</td>
												</tr>
												<tr>
													<td data-title="No">6</td>
													<td data-title="Persyaratan">Pasfoto berukuran 3x4 
													</td>
												</tr>
												<tr>
													<td data-title="No">7</td>
													<td data-title="Persyaratan">Scan Akta Kelahiran Asli
													</td>
												</tr>
												
											
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade content" id="pills-pelayanandom" role="tabpanel" aria-labelledby="pills-pelayanandom-tab">
									<div id="no-more-tables">
										<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Mekanisme Pelayanan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Pelayanan">Datang ke rumah Ketua RT setempat untuk mendapatkan surat pengantar. Lalu, bawa ke Ketua RW untuk ditandatangani.
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Pelayanan">Pemohon Mengupload berkas pendukung di website pelayanan Kelurahan sesuai persyaratan
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Pelayanan">Isilah formulir permohonan Surat Keterangan Domisili pada template berkas yang telah didownload 
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Pelayanan">Upload formulir yang sudah diisi
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Pelayanan">Pemohon menunggu verifikasi data
													</td>
												</tr>
												<tr>
													<td data-title="No">6</td>
													<td data-title="Pelayanan">Setelah diverifikasi Surat Keterangan Domisili akan diterbitkan dan dapat dicetak
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							  </div>
						</div>
				</div>
				<!-- Surat Keterangan Domisili -->
				<!-- Surat Keterangan Kematian -->
				<div class="card-header" id="headingFour">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Kematian</span>
					</a>
				</div>
				<div id="collapseFour" class="collapse " aria-labelledby="headingFour" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules4-tab" data-toggle="pill" href="#pills-rules4" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan4-tab" data-toggle="pill" href="#pills-pelayanan4" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Kematian') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules4" role="tabpanel" aria-labelledby="pills-rules4-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Bukti kematian : Surat Kematian dari Rumah Sakit</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Kartu Keluarga Asli</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">KTP Asli yang meninggal</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Persyaratan">Fotocopy KTP yang meninggal 2 lembar</td>
											</tr>
											<tr>
												<td data-title="No">6</td>
												<td data-title="Persyaratan">Fotocopy KTP Pelapor 2 lembar</td>
											</tr>
											<tr>
												<td data-title="No">7</td>
												<td data-title="Persyaratan">Fotocopy KTP 2 orang saksi kematian masing - masing 2 lembar</td>
											</tr>
											<tr>
												<td data-title="No">8</td>
												<td data-title="Persyaratan">Fotocopy KARIP (PNS/Pensiuanan) 2 lembar</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan4" role="tabpanel" aria-labelledby="pills-pelayanan4-tab4">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Pemohon diminta surat keterangan kepada ketua RT</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Pelayanan">Pemohon membawa surat pengantar (dari RT) kepada ketua RW untuk di tanda tangani/ di sahkan</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Pemohon mendatangi kantor Keluarahan membawa berkas sessuai persyaratan dan mendapatkan surat kemantian</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Pelayanan">Pemohon mendatangi Kecamatan membawa berkas sesuai persyaratan dan surat kematian dari keluarahan</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Pelayanan">Pemohon membawa berkas sesuai persyaratan yang sudah ditandatangani ke Dinas kependudukan dan Pencatatan Sipil</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Surat Keterangan Kematian -->
				<!-- Surat Keterangan Pindah -->
				<div class="card-header" id="headingThree">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Pindah</span>
					</a>
				</div>
				<div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules3-tab" data-toggle="pill" href="#pills-rules3" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan3-tab" data-toggle="pill" href="#pills-pelayanan3" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Pindah') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules3" role="tabpanel" aria-labelledby="pills-rules3-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><Strong>Persyaratan Pindah Datang Anatarkeluarahan</Strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW tujuan</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat keterangan pindah dari Keluarahan asli</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">KK dan KTP-el (asli dan fotokopi)</td>
											</tr>

											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><Strong>Persyaratan Pindah Datang Antarkecamatan</Strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW tujuan</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat Keterangan pindah dari Kelurahan Asal
												</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Surat Keterangan Pindah dari Kecamatan asal</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat KK dan KTP-el (asli dan fotocopy)</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Persyaratan"><strong>Persyaratan Pindah Datang Antarkota/Provinsi</strong></td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW tujuan</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat Keterangan Pindah dari daerah asal</td>
											</tr>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">KTP-el (asli dan fotokopi)</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan3" role="tabpanel" aria-labelledby="pills-pelayanan3-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Mekanisme Pelayanan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Pelayanan">Pemohon Mengupload berkas pendukung di website pelayanan Kelurahan sesuai persyaratan
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Pelayanan">Isilah formulir permohonan pindah pada template berkas yang telah didownload 
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Pelayanan">Upload formulir yang sudah diisi
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Pelayanan">Pemohon menunggu verifikasi data
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Pelayanan">Setelah diverifikasi SuratKeterangan Pindah tingkat kelurahan akan diterbitkan dan dapat dicetak
													</td>
												</tr>
											</tbody>
										</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Surat Keterangan Pindah -->
				<!-- Surat Keterangan Tidak Mampu -->
				<div class="card-header"  id="headingEight">
						<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseOne">
							<span class="icon">
								  <i class="fas fa-arrow-right"></i>
							</span>
							<span class="text">Surat Keterangan Tidak Mampu</span>
						</a>
					</div>
				<div id="collapseEight" class="collapse " aria-labelledby="headingEight" data-parent="#accordion">
						<div class="card-body">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item">
								  <a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules8" role="tab"
									aria-controls="pills-home" aria-selected="true">Persyaratan</a>
								</li>
								<li class="nav-item">
								  <a class="nav-links" id="pills-pelayanan8-tab" data-toggle="pill" href="#pills-pelayanan8" role="tab"
									aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
								</li>
								<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Tidak-Mampu') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</ul>
							  <div class="tab-content pt-2 pl-1" id="pills-tabContent">
								<div class="tab-pane fade show active content" id="pills-rules8" role="tabpanel" aria-labelledby="pills-rules8-tab">
									<div id="no-more-tables">
										<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Persyaratan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Persyaratan">
													Surat pengantar dan keterangan RT 
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Persyaratan">
													Surat pernyataan tidak mampu yang diketahui RT dan 2 orang saksi 
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Persyaratan">
													Fotocopy KTP dan KK pemohon 
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Persyaratan">
													Fotocopy KTP 2 orang saksi 
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Persyaratan">
													Pas foto rumah yang bersangkutan dari posisi depan dan samping rumah masing-masing ukuran 5R 
													</td>
												</tr>
													
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab-pane fade content" id="pills-pelayanan8" role="tabpanel" aria-labelledby="pills-pelayanan8-tab">
									<div id="no-more-tables">
										<table class="col-md-12 table-bordered table-striped table-condensed cf">
											<thead class="cf">
												<tr>
													<th>No</th>
													<th>Mekanisme Pelayanan</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-title="No">1</td>
													<td data-title="Pelayanan">
													Pemohon Mengupload berkas pendukung di website pelayanan Kelurahan sesuai persyaratan
													</td>
												</tr>
												<tr>
													<td data-title="No">2</td>
													<td data-title="Pelayanan">
													Isilah formulir permohonan Surat Keterangan Tidak Mampu pada template berkas yang telah didownload 
													</td>
												</tr>
												<tr>
													<td data-title="No">3</td>
													<td data-title="Pelayanan">
													Upload formulir yang sudah diisi
													</td>
												</tr>
												<tr>
													<td data-title="No">4</td>
													<td data-title="Pelayanan">
													Pemohon menunggu verifikasi data
													</td>
												</tr>
												<tr>
													<td data-title="No">5</td>
													<td data-title="Pelayanan">
													Setelah diverifikasi Surat Keterangan Tidak Mampu akan diterbitkan dan dapat dicetak
													</td>
												</tr>
												
												
											</tbody>
										</table>
									</div>
								</div>
							  </div>
						</div>
				</div>
				<!-- Surat Keterangan Tidak Mampu -->
				<!-- Surat Keterangan Usaha -->
				<div class="card-header" id="headingTwo">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Keterangan Usaha</span>
					</a>
				</div>
				<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules2" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan2-tab" data-toggle="pill" href="#pills-pelayanan2" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Keterangan-Usaha') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules2" role="tabpanel" aria-labelledby="pills-rules2-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Surat Pengantar RT/RW</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Kartu Tanda Penduduk (KTP) yang masih berlaku (Asli dan fotokopi)</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Fotokopi Kartu Keluarga (KK)</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat Persyaratan atau Permohonan</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan2" role="tabpanel" aria-labelledby="pills-pelayanan2-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Dapatkan surat pengantar dari RT RW setempat, Mendatangi RT RW Setempat untuk minta dibuatkan surat pengantar</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Pelayanan">Mendatangi kantor kelurahan (Kepala Desa), Setelah Mendapatkan surat Pengantar RT RW, kemudian bawalah Surat Pengantar RT RW serta dengan berkas yang lainnya ke kantor kelurahan atau kepala desa. Di sana anda akan diminta untuk mengisi formulir pembuatan surat keterangan usaha. Setelah semua persyaratan anda serahkan maka anda tinggal menunggu SKU jadi.</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Bawa berkas ke kantor kecamatan, Setelah Surat Keterangan Usaha jadi maka langkah selanjutnya anda tinggal membawanya ke kantor kecamatan. SKU tersebut nantinya akan ditandatangani oleh camat dan distempel.</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Surat Keterangan Usaha -->
				<!-- Surat Pengantar Pembuatan KTP -->
				<div class="card-header" id="headingOne">
					<a class="text-primaries btn-icon-split" href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<span class="icon">
							<i class="fas fa-arrow-right"></i>
						</span>
						<span class="text">Surat Pengantar Pengurusan KTP</span>
					</a>
				</div>
				<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-links active" id="pills-rules-tab" data-toggle="pill" href="#pills-rules" role="tab" aria-controls="pills-home" aria-selected="true">Persyaratan</a>
							</li>
							<li class="nav-item">
								<a class="nav-links" id="pills-pelayanan-tab" data-toggle="pill" href="#pills-pelayanan" role="tab" aria-controls="pills-profile" aria-selected="false">Mekanisme Pelayanan</a>
							</li>
							<li class="nav-item">
								<?php
								foreach ($panduan as $key => $value) :
									if ($value['jenis'] == 'Surat-Pengantar-Pengurusan-KTP') : ?>
										<a href="<?= base_url() . str_replace(" ", '_', $value['path']) ?>" class="btn btn-success btn-icon-split ml-3" download="">
											<span class="icon text-white-50">
												<i class="fas fa-arrow-down"></i>
											</span>
											<span class="text">Unduh Template</span>
										</a>
								<?php endif;
								endforeach; ?>
							</li>
						</ul>
						<div class="tab-content pt-2 pl-1" id="pills-tabContent">
							<div class="tab-pane fade show active content" id="pills-rules" role="tabpanel" aria-labelledby="pills-rules-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Persyaratan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Persyaratan">Berusia 17 tahun</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Persyaratan">Surat pengantar dari pihak Rukun Tetangga (RT) dan Rukun Warga (RW)</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Persyaratan">Fotokopi Kartu Keluarga (KK)</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Persyaratan">Surat keterangan pindah dari kota asal, jika anda sudah bukan asli warga setempat</td>
											</tr>
											<tr>
												<td data-title="No">5</td>
												<td data-title="Persyaratan">Surat keterangan pindah dari luar negeri, dan surat ini harus diterbitkan oleh Instansi Pelaksana bagi Warga Negara Indonesia(WNI) yang datang dari luar negeri karena pindah</td>
											</tr>
											<tr>
												<td data-title="No">6</td>
												<td data-title="Persyaratan">Datang langsung ke kantor keluarahan disini pula anda akan diambil fotonya dan melakukan sidik jari</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane fade content" id="pills-pelayanan" role="tabpanel" aria-labelledby="pills-pelayanan-tab">
								<div id="no-more-tables">
									<table class="col-md-12 table-bordered table-striped table-condensed cf">
										<thead class="cf">
											<tr>
												<th>No</th>
												<th>Mekanisme Pelayanan</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td data-title="No">1</td>
												<td data-title="Pelayanan">Fotokopi dokumen yang dibutuhkan</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Pertama setelah mendapatkan semua dokumen yang dibutuhkan. Anda harus menggandakan Pihak kelurahan hanya membutuhkan selembar salinan untuk tiap dokumen, namun sebaiknya Anda memliki dua atau tiga lembar Salinan untuk tiap dokumen</td>
											</tr>
											<tr>
												<td data-title="No">2</td>
												<td data-title="Pelayanan">Datang ke kelurahan</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Anda harus datang sendiri ke Kantor Kelurahan, tidak dapat diwakilkan. Disini anda akan mengambil nomor antrian untuk menunggu dilayani. Biasanya pihak kelurahan membuka layanannya pada jam 08:00 sampai jam 15:00</td>
											</tr>
											<tr>
												<td data-title="No">3</td>
												<td data-title="Pelayanan">Penyerahan Dokumen</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Setelah giliran anda tiba, anda akan menyerahkan salinan dokumen asli. Petugas hanya minta untuk ditunjukkan, tapi mereka akan mengambil salinannya</td>
											</tr>
											<tr>
												<td data-title="No">4</td>
												<td data-title="Pelayanan">Foto dan sidik jari</td>
											</tr>
											<tr>
												<td data-title="No"></td>
												<td data-title="Pelayanan">Setelah penyerahan dokumen, anda akan dipanggil untuk pas foto dan pegambilan sidik jari. Jika semua proses sudah selesaim abda ajab diberikan surat pengantar untuk ditunjukan saat mengambil KTP nanti, Surat ini juga bisa menjadi pengganti kartu identitas sementara selama menunggu pengambilan KTP</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Surat Pengantar Pembuatan KTP -->


			</div>

		</div>


	</div>

</main>