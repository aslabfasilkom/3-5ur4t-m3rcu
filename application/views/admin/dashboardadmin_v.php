         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Selamat Datang di Halaman Admin E-Surat Mercu
            </h1>
            <ol class="breadcrumb">
              <li class="active"><a href="<?php echo base_url('admin')?>"><i class="fa fa-home"></i> Beranda</a></li>
            </ol>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">

              <!-- Chart Waiting -->
              <div class="col-xs-12 col-md-6 col-sm-12">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Status <span class="label label-primary">Menunggu</span> </h3>
                    <div class="box-tools pull-right">
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-maroon">
                        <div class="inner">
                          <h3><?=$tawaiting?></h3>
                          <p>Tugas Akhir</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-university"></i>
                        </div>
                        <a href="<?php echo base_url('admin/waitingTA') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-light-blue-active">
                        <div class="inner">
                          <h3><?=$kpwaiting?></h3>
                          <p>Kerja Praktek</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-briefcase"></i>
                        </div>
                        <a href="<?php echo base_url('admin/waitingkp') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Akhir Chart Waiting -->

              <!-- Chart Process -->
              <div class="col-xs-12 col-md-6 col-sm-12">
                <div class="box box-warning">
                  <div class="box-header with-border">
                    <h3 class="box-title">Status <span class="label label-warning">Proses</span></h3>
                    <div class="box-tools pull-right">
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-maroon">
                        <div class="inner">
                          <h3><?=$taproses?></h3>
                          <p>Tugas Akhir</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-university"></i>
                        </div>
                        <a href="<?php echo base_url('admin/prosesta') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-light-blue-active">
                        <div class="inner">
                          <h3><?=$kpproses?></h3>
                          <p>Kerja Praktek</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-briefcase"></i>
                        </div>
                        <a href="<?php echo base_url('admin/proseskp') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Akhir Chart Process -->
            <div class="row">

              <!-- Chart Finish -->
              <div class="col-xs-12 col-md-6 col-sm-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">Status <span class="label label-success">Selesai</span></h3>
                    <div class="box-tools pull-right"></div>
                  </div>
                  <div class="box-body">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-maroon">
                        <div class="inner">
                          <h3><?=$tafinish?></h3>
                          <p>Tugas Akhir</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-university"></i>
                        </div>
                        <a href="<?php echo base_url('admin/finishTA') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-light-blue-active">
                        <div class="inner">
                          <h3><?=$kpfinish?></h3>
                          <p>Kerja Praktek</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-briefcase"></i>
                        </div>
                        <a href="<?php echo base_url('admin/finishkp') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Akhir chart finish -->

              <!-- chart take -->
              <div class="col-xs-12 col-md-6 col-sm-12">
                <div class="box box-terima">
                  <div class="box-header with-border">
                    <h3 class="box-title">Status <span class="label label-terima">Terima</span></h3>
                    <div class="box-tools pull-right">
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-maroon">
                        <div class="inner">
                          <h3><?=$tatake?></h3>
                          <p>Tugas Akhir</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-university"></i>
                        </div>
                        <a href="<?php echo base_url('admin/takeTA') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="small-box bg-light-blue-active">
                        <div class="inner">
                          <h3><?=$kptake?></h3>
                          <p>Kerja Praktek</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-briefcase"></i>
                        </div>
                        <a href="<?php echo base_url('admin/takekp') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- akhir chart take -->
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-6 col-sm-12 col-md-offset-3">
                <div class="box box-danger">
                  <div class="box-header with-border">

                    <h3 class="box-title">Status <span class="label label-danger">Arsip Penolakan</span></h3>
                    <div class="box-tools pull-right">
                    </div>
                  </div>
                  <div class="box-body">
                   <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="small-box bg-maroon">
                      <div class="inner">
                        <h3><?=$tatolak ?></h3>
                        <p>Tugas Akhir</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-university"></i>
                      </div>
                      <a href="<?php echo base_url('admin/tolakTA') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="small-box bg-light-blue-active">
                      <div class="inner">
                        <h3><?=$kptolak ?></h3>
                        <p>Kerja Praktek</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-briefcase"></i>
                      </div>
                      <a href="<?php echo base_url('admin/tolakkp') ?>" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Akhir chart finish -->

          </div>

        </section>
      </div>
