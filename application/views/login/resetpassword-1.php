 <div class="container-fluid">
     <div class="container">
        <div class="row">
           <div class="col-md-4 col-md-offset-4 box-login">
             <?php echo form_open('login/kirim_reset'); ?> 
              <h3 class="text-center title-login">Masukkan Password Baru</h3>
              <input type="text" name="token" id="token" value="<?php echo $token ?>" hidden>
                <div class="form-group has-feedback">
                  <span class="text-danger"><?=form_error('password')?></span>
                  <input type="password" class="form-control" placeholder="Password Baru" name="password">
                </div>
                <div class="form-group has-feedback">
                  <span class="text-danger"><?=form_error('confirmpassword')?></span>
                  <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
                </div>
              <div class="form-group has-feedback">
                <button class="btn btn-danger btn-block"><b>Ubah Password</b><i class="fas fa-arrow-circle-right pull-right fa-lg"></i></button>
              </div>
           </div>
         </div>
        <?php echo form_close(); ?>
      </div>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
