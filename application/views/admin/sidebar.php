<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/image/logoadmin.png')?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username');?></p>
        <i class="fa fa-circle text-success"></i> Online 
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGASI UTAMA</li>
      <!-- isi side bar navigation -->
      <!-- Menu Dashboard -->
      <li class="<?php if($this->uri->segment(2)==""){echo 'active';}?>">
        <a href="<?php echo site_url('admin')?>">
          <i class="fa fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>
      <!-- Menu Surat Kerja Praktek -->
      <li class="treeview <?php if($this->uri->segment(2)=="waitingkp" OR $this->uri->segment(2)=="tolakemailkp"){ echo 'active waiting-active';} else if($this->uri->segment(2)=="finishkp"){echo 'active finish-active';} else if ($this->uri->segment(2)=="proseskp"){echo 'active proses-active';} else if ($this->uri->segment(2)=="tolakkp"){echo 'active tolak-active';} else if($this->uri->segment(2)=="takekp"){echo 'active take-active';}?>">
        <a href="#">
          <i class="fa fa-building-o"></i>
          <span>Surat Kerja Praktek</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(2)=="waitingkp" OR $this->uri->segment(2)=="tolakemailkp"){ echo 'active waiting-active ';} ?>"><a href="<?php echo site_url('admin/waitingkp') ?>"><i class="fa fa-spinner"></i> Menunggu</a></li>
          <li class="<?php if($this->uri->segment(2)=="proseskp"){echo 'active proses-active';} ?>"><a href="<?php echo site_url('admin/proseskp') ?>"><i class="fa fa-pencil"></i> Proses</a></li>
          <li class="<?php if($this->uri->segment(2)=="finishkp"){ echo 'active finish-active';} ?>"><a href="<?php echo site_url('admin/finishkp') ?>"><i class="fa fa-check"></i> Selesai</a></li>
          <li class="<?php if($this->uri->segment(2)=="takekp"){echo 'active take-active';}?>"><a href="<?php echo site_url('admin/takekp') ?>"><i class="fa fa-external-link"></i> Terima</a></li>
          <li class="<?php if($this->uri->segment(2)=="tolakkp"){echo 'active tolak-active';}?>"><a href="<?php echo site_url('admin/tolakkp') ?>"><i class="fa fa-file-o"></i> Arsip Penolakan</a></li>
        </ul>
      </li>
      <!-- Menu Surat Sidang -->
      <li class="treeview <?php if($this->uri->segment(2)=="waitingta" OR $this->uri->segment(2)=="tolakemailta"){ echo 'active waiting-active';} else if($this->uri->segment(2)=="finishta"){ echo 'active finish-active';} else if ($this->uri->segment(2)=="prosesta"){echo 'active proses-active';} else if ($this->uri->segment(2)=="tolakta"){echo 'active tolak-active';} else if($this->uri->segment(2)=="taketa"){echo 'active take-active';}?>">
        <a href="#">
          <i class="fa fa-book"></i><span>Surat Tugas Akhir</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(2)=="waitingta" OR $this->uri->segment(2)=="tolakemailta"){ echo 'active waiting-active';}?>"><a href="<?php echo site_url('admin/waitingta') ?>"><i class="fa fa-spinner"></i> Menunggu</a></li>
          <li class="<?php if($this->uri->segment(2)=="prosesta"){echo 'active proses-active';} ?>"><a href="<?php echo site_url('admin/prosesta')?>"><i class="fa fa-pencil"></i> Proses</a></li>
          <li class="<?php if($this->uri->segment(2)=="finishta"){echo 'active finish-active';} ?>"><a href="<?php echo site_url('admin/finishta')?>"><i class="fa fa-check"></i> Selesai</a></li>
          <li class="<?php if($this->uri->segment(2)=="taketa"){echo 'active take-active';} ?>"><a href="<?php echo site_url('admin/taketa')?>"><i class="fa fa-external-link"></i> Terima</a></li>
          <li class="<?php if($this->uri->segment(2)=="tolakta"){echo 'active tolak-active';}?>"><a href="<?php echo site_url('admin/tolakta')?>"><i class="fa fa-file-o"></i> Arsip Penolakan</a></li>
        </ul>
      </li>
      <!-- Menu untuk setting dosen -->
      <li class="<?php if($this->uri->segment(2)=="koordinatorsetting" OR $this->uri->segment(2)=="koordinatorupdate"){echo 'active';}?>">
        <a href="<?php echo site_url('admin/koordinatorsetting') ?>">
          <i class="fa fa-user"></i>
          <span>Pengaturan Koordinator</span>
        </a>
      </li>
      <li class="treeview <?php if($this->uri->segment(2)=="teknikinfo" OR $this->uri->segment(2)=="sisteminfo" OR $this->uri->segment(2)=="report"){ echo 'active';}?>">
        <a href="#">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span>Mahasiswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="<?php if($this->uri->segment(2)=="teknikinfo"){echo 'active';}?>"><a href="<?php echo site_url('admin/teknikinfo') ?>"><i class="fa fa-user" aria-hidden="true"></i>Teknik Informatika</a></li>
          <li class="<?php if($this->uri->segment(2)=="sisteminfo"){echo 'active';}?>"><a href="<?php echo site_url('admin/sisteminfo') ?>"><i class="fa fa-user" aria-hidden="true"></i>Sistem Informasi</a></li>
          <li class="<?php if($this->uri->segment(2)=="report"){echo 'active';} ?>"><a href="<?php echo site_url('admin/report') ?>"><i class="fa fa-book" aria-hidden="true"></i>Report Surat Kerja Praktek</a></li>
        </ul>
      </li>
      <?php if ($this->session->userdata('role')=='superadmin'):?>
        <li class="<?php if($this->uri->segment(2)=="tambahakun" OR $this->uri->segment(2)=="tambahakun"){echo 'active';}?>">
          <a href="<?php echo site_url('admin/tambahakun')?>">
            <i class="fa fa-user"></i>
            <span>Tambah Akun Admin</span>
          </a>
        </li>
      <?php endif ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>