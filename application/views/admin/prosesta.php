         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Tugas Akhir
              <medium class="label label-warning">Proses</medium>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li><i class="fa fa-book"></i> Surat Tugas Akhir</li>
              <li class="active"><i class="fa fa-table"></i> Tabel Tugas Akhir</li>
            </ol>
          </section>
           <!-- /.box -->
                
          <!-- Main content -->
          <section class="content">
            <?php if ($this->session->flashdata('info')): ?>
                 <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i>Info</h4>
                  Berhasil Merubah Status Tugas Akhir menjadi Finish
                </div>  
            <?php endif ?>
            <div class="row">
              <div class="box">
                  <!-- /<div class="bo">/div>x-header -->
                  <div class="box-body table-responsive">
                    <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th width="20px">No.</th>
                          <th>Nomor Surat</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>E-Mail</th>
                          <th>Program Studi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($suratsi as $vsi): ?>
                          <tr>
                            <td><?php cetak($no++);?></td>
                            <td><?php cetak($vsi->no_surat);?></td>
                            <td><?php cetak($vsi->nim)?></td>
                            <td><?php cetak($vsi->nama_mahasiswa)?></td>
                            <td><?php cetak($vsi->email)?></td>
                            <td><?php cetak($vsi->prodi)?></td>
                            <td>
                              <button class="btn btn-success col-sm-10" data-href="<?=site_url("surat/ubahFinishta/$vsi->id_surat")?>" data-toggle="modal" data-target="#confirm" >
                               <span class="fa fa-check"></span> Finish
                              </button>
                              <a class="btn btn-primary col-sm-10 btn-finish"  target="_blank" href="<?=site_url("admin/printTA/$vsi->id_surat")?>">Print <span class="glyphicon glyphicon-print"></span></a>
                             
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                      </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
              <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <!-- /<div class="bo">/div>x-header -->
                  <div class="box-body table-responsive">
                    <table id="datatable2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th width="20px">No.</th>
                          <th>Nomor Surat</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>E-Mail</th>
                          <th>Program Studi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; ?>
                        <?php foreach ($suratti as $vti): ?>
                          <tr>
                            <td><?php cetak($no++);?></td>
                            <td><?php cetak($vti->no_surat);?></td>
                            <td><?php cetak($vti->nim)?></td>
                            <td><?php cetak($vti->nama_mahasiswa)?></td>
                            <td><?php cetak($vti->email)?></td>
                            <td><?php cetak($vti->prodi)?></td>
                            <td>
                              <button class="btn btn-success col-sm-10" data-href="<?=site_url("surat/ubahFinishta/$vti->id_surat")?>" data-toggle="modal" data-target="#confirm" >
                               <span class="fa fa-check"></span> Finish
                              </button>
                              <a class="btn btn-primary col-sm-10 btn-finish"  target="_blank" href="<?=site_url("admin/printTA/$vti->id_surat")?>">Print <span class="glyphicon glyphicon-print"></span></a>
                             
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                      </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
        
            <!-- /.row -->
          </section>
          <!-- /.content -->
        </div>
      </body>

<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                </div>
            
                <div class="modal-body">
                    <p>Apakah anda yakin ingin mengubah dari proses ke finish</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-ok">Konfirmasi</a>
                </div>
            </div>
        </div>
    </div>