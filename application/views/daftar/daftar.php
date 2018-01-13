<div class="container-fluid form-login">
  <div class="row">
    
    <div class="col-md-8  col-xs-12 col-md-8 col-sm-offset-3 col-md-offset-3">
      
      <div class="row">
        <div class="col-md-8">
          <?php if ($this->session->flashdata('info_berhasil')): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>Info</h4>
                Berhasi Mendaftar Akun
            </div>
          <?php elseif($this->session->flashdata('nimsudahada')): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-close"></i>Informasi</h4>
                Maaf akun ini sudah terbuat
            </div>
          <?php endif ?>
          
        </div>
      </div>

      <form class="form-horizontal" action="<?=site_url('daftar') ?>" method="post">
        <div class="form-group">
          <label for="prodi" class="col-sm-2 control-label">Program Studi</label>
          <div class="col-sm-6">
            <span class="text-danger"><?=form_error('prodi')?></span>
            <select name="prodi" class="form-control" id="prodi">
                  <option value="" <?php echo  set_select('prodi', ''); ?> >Pilih Jurusan</option>
                  <option value="418" <?php echo  set_select('prodi', '418'); ?> >Sistem Informasi</option>
                  <option value="415" <?php echo  set_select('prodi', '415'); ?> >Teknik Informatika</option>
             </select>
          </div>
        </div>
        <div class="form-group">
          <label for="nim" class="col-sm-2 control-label">NIM</label>
          <div class="col-sm-6">
            <div class="row">
              <span class="text-danger"><?=form_error('kodenim')?></span>
               <span class="text-danger"><?=form_error('nimmhs')?></span>
              <div class="col-sm-3 col-xs-4">
                <input type="text" class="form-control"  value="<?=set_value('kodenim')?>" id="kodenim" name="kodenim" readonly >
              </div>
              <div class="col-sm-9 col-xs-8">
                <input type="text" class="form-control" id="nim" value="<?=set_value('nimmhs')?>" name="nimmhs" placeholder="NIM" maxlength="8" onkeypress="return no(event)">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-6">
            <span class="text-danger"><?=form_error('nama')?></span>
            <input type="text" class="form-control" id="nama" value="<?=set_value('nama')?>" name="nama" placeholder="Nama Lengkap">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-6">
            <span class="text-danger"><?=form_error('email')?></span>
            <input type="email" class="form-control" id="email" name="email" value="<?=set_value('email')?>" placeholder="Email">
          </div>
        </div>
         <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Re-Email</label>
          <div class="col-sm-6">
            <span class="text-danger"><?=form_error('reemail')?></span>
            <input type="email" class="form-control" id="reemail" name="reemail" placeholder="Re-Email">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-6">
            <span class="text-danger"><?=form_error('password')?></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Re-Password</label>
          <div class="col-sm-6">
            <span class="text-danger"><?=form_error('repassword')?></span>
            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit"  class="btn btn-primary" value="Sign Up">
            <input type="reset" class="btn btn-danger" value="Reset">
          </div>
        </div>
      </form>
      <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 col-md-8 col-xs-8">
         <label class="control-label">Sudah Punya Akun? Silahkan. <a href="<?php echo site_url('login') ?>">Login</a></label>
         <label class="control-label">Admin? <a href="<?php echo site_url('admin') ?>">Admin</a></label>
       </div>
       <div class="col-sm-2"></div>
     </div>
   </div>
   <div class="col-md-2"></div>
 </div>
</div>

