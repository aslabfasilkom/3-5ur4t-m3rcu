         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
           Setting Koordinator
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><i class="fa fa-building-o"></i> Setting Koordinator</li>     
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
                          <th>No</th>
                          <th>Nik</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Prodi</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        
                      <?php
                      $i=0;
                      foreach($data as $d) {
                        $i++;
                      ?>
          
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $d['nik'];?></td>
                          <td><?php echo $d['nama_dosen'];?></td>
                          <td><?php echo $d['jabatan'];?></td>
                          <td><?php echo $d['prodi'];?></td>
                          <td>
                            <a href="<?php echo base_url()."admin/koordinatorupdate/".$d['nik'];?>" class="btn btn-success">UPDATE</a>
                          </td>
                        </tr>
                       <?php
                     }
                       ?>
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