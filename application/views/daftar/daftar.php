<div class="container-fluid form-login">
  <div class="row">
 
    <div class="col-md-8  col-xs-12 col-md-8 col-sm-offset-3 col-md-offset-3">
      <form class="form-horizontal">
        <div class="form-group">
          <label for="prodi" class="col-sm-2 control-label">Program Studi Fasilkom</label>
          <div class="col-sm-6">
            <select class="form-control" name="prodi" id="prodi" >
              <option value="" selected>Pilih Jurusan</option>
              <option value="418">Sistem Infomasi</option>
              <option value="415">Informatika</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="nim" class="col-sm-2 control-label">NIM</label>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-3 col-xs-4">
                <input type="text" class="form-control" value="" id="kodenim" name="kodenim" readonly >
              </div>
              <div class="col-sm-9 col-xs-8">
                <input type="text" class="form-control" id="nim" placeholder="NIM" onkeypress="return no(event)">
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Re-Password</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="repassword" placeholder="Re-Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="signup" class="btn btn-primary">Sign up</button>
            <button type="reset" id="reset" class="btn btn-danger">Reset</button>
          </div>
        </div>
      </form>
      <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 col-md-8 col-xs-8">
         <label class="control-label">Sudah Punya Akun? Silahkan <a href="<?php echo site_url('login') ?>">Login</a></label>
       </div>
       <div class="col-sm-2"></div>
     </div>
   </div>
   <div class="col-md-2"></div>
 </div>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
<script>
  // Event handler for text input
  $('#kodenim').on('input', function() {
    //TODO Getiing option based on input value and setting it as selected
    $('#prodi option:contains(' + this.value + ')').eq(0).prop('selected', true);
  });

  // Event handler for select
  $('#prodi').change(function() {
      // Updating text input based on selected value
      $('#kodenim').val($('option:selected', this).val());
    });

  function no(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  }

</script>

