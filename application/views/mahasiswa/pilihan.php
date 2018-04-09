<section style="background:#efefe9; padding: 30px;">
	<div class="container">
		<div class="row">
			<img src="<?php echo base_url('assets/image/UMB.png') ?>" class="img-responsive center-block wow fadeIn" alt="">
			<div class="text-center">
				<h3>Selamat datang, <?php echo $this->session->userdata('nama_mahasiswa');?>!</h3>
				<h3 style="margin-bottom: 20px;">Pilih keperluan yang anda inginkan</h3>
			</div>
			<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" style="margin-bottom: 30px;">
				<div class="btn-group" role="group">
					<button type="button" id="stars" class="btn btn-default button-skp wow fadeInLeft" href="#surat-kp" data-toggle="tab">
						<h4>Surat Kerja Praktek</h4>
					</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" id="stars" class="btn btn-default button-srta wow fadeInRight" href="#riset-ta" data-toggle="tab">
						<h4>Surat Riset Tugas Akhir</h4>
					</button>
				</div>
			</div>
			<div class="container tab-content" style="padding: 20px;">
				<div class="tab-pane fade wow fadeIn" id="surat-kp">
					<div class="container">
						<ul class="timeline">
							<li class="wow bounceInRight">
								<div class="timeline-badge primary" href="#penjelasan" data-toggle="tab"><i class="glyphicon glyphicon-question-sign"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Apa itu Surat Kerja Praktek?</h4>
									</div>
									<div class="timeline-body">
										<p>Surat Kerja Praktek adalah sebuah surat yang dikeluarkan oleh TU Fasilkom dengan tujuan agar mahasiswa yang bersangkutan dapat KP.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted wow bounceInLeft">
								<div class="timeline-badge warning"><i class="glyphicon glyphicon-list-alt"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Apa saja persyaratannya?</h4>
									</div>
									<div class="timeline-body">
										<ol>
											<li>Pastikan sedang mengambil matkul KP</li>
											<li>SKS minimal 110</li>
											<li>Ga boleh jadi beban di kantor</li>
										</ol>
									</div>
								</div>
							</li>
							<li class="wow bounceInRight">
								<div class="timeline-badge danger"><i class="glyphicon glyphicon-user"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Siapa saja yang bisa mendaftar?</h4>
									</div>
									<div class="timeline-body">
										<p> Setiap mahasiswa Universitas Mercu Buana dapat mendaftar. Dari mahasiswa yang mendaftar, dapat mendaftarkan 4 temannya sehingga jumlahnya jadi 5.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted wow bounceInLeft">
								<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Saya sudah memenuhi semua persyaratannya, lalu?</h4>
									</div>
									<div class="timeline-body">
										Kunjungi link ini untuk mendaftar > <a href="<?php echo site_url('mahasiswa/formkp') ?>" class="btn btn-danger dash-btn">Form Surat KP</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-pane fade wow fadeIn" id="riset-ta">
					<div class="container">
						<ul class="timeline">
							<li class="wow bounceInRight">
								<div class="timeline-badge primary" href="#penjelasan" data-toggle="tab"><i class="glyphicon glyphicon-question-sign"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Apa itu Surat Riset Tugas Akhir?</h4>
									</div>
									<div class="timeline-body">
										<p>Surat Kerja Praktek adalah sebuah surat yang dikeluarkan oleh TU Fasilkom dengan tujuan agar mahasiswa yang bersangkutan dapat KP.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted wow bounceInLeft">
								<div class="timeline-badge warning"><i class="glyphicon glyphicon-list-alt"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Apa saja persyaratannya?</h4>
									</div>
									<div class="timeline-body">
										<ol>
											<li>Pastikan sedang mengambil matkul KP</li>
											<li>SKS minimal 110</li>
											<li>Ga boleh jadi beban di kantor</li>
										</ol>
									</div>
								</div>
							</li>
							<li class="wow bounceInRight">
								<div class="timeline-badge danger"><i class="glyphicon glyphicon-user"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Siapa saja yang bisa mendaftar?</h4>
									</div>
									<div class="timeline-body">
										<p> Setiap mahasiswa Universitas Mercu Buana dapat mendaftar. Dari mahasiswa yang mendaftar, dapat mendaftarkan 4 temannya sehingga jumlahnya jadi 5.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted wow bounceInLeft">
								<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
								<div class="timeline-panel" style="background-color: #FFFFFF;">
									<div class="timeline-heading">
										<h4 class="timeline-title">Saya sudah memenuhi semua persyaratannya, lalu?</h4>
									</div>
									<div class="timeline-body">
										Kunjungi link ini untuk mendaftar > <a href="<?php echo site_url('mahasiswa/formkp') ?>" class="btn btn-danger dash-btn">Form Surat KP</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
</div>
</section>