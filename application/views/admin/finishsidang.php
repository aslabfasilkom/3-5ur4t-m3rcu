         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Sidang
              <small>Finish</small>
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
              <div class="col-xs-12">
                <!-- /.box -->

                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Finish Table</h3>
                  </div>
                  <!-- /<div class="bo">/div>x-header -->
                  <div class="box-body">
                    <table id="datatable" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th width="20px">No.</th>
                          <th>Tanggal</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td><?php echo date('d/m/Y');?></td>
                          <td>41xxxxxxxxx</td>
                          <td>Lorem</td>
                          <td>
                            <a class="btn btn-primary col-sm-10 col-sm-offset-1 btn-finish" href="#"><span class="fa fa-check"></span>Take</a>
                          </td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Tanggal</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>
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