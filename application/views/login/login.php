<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4 box-login">
        <?php echo form_open('login/ceklogin'); ?>
        <?php if($this->session->flashdata('info')): ?>
          <div class="row">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              Maaf username/nim dan password salah
            </div>
          </div>
        <?php elseif ($this->session->flashdata('info_berhasil')):?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Info</h4>
            Berhasil Mendaftar Akun
          </div>
        <?php elseif($this->session->flashdata('berhasil_reset')): ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Info</h4>
            Berhasil mereset password 
          </div>
        <?php elseif($this->session->flashdata('gagal_reset')): ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i>Info</h4>
            Maaf anda gagal mereset password
          </div>
        <?php endif; ?>
        <a href="<?php echo site_url('') ?>"><img class="img-responsive" src="<?php echo base_url('assets/image/logoesurat7v2kiri.png')?>" alt=""></a>
        <h3 class="text-center title-login">Silahkan Login Dengan menggunakan</h3>
        <h3 class="text-center title-login">NIM/E-MAIL</h3>
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="NIM/email" name="username">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="submit" class="btn btn-primary btn-block" value="Login" />
        </div>
        <div class="form-group has-feedback">
          <a href="<?php echo site_url('login/resetpassword') ?>" class="btn btn-danger btn-block">Lupa Password</a>
        </div>
        <div class="form-group has-feedback">
          <h6 class="text-center title-login">Belum punya akun? silahkan <a class="link-login" href="<?php echo site_url('daftar') ?>">daftar</a></h6>
        </div>
      </div>
    </div>
    <div class="row"></div>
  </div>
  <?php echo form_close(); ?>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
</body>
</html>