<?php  if($this->session->flashdata('berhasil')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i>Info</h4>
    Berhasil Mendaftar Surat KP
  </div>
<?php endif; ?>
<?php  if($this->session->flashdata('berhasil')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i>Info</h4>
    Berhasil Mendaftar Surat TA
  </div>
<?php endif; ?>
<section>
<div class="container p-t-30 p-b-30 p-r-30 p-l-30">
  <div class="col-md-12">
    <div class="box box-solid">
      <div class="box-header with-border text-center">
        <i class="fa fa-building fa-2x fa-fw"></i>&nbsp;<span class="font-30">Status Pengajuan Riset KP</span>&nbsp;<i class="fa fa-building fa-2x fa-fw"></i>
      </div>
      <?php $class=""; ?>
      <?php foreach ($statuskp as $value): ?>
        <?php 
        switch ($value->status) {
          case 'Di Tolak':
          $class="label-danger";
          break;
          case 'Menunggu':
          $class="label-primary";
          break;
          case 'Proses':
          $class="label-warning";
          break; 
          case 'Selesai':
          $class="label-success";
          break;     
          case 'Ambil':
          $class="label-terima";
          break;
        }
        ?>
        <div class="box-body m-t-20 m-r-20">
          <dl>
            <div class="col-md-4 text-center">
              <dt style="font-size: 16px;">Nama Mahasiswa</dt>
              <dd><?php cetak($value->nama_mahasiswa)?></dd>
            </div>
            <div class="col-md-4 text-center">
              <dt style="font-size: 16px;">Nama Perusahaan</dt>
              <dd><?php cetak($value->nama_perusahaan)?></dd>  
            </div>
            <div class="col-md-4 text-center">
              <dt style="font-size: 16px;">Tanggal Pengajuan</dt>
              <dd><?php cetak(date('d-M-Y',strtotime($value->tanggal_diajukan)))?></dd>  
            </div>
            <div class="col-md-12 text-center">
              <a class="btn btn-secondary" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1">Lihat Detail</a>
              <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                      <div class="col-md-6">
                        <b>Alamat Perusahaan</b><br>
                        <?php cetak($value->alamat_perusahaan)?>
                      </div>
                      <div class="col-md-6">
                        <b>Orang yang dituju</b><br>
                        <?php cetak($value->orang_dituju)?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center m-t-15">
              <dt style="font-size: 16px;">Status</dt>
              <dd></dd>
              <dd class=<?=$class?> style="text-align: center; color: white; border-radius: 4px; padding: 10px;">
                <?php if ($value->status == 'Ambil'): ?>
                  Sudah Diambil
                  <?php else: ?>  
                    <?php cetak($value->status) ?>
                  <?php endif ?>
                </dd>
              </div>
            </dl>
          </div>
        <?php endforeach ?>
      </div>
    </div>

    <div class="m-t-50 col-md-12">
      <div class="box box-solid">
      <div class="box-header with-border text-center">
        <i class="fa fa-book fa-2x fa-fw"></i>&nbsp;<span class="font-30">Status Pengajuan Riset TA</span>&nbsp;<i class="fa fa-book fa-2x fa-fw"></i>
      </div>
      <?php $class=""; ?>
    <?php foreach ($statusta as $value): ?>
      <?php 
      switch ($value->status) {
        case 'Di Tolak':
        $class="label-danger";
        break;
        case 'Menunggu':
        $class="label-primary";
        break;
        case 'Proses':
        $class="label-warning";
        break; 
        case 'Selesai':
        $class="label-success";
        break;     
        case 'Ambil':
        $class="label-terima";
        break;
      }
      ?>
        <div class="box-body m-t-20 m-r-20">
          <dl>
            <div class="col-md-4 text-center">
              <dt style="font-size: 16px;">Nama Mahasiswa</dt>
              <dd><?php cetak($value->nama_mahasiswa)?></dd>
            </div>
            <div class="col-md-4 text-center">
              <dt style="font-size: 16px;">Nama Perusahaan</dt>
              <dd><?php cetak($value->nama_perusahaan)?></dd>  
            </div>
            <div class="col-md-4 text-center">
              <dt style="font-size: 16px;">Tanggal Pengajuan</dt>
              <dd><?php cetak(date('d-M-Y',strtotime($value->tanggal_diajukan)))?></dd>  
            </div>
            <div class="col-md-12 text-center">
              <a class="btn btn-secondary" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1">Lihat Detail</a>
              <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                      <div class="col-md-6">
                        <b>Alamat Perusahaan</b><br>
                        <?php cetak($value->alamat_perusahaan)?>
                      </div>
                      <div class="col-md-6">
                        <b>Orang yang dituju</b><br>
                        <?php cetak($value->orang_dituju)?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-center m-t-15">
              <dt style="font-size: 16px;">Status</dt>
              <dd></dd>
              <dd class=<?=$class?> style="text-align: center; color: white; border-radius: 4px; padding: 10px;">
                <?php if ($value->status == 'Ambil'): ?>
                  Sudah Diambil
                  <?php else: ?>  
                    <?php cetak($value->status) ?>
                  <?php endif ?>
                </dd>
              </div>
            </dl>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  </section>



<!-- <table class="table table-striped" id="datatable" >
<thead>
    <tr>
      <th>Nama Mahasiswa</th>
      <th>Jenis Surat</th>
      <th>Tanggal Pengajuan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>

    <?php $class=""; ?>
    <?php foreach ($statuskp as $value): ?>
      <?php 
      switch ($value->status) {
        case 'Di Tolak':
        $class="label-danger";
        break;
        case 'Menunggu':
        $class="label-primary";
        break;
        case 'Proses':
        $class="label-warning";
        break; 
        case 'Selesai':
        $class="label-success";
        break;     
        case 'Ambil':
        $class="label-terima";
        break;
      }
      ?>
      <tr>
        <td><?php cetak($value->nama_mahasiswa)  ?></td>
        <td><?php cetak($value->jenis_surat)  ?></td>
        <td><?php cetak(date('d-M-Y',strtotime($value->tanggal_diajukan)))  ?></td>
        <td class=<?=$class?> style="text-align: center; color: white;">
          <?php if ($value->status == 'Ambil'): ?>
            Sudah Diambil
          <?php else: ?>  
            <?php cetak($value->status) ?>
          <?php endif ?>
        </td>
      </tr>
    <?php endforeach ?>

  </tbody>
</table>

<hr>
<hr>

<h1 align="center">STATUS PENGAJUAN RISET TA</h1>
<br>
<br>
<br>
<?php  if($this->session->flashdata('berhasil')): ?>
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i>Info</h4>
    Berhasil Mendaftar Surat TA
  </div>
<?php endif; ?>

<table class="table table-striped" id="datatable2">
  <thead>
    <tr>
      <th>Nama Mahasiswa</th>
      <th>Jenis Surat</th>
      <th>Tanggal Pengajuan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>

    <?php $class=""; ?>
    <?php foreach ($statusta as $value): ?>
      <?php 
      switch ($value->status) {
        case 'Di Tolak':
        $class="label-danger";
        break;
        case 'Menunggu':
        $class="label-primary";
        break;
        case 'Proses':
        $class="label-warning";
        break; 
        case 'Selesai':
        $class="label-success";
        break;     
        case 'Ambil':
        $class="label-terima";
        break;
      }
      ?>
      <tr>
        <td><?php cetak($value->nama_mahasiswa) ?></td>
        <td><?php cetak($value->jenis_surat) ?></td>
        <td><?php cetak(date('d-M-Y',strtotime($value->tanggal_diajukan))) ?></td>
        <td class=<?=$class?> style="text-align: center;">
          <?php if ($value->status == 'Ambil'): ?>
            Sudah Diambil
          <?php else: ?>  
            <?php cetak($value->status) ?>
          <?php endif ?>
        </td>
      </tr>
    <?php endforeach ?>

  </tbody> 
</table> -->