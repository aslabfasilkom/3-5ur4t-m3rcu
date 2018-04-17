<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin E-Surat Mercu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?php echo base_url('assets/favicon/site.webmanifest') ?>">
  <link rel="mask-icon" href="<?php echo base_url('assets/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris.js/morris.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css')?>">
   <!-- Untuk meng-email yang ditolak -->
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>

   <h3 class="text-center judul-chart">LAPORAN STATUS SURAT</h3>
   <h3 class="text-center">SISTEM INFORMASI ATAU TEKNIK INFORMATIKA</h3>
   <h3 class="text-center tanggal-chart"><?=date('d-m-Y',strtotime($startdate))?> ~ <?=date('d-m-Y',strtotime($enddate))?></h3>

