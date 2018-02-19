<div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Kerja Praktek
              <medium class="label label-info">Terima</medium>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><i class="fa fa-building-o"></i> Surat Kerja Praktek</li>
              <li class="active"><i class="fa fa-table"></i> Tabel Surat Kerja Praktek</li>
            </ol>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <?php if ($this->session->flashdata('gagal_tanggal')): ?>
                  <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-close"></i>Info</h4>
                        Maaf tanggal awal harus lebih kecil dari tanggal akhir
                  </div>
                <?php elseif($this->session->flashdata('berhasil_hapus')): ?>
                  <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-close"></i>Info</h4>
                        Berhasil Menghapus Surat Untuk Kerja Praktek
                  </div>
                <?php endif ?>
              </div>
              <div class="col-xs-12">
                <div class="box">
                  <div class="container">
                    <div class="row">
                      <button class="btn btn-primary btn-md " data-toggle="modal" data-target="#rekapitulasiModal">Cetak Rekapitulasi</button>
                      <button class="btn btn-default btn-md " data-toggle="modal" data-target="#laporanModal">Cetak Laporan</button>
                      <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> Hapus </button>

                    </div>
                  </div>
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
                        <?php $no=1; foreach ($surat as $u): ?>
                          <tr>
                            <td><?=$no++?></td>
                            <td><?=date('d-M-Y',strtotime($u->tanggal_diambil))?></td>
                            <td><?=$u->no_surat?></td>
                            <td><?=$u->nim?></td>
                            <td><?=$u->nama_mahasiswa?></td>
                            <td><?=$u->email?></td>
                            <td><?=$u->prodi?></td>
                            <td>
                              <p class="label label-success" style="font-size: 15px">Selesai</p>
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
          </div>
    </section>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data Surat</h4>
          </div>
          <form action="<?php echo base_url('admin/HapusSuratKP')?>" class="form-horizontal"  method="POST" role="form">
                <div class="form-group">
                  <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
                  <div class="col-md-8">
                    <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal">
                  </div>  
                </div>
                <div class="form-group">
                  <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
                  <div class="col-md-8">
                    <input type="text" name="finishdate" class="form-control datepicker" placeholder="Tanggal awal">
                  </div>
                </div>
              <div class="modal-footer">      
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </form>
        </div>
  </div>
</div>    

   

   <div class="modal fade" id="rekapitulasiModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Laporan Untuk Rekapitulasi</h4>
              </div>
                <form action="<?php echo base_url('admin/cetakLAPkp')?>" class="form-horizontal" method="POST" role="form">
                    <div class="form-group">
                      <label for="jurusan" class="col-md-3 control-label">Jurusan</label>
                      <div class="col-md-8">
                        <select name="jurusan" class="form-control" required>
                          <option value=''>Pilih Jurusan</option>
                          <option value="Sistem Informasi">Sistem Informasi</option>
                          <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
                      <div class="col-md-8">
                        <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="startdate" class="col-md-3 control-label">Sampai Tanggal</label>
                      <div class="col-md-8">
                        <input type="text" name="finishdate" class="form-control datepicker" placeholder="Tanggal Akhir">
                      </div>
                    </div>    
                    <div class="modal-footer">      
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
           </div>
      </div>
    </div>    

      
<div class="modal fade" id="laporanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Laporan Data Surat</h4>
          </div>
          <form action="<?php echo base_url('tester/chart')?>" class="form-horizontal"  method="POST" role="form">
                <div class="form-group">
                  <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
                  <div class="col-md-8">
                    <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal">
                  </div>  
                </div>
                <div class="form-group">
                  <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
                  <div class="col-md-8">
                    <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal">
                  </div>
                </div>
              <div class="modal-footer">      
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </form>
        </div>
  </div>
</div> 