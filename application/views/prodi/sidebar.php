<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/image/logoadmin.png')?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <!-- nama session untuk prodi --> 
        <p><?php echo $this->session->userdata('username'); ?></p>
        <i class="fa fa-circle text-success"></i> Online 
      </div>
    </div>
    <!-- SIDEBAR -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGASI UTAMA</li>

      <!-- Menu Dashboard -->
      <li class="<?php if($this->uri->segment(2)==""){echo 'active';}?>">
        <a href="<?php echo site_url('prodi')?>">
          <i class="fa fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>
    </ul>
  </section>
</aside>