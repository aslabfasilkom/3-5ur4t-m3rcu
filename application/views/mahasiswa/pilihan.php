<section style="background:#efefe9; padding: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-bottom: 40px;">
				<h3 class="text-center">E-SURAT DASHBOARD</h3>
				<hr style="border-top: 1px solid #cdcdcd; width: 10%;">
				<br>
				<div class="col-md-4" style="margin-bottom: 30px;">
					<h5><b>Nama :</b></h5>
					<p><i><?=$this->session->userdata('nama_mahasiswa')?></i></p>
					<h5><b>NIM :</b></h5>
					<p><i><?=$this->session->userdata('nim')?></i></p>
					<h5><b>Jurusan :</b></h5>
					<p><i><?=$this->session->userdata('jurusan')?></i></p>
				</div>
				<div class="col-md-4" style="margin-bottom: 20px;border-left: 1px solid #cdcdcd;; border-right: 1px solid #cdcdcd;">
					<h4 class="text-center">DAFTAR SURAT YANG DIAJUKAN</h4>
					<table class="table table-responsive">
						<tr>
							<td>No.</td>
							<td>Nomor Surat</td>
							<td>Status</td>
						</tr>
						<?php $no =1 ;?>
						<?php foreach ($jumlahsuratmhsdiambil as $value): ?>
						<tr>
							<td><?=$no?></td>
							<td><?=$value['no_surat']==NULL ? 'belum ada':$value['no_surat']?></td>
							<td><?=$value['status']?></td>
						</tr>
						<?php endforeach ?>
						
					</table>	
					<button class="btn btn-primary pull-right">Selengkapnya</button>
					<br>
					<br>
					<br>
				</div>
				<div class="col-md-4" style="margin-bottom: 20px; text-align: right;">
					<h4>Jumlah surat yang diajukan :</h4>
					<h1 style="font-size: 50px;"><span class="label label-info"><?=$jumlahdiajukan?></span></h1>
				</div>
			</div>
		</div>
	</div>
<div class="col-md-3"></div>
<div class="col-md-3 pilihanmhskp">
	<div class="panel text-center" style="padding: 20px; background-color: #D3D3D3">
		<a href="#" data-toggle="modal" data-target="#modalkp">
			<i class="fa fa-suitcase" style="font-size:50px"></i>
			<h4>Surat Kerja Praktek</h4>
		</a>
	</div>
</div>
<div class="col-md-3 pilihanmhsta">
	<div href="#" class="panel text-center" style="padding: 20px; background-color: #D3D3D3">
		<a href="#" data-toggle="modal" data-target="#modalta">
			<i class="fa fa-search-plus" style="font-size:50px"></i>
			<h4>Surat Riset Tugas Akhir</h4>
		</a>
	</div>
</div>
<div class="clearfix"></div>
</div>

<div id="modalkp" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Status:
					<?php if ($checkmatkulkp == 0 AND $checktranskripkp ==0 ): ?>
						<span class="label label-danger">BELUM AMBIL</span>
						<?php elseif($checkmatkulkp == 1 AND $checktranskripkp == 0 ): ?> 
							<span class="label label-success">SEDANG AMBIL</span>
							<?php elseif($checkmatkulkp == 1 AND $checktranskripkp == 1 ): ?> 
								<span class="label label-info">SUDAH AMBIL</span>
							<?php endif ?> 
						</h4>
					</div>
					<div class="modal-body" style="padding: 0px 50px 50px 50px;">
						<h4>Apa itu Surat Kerja Praktek?</h4>
						<p><i>Surat Kerja Praktek adalah sebuah surat yang dikeluarkan oleh TU Fasilkom dengan tujuan agar mahasiswa yang bersangkutan dapat Kerja Praktek.</i></p>
						<br>
						<h4>Apa saja persyaratannya?</h4>
						<ol>
							<li>Pastikan sedang mengambil mata kuliah KP</li>
							<li>SKS minimal 110</li>
						</ol>
						<br>
						<h4>Siapa saja yang bisa mendaftar?</h4>
						<p><i>Setiap mahasiswa Universitas Mercu Buana dapat mendaftar. Dari mahasiswa yang mendaftar, dapat mendaftarkan 4 temannya sehingga jumlahnya menjadi 5.</i></p>
						<br>
						<p><i>Apakah anda yakin sudah memenuhi seluruh syarat?</i></p>
					</div>
					<div class="modal-footer">
						<?php if ($checkmatkulkp == 0 AND $checktranskripkp ==0 ): ?>
							<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
							<?php elseif($checkmatkulkp == 1 AND $checktranskripkp == 0 ): ?>
								<a class="btn btn-success" href=<?php echo site_url('mahasiswa/formkp') ?>>Lanjutkan Proses</a>
								<?php elseif($checkmatkulkp == 1 AND $checktranskripkp == 1 ): ?>
									<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>

				<div id="modalta" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Status:
									<?php if ($checkmatkulta == 0 AND $checktranskripta ==0 ): ?>
										<span class="label label-danger">BELUM AMBIL</span>
										<?php elseif($checkmatkulta == 1 AND $checktranskripta == 0 ): ?> 
											<span class="label label-success">SEDANG AMBIL</span>
											<?php elseif($checkmatkulta == 1 AND $checktranskripta == 1 ): ?> 
												<span class="label label-info">SUDAH AMBIL</span>
											<?php endif ?> 
										</h4>
									</div>
									<div class="modal-body" style="padding: 0px 50px 50px 50px;">
										<h4>Apa itu Surat Riset Tugas Akhir?</h4>
										<p><i>Surat Riset Tugas Akhir adalah sebuah surat yang dikeluarkan oleh TU Fasilkom dengan tujuan agar mahasiswa yang bersangkutan dapat izin untuk melakukan Riset untuk Tugas Akhir.</i></p>
										<br>
										<h4>Apa saja persyaratannya?</h4>
										<ol>
											<li>Pastikan sedang mengambil mata kuliah Tugas Akhir</li>
											<li>SKS minimal 138</li>
										</ol>
										<br>
										<h4>Siapa saja yang bisa mendaftar?</h4>
										<p><i>Setiap mahasiswa Universitas Mercu Buana dapat mendaftar. Dari mahasiswa yang mendaftar, dapat mendaftarkan 4 temannya sehingga jumlahnya menjadi 5.</i></p>
										<br>
									</div>
									<div class="modal-footer">
										<?php if ($checkmatkulta == 0 AND $checktranskripta ==0 ): ?>
											<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
											<?php elseif($checkmatkulta == 1 AND $checktranskripta == 0 ): ?>
												<a class="btn btn-success" href=<?php echo site_url('mahasiswa/formta') ?>>Lanjutkan Proses</a
												<?php elseif($checkmatkulta == 1 AND $checktranskripta == 1 ): ?>
													<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
												<?php endif ?>
											</div>
										</div>
									</div>
								</div>

							</div>
						</section>