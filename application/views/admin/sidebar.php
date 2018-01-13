    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('assets/image/UMB.png')?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('username'); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>

          <!-- isi side bar navigation -->

          <!-- Menu Dashboard -->
          <li>
            <a href="<?php echo site_url('admin')?>">
              <i class="fa fa-home"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <!-- Menu Surat Sidang -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-balance-scale"></i>
              <span>Surat Sidang</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin/waitingsidang') ?>"><i class="fa fa-spinner"></i> Waiting</a></li>
              <li><a href="#"><i class="fa fa-pencil"></i> Process</a></li>
              <li><a href="<?php echo site_url('admin/finishsidang') ?>"><i class="fa fa-check"></i> Finish</a></li>
              <li><a href="#"><i class="fa fa-external-link"></i> Take</a></li>
            </ul>
          </li>

          <!-- Menu Surat Kerja Praktek -->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-building-o"></i>
              <span>Surat Kerja Praktek</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url('admin/waitingkp') ?>"><i class="fa fa-spinner"></i> Waiting</a></li>
              <li><a href="#"><i class="fa fa-pencil"></i> Process</a></li>
              <li><a href="<?php echo site_url('admin/finishkp') ?>"><i class="fa fa-check"></i> Finish</a></li>
              <li><a href="#"><i class="fa fa-external-link"></i> Take</a></li>
            </ul>
          </li>

          <!-- Menu untuk setting dosen -->
          <li>
            <a href="<?php echo site_url('admin/koordinatorsetting') ?>">
              <i class="fa fa-user"></i>
              <span>Setting Koordinator</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>