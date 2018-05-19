<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>E-Surat Mercu Buana</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo base_url('assets/favicon/site.webmanifest') ?>">
    <link rel="mask-icon" href="<?php echo base_url('assets/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- UNTUK HOSTING
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
      <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> -->
    <!-- UNTUK LOCALHOST -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
    <script defer src="<?php echo base_url('assets/plugins/font-awesome/svg-with-js/js/fontawesome-all.js') ?>"></script>
  </head>
  <body class="body">
  	<nav class="navbar navbar-default" style="background-color:#34495E;border-radius: 0px">
  		<!-- Brand and toggle get grouped for better mobile display -->
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="<?php echo site_url('') ?>"><img class="img-responsive" src="<?php echo base_url('assets/image/logoesurat7v2kiri.png') ?>" alt="Home" width="150"></a>
  			</div>
  			<!-- Collect the nav links, forms, and other content for toggling -->
  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  				<ul class="nav navbar-nav navbar-right">
  					<li><a class="home" href="<?php echo site_url('') ?>">
  						<i class="fa fa-reply"></i> 
  						Kembali Ke Beranda
  					</a>
  				</li>
  			</ul>
  		</div>
  		<!-- /.navbar-collapse -->
  	</div>
  	<!-- /.container-fluid -->
  </nav>
  <div class="container-fluid" style="padding: 20px;">
  	<div class="container">
  		<h3 class="text-center intro">Daftar Perusahaan Partner Universitas Mercu Buana</h3>
  	</div><br><br>
    <h3>Partner Untuk Kerja Praktek</h3>
  	<table class="table table-striped table-bordered table-responsive" id="datatable" style="font-size: 15px;">
  		<thead>
  			<tr>
  				<th>Nama Institusi</th>
  				<th>Alamat</th>
          <th>Nomor Telepon</th>
  				<th>Bagian</th>
  				<th>Pihak Tertuju</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php
  			foreach ($infokp->result_array() as $u):
          $id_perusahaan        = $u['id_perusahaan'];
  				$nama_perusahaan      = $u['nama_perusahaan'];
  				$alamat_perusahaan    = $u['alamat_perusahaan'];
          $no_telepon           = $u['no_telepon'];
          $bagian               = $u['bagian'];
  				$jenis                = $u['jenis'];
          $pihak_tertuju        = $u['pihak_tertuju'];
  				$kodepos              = $u['kodepos'];
  				?>
  				<tr>
  					<td><a href="<?php echo base_url()."mahasiswa/pilihmagangkp/".$kodepos;?>"><?php echo $nama_perusahaan; ?></a></td>
  					<td><?php echo $alamat_perusahaan; ?></td>
            <td><?php echo $no_telepon; ?></td>
  					<td><?php echo $bagian; ?></td>
  					<td><?php echo $pihak_tertuju; ?></td>
  				</tr>
  				<?php
  				endforeach; ?>
  			</tbody>
  		</table>
  		<br><br><br>


    <h3>Partner Untuk Tugas Akhir</h3>
      <table class="table table-striped table-bordered table-responsive" id="datatable" style="font-size: 15px;">
      <thead>
        <tr>
          <th>Nama Institusi</th>
          <th>Alamat</th>
          <th>Nomor Telepon</th>
          <th>Bagian</th>
          <th>Pihak Tertuju</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($infota->result_array() as $u):
          $id_perusahaan        = $u['id_perusahaan'];
          $nama_perusahaan      = $u['nama_perusahaan'];
          $alamat_perusahaan    = $u['alamat_perusahaan'];
          $no_telepon           = $u['no_telepon'];
          $bagian               = $u['bagian'];
          $jenis                = $u['jenis'];
          $pihak_tertuju        = $u['pihak_tertuju'];
          $kodepos              = $u['kodepos'];
          ?>
          <tr>
            <td><a href="<?php echo base_url()."mahasiswa/pilihmagangta/".$kodepos;?>"><?php echo $nama_perusahaan; ?></a></td>
            <td><?php echo $alamat_perusahaan; ?></td>
            <td><?php echo $no_telepon; ?></td>
            <td><?php echo $bagian; ?></td>
            <td><?php echo $pihak_tertuju; ?></td>
          </tr>
          <?php
          endforeach; ?>
        </tbody>
      </table>
      <br><br>
  		<p style="font-size: 10px;"><i>*Untuk info lebih lanjut silahkan hubungi TU Fasilkom</i></p>
  	</div>