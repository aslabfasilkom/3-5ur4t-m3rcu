<div class="container-fluid image-mahasiswa text-center">
	<div class="container">
		<h3 class="text-center box-notice">Pilih Surat yang ingin Anda ajukan</h3>
		<div class="row" style="padding:80px 0">
			<div class="col-md-4 col-md-offset-1 dash1">
				<div class="row container-fluid">
					<div class="col-md-3">
						<img  align="center" src="https://png.icons8.com/ios/70/ffffff/link-company-parent.png">
					</div>
					<div class="col-md-9">
						<h3 style="color: white">E-Surat Kerja Praktek</h3>
					</div>
				</div>
				<hr style="color: white;border-top: 2px dashed;">
				<!-- <?php if ($checkmatkulkp == 0 AND $checktranskripkp ==0 ): ?>
					<p class="dash-text">
						Maaf anda belum mengambil matkul kerja praktek
					</p>
				<?php elseif($checkmatkulkp == 1 AND $checktranskripkp == 0 ): ?>
					<p class="dash-text">
						Surat untuk membuat pengajuan Kerja Praktek
					</p>
					<a href="<?php echo site_url('mahasiswa/formkp') ?>" class="btn btn-danger dash-btn">PILIH</a>
				<?php elseif($checkmatkulkp == 1 AND $checktranskripkp == 1 ): ?>
					<p class="dash-text">
						Maaf anda sudah mengambil matkul Kerja Praktek
					</p>	
				<?php endif ?> -->
				<p class="dash-text">
						Surat untuk membuat pengajuan Kerja Praktek
					</p>
					<a href="<?php echo site_url('mahasiswa/formkp') ?>" class="btn btn-danger dash-btn">PILIH</a>
			</div>

			<div class="col-md-4 col-md-offset-2 dash2">
				<div class="row container-fluid">
					<div class="col-md-3">
						<img align="center" src="https://png.icons8.com/ios/70/ffffff/school.png">
					</div>
					<div class="col-md-9" align="center">
						<h3 style="color: white">E-Surat Riset TA</h3>
					</div>
				</div>
				<hr style="color: white;border-top: 2px dashed;">
				<!-- <?php if ($checkmatkulta == 0 AND $checktranskripta ==0 ): ?>
					<p class="dash-text">
						Maaf anda belum mengambil matkul kerja praktek
					</p>
				<?php elseif($checkmatkulta == 1 AND $checktranskripta == 0 ): ?>
					<p class="dash-text">
						Surat untuk membuat pengajuan Kerja Praktek
					</p>
					<a href="<?php echo site_url('mahasiswa/formkp') ?>" class="btn btn-danger dash-btn">PILIH</a>
				<?php elseif($checkmatkulta == 1 AND $checktranskripta == 1 ): ?>
					<p class="dash-text">
						Maaf anda sudah mengambil matkul Kerja Praktek
					</p>	
				<?php endif ?> -->
				<p class="dash-text">

						Surat untuk membuat pengajuan Kerja Praktek
					</p>
				<a href="<?php echo site_url('mahasiswa/formkp') ?>" class="btn btn-danger dash-btn">PILIH</a>

					Surat untuk pengajuan riset Tugas Akhir
				</p>
				<a href="<?php echo site_url('mahasiswa/formta') ?>" class="btn btn-danger dash-btn">PILIH</a>

			</div>
		</div>
	</div>
</div>