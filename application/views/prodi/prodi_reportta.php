<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Report Riset Tugas Akhir
      <medium class="label label-info">Report</medium>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('prodi') ?>"><i class="fa fa-home"></i> Laporan</a></li>
      <li class="active"><i class="fa fa-book"></i> Laporan Riset Tugas Akhir</li>
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
        </div>
      <?php endif ?>
    </div>
    <div class="col-xs-12">
      <div class="box">
        <div class="container">
          <div class="btngroup" style="margin-top: 200px; margin-bottom: 200px;" >
            <div class="btnatas" style="margin-bottom: 10px;">
              <div class="row">
                <div class="col-md-6 text-center" style="margin-bottom: 10px;"><button class="btn btn-primary btn-lg " data-toggle="modal" data-target="#rekapitulasiModal">Cetak Rekapitulasi</button></div>
                <div class="col-md-6 text-center">
                  <button class="btn btn-default btn-md btn-lg " data-toggle="modal" data-target="#laporanModal">Cetak Laporan Surat</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 text-center" style="margin-bottom: 10px;"><button class="btn btn-success btn-lg" data-toggle="modal" data-target="#laporanJurusanModal">Cetak Laporan Perjurusan</button></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</section>
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
            <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
          </div>
        </div>
        <div class="form-group ">
          <label for="startdate" class="col-md-3 control-label">Sampai Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="finishdate" class="form-control datepicker" placeholder="Tanggal Akhir" required>
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
            <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
          </div>  
        </div>
        <div class="form-group">
          <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal" required>
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

<div class="modal fade" id="laporanJurusanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Laporan Data Surat Perjurusan</h4>
      </div>
      <form action="<?php echo base_url('tester/perjurusan')?>" class="form-horizontal"  method="POST" role="form">
        <div class="form-group">
          <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
          </div>  
        </div>
        <div class="form-group">
          <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
          <div class="col-md-8">
            <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal" required>
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