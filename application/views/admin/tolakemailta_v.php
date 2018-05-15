         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Surat Tugas Akhir
              <span class="label label-danger">TOLAK</span>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><i class="fa fa-book"></i> Surat Tugas Akhir</li>
              <li class="active"><i class="fa fa-envelope"></i> Penolakan Surat Kerja Pratek</li>
            </ol>
          </section>

          <section class="content">
            <div class="row">
             <?php echo form_open('surat/kirimpesantolakta'); ?>
              <!-- Send Email -->
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Alasa Penolakan</h3>
                  </div>
                  <div class="box-body">
                    <div class="form-group">
                      <input type="hidden" value="<?=$detailta->id_surat?>" name="id_surat">
                      <input class="form-control" placeholder="To:" name="emaildikirim" value="<?=$detailta->email?>" readonly>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Subject:" name="subjek" value="<?="[ESURAT - NOREPLY] Pengajuan Surat - ".$detailta->nim." - ".$detailta->nama_mahasiswa." - Ditolak"?>" required readonly>
                    </div>
                    <div class="form-group">
                      <input type="text" required name="isipesantolak" placeholder="Admin hanya menuliskan alasan saja dengan singkat tidak perlu menuliskan surat secara format karena sistem sudah otomatis menulis format surat" class="form-control">
                    </div>
                  </div>
                  <div class="box-footer">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                    </div>
                   
                  </div>
                </div>
              </div>
              <?php echo form_close(); ?>
              <!-- Akhir Send Email -->
            </div>
            <!-- /.box-body -->
    </section>
  </div>
</body>
