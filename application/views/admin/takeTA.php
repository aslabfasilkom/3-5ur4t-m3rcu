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
          <div class="container">
            <div class="row">
              <button class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal">Cetak Laporan</button>
              <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> Hapus </button>
            </div>
           
            <div class="container">
              <div class="row">
                 <div class="col-md-12">
                  <?php if ($this->session->flashdata('gagal_tanggal')): ?>
                    <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-close"></i>Info</h4>
                          Maaf tanggal awal harus lebih kecil dari tanggal akhir
                    </div>
                  <?php endif ?>
                </div>
               </div>
            </div>
              <!-- /<div class="bo">/div>x-header -->
              <div class="box-body table-responsive">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="20px">No.</th>
                      <th>Tanggal</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>E-Mail</th>
                      <th>Program Studi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </div>
  </section>
</div>    


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Laporan Surat Selesai</h4>
          </div>
          <form action="<?php echo base_url('admin/cetakLAP')?>" method="POST" role="form">
            <div class="form-group col-md-6">
              <label for="startdate">Start Date</label>
              <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal">
            </div>

            <div class="form-group col-md-6">
              <label for="enddate">End Date</label>
              <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal Akhir">
            </div>

            <div class="modal-footer">       
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
      </div>
  </div>
</div>
                