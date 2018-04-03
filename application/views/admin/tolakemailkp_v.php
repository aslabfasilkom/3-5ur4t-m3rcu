         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Surat Kerja Praktek
              <span class="label label-danger">TOLAK</span>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><i class="fa fa-building"></i> Surat Kerja Pratek</li>
              <li class="active"><i class="fa fa-envelope"></i> Penolakan Surat Kerja Pratek </li>
            </ol>
          </section>

          <section class="content">
            <div class="row">
              <?php echo form_open('surat/kirimpesantolak'); ?>
             <!-- Send Email -->
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Alasan Penolakan</h3>
                  </div>
                  <div class="box-body">
                    <input type="hidden" value="<?=$detailkp->id_surat?>" name="id_surat">
                    <div class="form-group">
                      <input class="form-control" placeholder="To:" name="emaildikirim" value="<?=$detailkp->email?>" readonly>
                    </div>
                    <div class="form-group">
                      <input class="form-control" placeholder="Subject:" name="subjek" required>
                    </div>
                    <div class="form-group">
                      <textarea required id="compose-textarea" name="isipesantolak" class="form-control" style="height: 300px"></textarea>
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
