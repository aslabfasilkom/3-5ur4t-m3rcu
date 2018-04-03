 <?php echo $script_captcha; ?>
 <div class="container-fluid">
     <div class="container">
        <div class="row">
           <div class="col-md-4 col-md-offset-4 box-login">
             <?php echo form_open('login/kirim_email'); ?> 
                <?php if ($this->session->flashdata('email_tidak_ada')): ?>
                  <div class="row">
                      <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          Maaf email yang anda inputkan tidak terdaftar
                      </div>
                  </div>
                <?php elseif($this->session->flashdata('kesalahan')):  ?>   
                  <div class="row">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Maaf terjadi kesalahan pastikan yang anda inputkan sudah benar
                    </div>
                  </div>
                <?php elseif($this->session->flashdata('validasi_captcha')): ?>  
                  <div class="row">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Please check the captcha form
                    </div>
                  </div>
                <?php elseif($this->session->flashdata('cek_email')): ?>
                  <div class="row">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Harap cek email anda kami sudah mengirimkan link reset password untuk anda
                    </div>
                  </div>
                <?php endif; ?>
               <h3 class="text-center title-login">Masukkan Alamat E-Mail Anda</h3>
                <div class="form-group has-feedback">
                  <input type="email" class="form-control" name="email" placeholder="Masukkan Email" name="username" required >
                </div>
                <div class="form-group has-feedback">
                  <?php echo $captcha ?>
                 </div>
              <div class="form-group has-feedback">
                <button class="btn btn-danger btn-block"><b>LANJUT</b><i class="fas fa-arrow-circle-right pull-right fa-lg"></i></button>
              </div>
           </div>
         </div>
        <?php echo form_close(); ?>
      </div>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
