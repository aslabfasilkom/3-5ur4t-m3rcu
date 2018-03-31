<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>
		<?php if($this->uri->segment(2)==""){echo "Pilih Surat - E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="lihat"){echo "Status Surat - E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="formkp") {echo "Surat Kerja Praktek - E-Surat Mercu Buana";} ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>">
	<link rel="manifest" href="<?php echo base_url('assets/favicon/site.webmanifest') ?>">
	<link rel="mask-icon" href="<?php echo base_url('assets/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Ionicons/css/ionicons.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">
</head>

<body>
	<nav class="navbar navbar-default" style="background-color:#34495E;">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('') ?>">
					<img class="img-responsive" src="<?php echo base_url('assets/image/logoesurat7v2kiri.png')?>" alt="Home" width="150">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="status" style="color:#F8F9F9">
						<?php echo $this->session->userdata('nama_mahasiswa');?>
					</li>
					<li>
						<a class="status" href="<?php echo site_url('mahasiswa/lihat') ?>">Lihat Status</a>
					</li>
					<li>
						<a class="status keluar " href="<?php echo site_url('login?logout=signout');?>">Keluar</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

