         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Update Koordinator
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><a href="<?php echo base_url('admin/koordinatorsetting') ?>"><i class="fa fa-building-o"></i> Setting Koordinator</a></li>
              <li class="active"><i class="fa fa-table"></i> Form Update</li>
            </ol>
            <br>
            <div class="alert alert-warning alert-dismissable" class="close" role="alert">Pastikan Masukan Nama dengan <strong>BENAR</strong> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->

                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"></h3>
                    <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/admin/update_data_dosen"; ?>">
                       <input type="hidden" name="nikwhere" value="<?php echo $nik ?>">
                        <div class="form-group" >
                          <label for="nama" class="col-sm-2 control-label">Nama Koordinator</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="nama_dosen" placeholder="Nama Koordinator" value="<?php echo $nama_dosen; ?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nik" class="col-sm-2 control-label" >NIK</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Karyawan"  value="<?php echo $nik; ?>" onkeypress="return no(event)">
                          </div>
                        </div>
                        
                        <div class="form-group">
                           <label for="status" class="col-sm-2 control-label">Prodi</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="prodi" class="form-control" maxlength="8" value="<?php echo $prodi; ?>" readonly >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="nik" class="col-sm-2 control-label">Jabatan</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" name="jabatan" class="form-control" maxlength="8" value="<?php echo $jabatan; ?>" readonly >
                          </div>
                          </div>
                         <div class="form-group">
                          <div class="col-sm-offset-5 col-sm-6">
                            <input type="submit" onclick="return confirm('Apa Anda Yakin?')" class="btn btn-success" value="UPDATE"/>
                          </div>
                        </div>
                        </div>
                    </form>
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
