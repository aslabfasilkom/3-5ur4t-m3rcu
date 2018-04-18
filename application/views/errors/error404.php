<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php if($this->uri->segment(2)==""){echo "Pilih Surat - E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="lihat"){echo "Status Surat - E-Surat Mercu Buana";}
  else if($this->uri->segment(2)=="formkp") {echo "Surat Kerja Praktek - E-Surat Mercu Buana";} ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?php echo base_url('assets/favicon/site.webmanifest') ?>">
  <link rel="mask-icon" href="<?php echo base_url('assets/favicon/safari-pinned-tab.svg') ?>" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/error404.css') ?>">
  <link href='https://fonts.googleapis.com/css?family=Anton|Passion+One|PT+Sans+Caption' rel='stylesheet' type='text/css'>
  <body>
</head>
<body>
    <!-- Content start -->
   <!-- Error Page -->
    <div class="error">
      <div class="container-floud">
        <div class="col-xs-12 ground-color text-center">
          <div class="container-error-404">
            <div class="clip"><div class="shadow"><span class="digit thirdDigit">4</span></div></div>
            <div class="clip"><div class="shadow"><span class="digit secondDigit">0</span></div></div>
            <div class="clip"><div class="shadow"><span class="digit firstDigit">4</span></div></div>
            <div class="msg">X<span class="triangle"></span></div>
          </div>
          <h2 class="h1">Maaf, halaman tidak tersedia!</h2>
          <a href="<?php echo site_url('')?>"><button class="btn btn-danger">Kembali ke Beranda</button></a>
        </div>
      </div>
    </div>
    <!-- Error Page -->
  </body>
  <!-- Content end -->

<!-- </div> -->
<!-- UNTUK HOSTING -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
<!--UNTUK LOCALHOST-->
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.cookie.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/wow.min.js') ?>"></script>
<script>
  function isChecked(checkbox, sub1) {
    document.getElementById(sub1).disabled = !checkbox.checked;
  }
  new WOW().init();

  $(function(){
    $('#datatable').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
  $(function(){
    $('#datatable2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

  $('.btn-add').click(function(){

   var x=
   $( ".form-test" ).append( "" );
 });

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


<script>
  $(window).scroll(function(){
    if($(document).scrollTop() > 300){
      $('nav').addClass('shrink');
    }
    else{
      $('nav').removeClass('shrink');
    }
  });
</script>




<!-- sckrip coba -->


</body>
</html>