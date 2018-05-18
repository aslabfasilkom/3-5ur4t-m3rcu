<h1 align="center"> STATUS PENGAJUAN SURAT</h1>
<br>
<?php  if($this->session->flashdata('berhasilkp')): ?>
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
  <div class="col-md-12 panel panel-default" style="padding: 20px;">
    <div class="box box-solid">
      <div class="box-header with-border text-center">
        <span class="font-30">Kerja Praktek</span>
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
            <div class="col-md-4">
              <div class="col-md-3">
                <i class="fa fa-user fa-3x fa-fw"></i>
              </div>
              <div class="col-md-9">
                <table>
                  <tr>
                    <td width="50px">Nama</td>
                    <td width="10px;">: </td>
                    <td><?php cetak($value->nama_mahasiswa)?></td>
                  </tr>
                  <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>41514010077</td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-md-4" style="border-left: 1px solid #E0E0E0">
              <div class="col-md-3">
                <i class="fa fa-building fa-3x fa-fw"></i>
              </div>
              <div class="col-md-9">
                <table>
                  <tr>
                    <td width="60px">Instansi</td>
                    <td width="10px;">: </td>
                    <td><?php cetak($value->nama_perusahaan)?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php cetak($value->alamat_perusahaan)?></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-md-4" style="border-left: 1px solid #E0E0E0">
              <div class="col-md-3">
                <i class="fa fa-handshake fa-3x fa-fw"></i>
              </div>
              <div class="col-md-9">
                <table>
                  <tr>
                    <td width="80px">Pengajuan</td>
                    <td width="10px;">: </td>
                    <td><?php cetak(date('d-M-Y',strtotime($value->tanggal_diajukan)))?></td>
                  </tr>
                  <tr>
                    <td>Tertuju</td>
                    <td>:</td>
                    <td><?php cetak($value->orang_dituju)?></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="col-md-12 text-center m-t-15">
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

    <div class="m-t-50 col-md-12 panel panel-default" style="padding: 20px;">
      <div class="box box-solid">
      <div class="box-header with-border text-center">
        <span class="font-30">Riset Tugas Akhir</span>
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
<?php  if($this->session->flashdata('berhasilta')): ?>
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