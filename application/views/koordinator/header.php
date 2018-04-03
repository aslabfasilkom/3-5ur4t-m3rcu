<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?php echo base_url('assets/favicon/site.webmanifest') ?>">
  <link rel="mask-icon" href="<?php echo base_url('assets/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title><?php if($this->uri->segment(2)==""){echo "Dashboard - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="waitingkp"){echo "Menunggu (KP) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="tolakemail"){echo "Tolak (KP) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="proseskp"){echo "Proses (KP) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="finishkp"){echo "Selesai (KP) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="takekp"){echo "Terima (KP) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="tolakkp"){echo "Arsip Penolakan (KP) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="waitingTA"){echo "Menunggu (TA) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="tolakemail"){echo "Tolak (TA) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="prosesTA"){echo "Proses (TA) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="finishTA"){echo "Selesai (TA) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="takeTA"){echo "Terima (TA) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="tolakTA"){echo "Arsip Penolakan (TA) - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="koordinatorsetting"){echo "Pengaturan Koordinator - Admin E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="teknikinfo"){echo "Mahasiswa (TI) - Admin E-Surat Mercu Buana";} 
  else if($this->uri->segment(2)=="sisteminfo"){echo "Mahasiswa (SI) - Admin E-Surat Mercu Buana";} ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris.js/morris.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css">
   <!-- Untuk meng-email yang ditolak -->
   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo site_url('admin')?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>U</b>MB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b> E-Surat</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="<?php echo site_url('login?logout=signout')?>">
                <!-- <img src="<?php echo base_url('assets/image/UMB.png')?>" class="user-image" alt="User Image"> -->
                Keluar
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>