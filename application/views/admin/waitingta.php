   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Tugas Akhir
        <span class="label label-primary">Menunggu</span>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><i class="fa fa-book"></i> Surat Tugas Akhir</li>
        <li class="active"><i class="fa fa-table"></i> Tabel Tugas Akhir</li>
      </ol>
    </section>

    <section class="content">
       <?php if ($this->session->flashdata('info')): ?>
                 <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i>Info</h4>
                  Berhasil Merubah Status Tugas Akhir menjadi Proses
                </div>  
        <?php elseif($this->session->flashdata('infotolak')): ?>
              <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i>Info</h4>
              Berhasil Merubah Status Tugas Akhir menjadi Tolak
            </div>    
        <?php endif ?>
      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="datatable" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                  foreach ($suratsi as $usi) {
                  ?>
                  <tr>
                    <td><?php cetak($no++); ?></td>
                      <td><?php cetak($usi->tanggal_diajukan); ?></td>
                      <td><?php cetak($usi->nim); ?></td>
                      <td><?php cetak($usi->nama_mahasiswa); ?></td>
                      <td><?php cetak($usi->prodi); ?></td>
                    <td class="col-md-3">
                       
                        <button class="btn btn-primary" data-href="<?=site_url("surat/ubahProsesta/$usi->id_surat")?>" data-toggle="modal" data-target="#confirm" > Proses
                    </button>
                        <a href="<?php echo site_url("admin/detailta/$usi->id_surat") ?>" class="btn btn-default">Detail</a>
                        <a href="<?php echo site_url("admin/tolakemailta/$usi->id_surat") ?>" class="btn btn-danger">Tolak</a>
                    </td>
                  </tr>
                   <?php } ?> 
                  </tbody>
                </table>
              </div>
               <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="datatable2" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;
                  foreach ($suratti as $uti) {
                  ?>
                  <tr>
                    <td><?php cetak($no++); ?></td>
                      <td><?php cetak($uti->tanggal_diajukan); ?></td>
                      <td><?php cetak($uti->nim); ?></td>
                      <td><?php cetak($uti->nama_mahasiswa); ?></td>
                      <td><?php cetak($uti->prodi); ?></td>
                    <td class="col-md-3">
                        <button class="btn btn-primary" data-href="<?=site_url("surat/ubahProsesta/$uti->id_surat")?>" data-toggle="modal" data-target="#confirm" > Proses
                    </button>
                        <a href="<?php echo site_url("admin/detailta/$uti->id_surat") ?>" class="btn btn-default">Detail</a>
                        <a href="<?php echo site_url("admin/tolakemailta/$uti->id_surat") ?>" class="btn btn-danger">Tolak</a>
                    </td>
                  </tr>
                   <?php } ?> 
                  </tbody>
                </table>
              </div>
               <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
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
        <p>Apakah anda yakin ingin mengubah dari waiting ke proses </p>
        <p class="debug-url"></p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary btn-ok">Konfirmasi</a>
      </div>
    </div>
  </div>
</div>

