<div class="col-md-12 m-t-20 m-b-20"><?php echo form_open('login/ceklogin'); ?>
<!-- <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none"> -->
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
</div>
<div class="col-md-4" style="margin-top: 0px; border-radius: 0px;">
  <a href="<?php echo site_url('') ?>"><img class="img-responsive" src="<?php echo base_url('assets/image/logoesurat7v2.png')?>" alt="E-Surat" style="margin-right: auto; margin-left: auto; margin-top: 20px;"></a>
  <h3 class="text-center title-login" id="box-login">Silahkan Login Dengan menggunakan</h3>
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
  <div class="form-group has-feedback" style="margin-bottom: 20px;">
    <h5 class="text-center title-login">Belum punya akun? silahkan <a class="link-login" href="<?php echo site_url('daftar') ?>">daftar</a></h5>
  </div>
  <a class="edited-link pull-left" href="<?php echo site_url('') ?>">
    <span class="glyphicon glyphicon-home"></span> Kembali Ke Beranda
  </a>
  <a class="edited-link pull-right" href="<?php echo site_url('infomagang') ?>">
    Info Magang <span class="glyphicon glyphicon-user"></span>
  </a>
  <br>
</div>
<div class="col-md-8" style="padding-bottom: 36px; margin-top: 0px; border-radius: 0px;">
  <h3 class="text-center" style="color: #FFFFFF;">Step Mudah Membuat Surat</h3>
  <br>
  <div class="row">
    <br>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          1
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-globe" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Mengakses web E-Surat</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          2
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-user" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Lakukan Login/Register</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          3
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-duplicate" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Memilih surat yang diperlukan</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <br />
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          4
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-edit" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Mengisi form registrasi</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          5
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-refresh" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Menunggu proses dari TU</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          6
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-envelope" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Menerima e-mail dari E-Surat</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <br />
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          7
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-paste" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Menukarkan kupon ke TU</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          8
        </div>
        <div class="panel-body text-center">
          <span class="glyphicon glyphicon-ok" style="font-size: 40px; margin-bottom: 10px;"></span>
          <p>Selesai! Surat Didapatkan</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default" style="height: 130px; background-color: #37632a;">
        <div class="col-md-1 step-number text-center" style="padding-left: 10px;">
          !
        </div>
        <div class="panel-body text-center edited-link">
          <div data-toggle="modal" data-target="#modalKP" style="cursor: pointer">
            <span class="glyphicon glyphicon-tag" style="font-size: 40px; margin-bottom: 10px;"></span>
            <p>Contoh surat yang sudah jadi</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal KP-->
<div class="modal fade" id="modalKP" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content" style="padding-bottom: 40px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <ul class="nav nav-tabs">
          <li><a data-toggle="tab" href="#suratkp">Surat Kerja Praktek</a></li>
          <li><a data-toggle="tab" href="#suratta">Surat Riset Tugas Akhir</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade in active text-center">
            <br />
            <p>Silahkan pilih menu di atas yang diinginkan</p>
          </div>
          <div id="suratkp" class="tab-pane fade">
            <p>Gambar belum tersedia</p>
          </div>
          <div id="suratta" class="tab-pane fade">
            <img src="<?php echo base_url('assets/image/contoh-kp.jpg') ?>" class="img-responsive center-block wow fadeIn" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
</div>
<?php echo form_close(); ?>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
</body>
</html>