<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Tugas Akhir
        <medium class="label label-terima">Terima</medium>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><i class="fa fa-building-o"></i> Surat Tugas Akhir</li>
        <li class="active"><i class="fa fa-table"></i> Tabel Surat Tugas Akhir</li>
      </ol>
    </section>
      <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <div class="box">
         <!-- /<div class="bo">/div>x-header -->
              <div class="box-body table-responsive">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="20px">No.</th>
                      <th>Tanggal</th>
                      <th>Nomor Surat</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>E-Mail</th>
                      <th>Program Studi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($suratsi as $usi): ?>
                    <tr>
                      <td>
                        <?php cetak($no++)?>
                      </td>
                      <td>
                        <?php cetak(date('d-M-Y',strtotime($usi->tanggal_diambil)))?>
                      </td>
                      <td>
                        <?php cetak($usi->no_surat)?>
                      </td>
                      <td>
                        <?php cetak($usi->nim)?>
                      </td>
                      <td>
                        <?php cetak($usi->nama_mahasiswa)?>
                      </td>
                      <td>
                        <?php cetak($usi->email)?>
                      </td>
                      <td>
                        <?php cetak($usi->prodi)?>
                      </td>
                      <td>
                        <p class="label label-success" style="font-size: 15px">Selesai</p>
                      </td>
                      <td align="center">
                        <!-- <button class="label btn label-default m-t--10" data-toggle="modal" data-target="#modal-detail" style="font-size: 16px;">Detail</button> -->
                        <a href="<?php echo site_url("admin/detailta/$usi->id_surat") ?>" class="btn btn-default">Detail</a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
            <!-- /.box -->
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-xs-12">
        <!-- /.box -->
        <div class="box">
              <!-- /<div class="bo">/div>x-header -->
              <div class="box-body table-responsive">
                <table id="datatable2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="20px">No.</th>
                      <th>Tanggal</th>
                      <th>Nomor Surat</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>E-Mail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($suratti as $usi): ?>
                    <tr>
                      <td>
                        <?php cetak($no++)?>
                      </td>
                      <td>
                        <?php cetak(date('d-M-Y',strtotime($usi->tanggal_diambil)))?>
                      </td>
                      <td>
                        <?php cetak($usi->no_surat)?>
                      </td>
                      <td>
                        <?php cetak($usi->nim)?>
                      </td>
                      <td>
                        <?php cetak($usi->nama_mahasiswa)?>
                      </td>
                      <td>
                        <?php cetak($usi->email)?>
                      </td>
                      <td>
                        <?php cetak($usi->prodi)?>
                      </td>
                      <td>
                        <p class="label label-success" style="font-size: 15px">Selesai</p>
                      </td>
                      <td align="center">
                        <!-- <button class="label btn label-default m-t--10" data-toggle="modal" data-target="#modal-detail" style="font-size: 16px;">Detail</button> -->
                        <a href="<?php echo site_url("admin/detailta/$usi->id_surat") ?>" class="btn btn-default">Detail</a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
            <!-- /.box -->
          </div>
        </div>
      </div>
  </section>
</div>    


