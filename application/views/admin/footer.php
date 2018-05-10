<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> Alpha-3
	</div>
	<strong>Copyright &copy; 2017-<?php echo date("Y"); ?>
		<a href="http://bit.ly/aslabfasilkom">Aslab Fasilkom</a>.</strong> All rights reserved.
  </footer>
</div>
</body>

<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/sweetalert.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/toast.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script>
	$(function () {
		$('#datatable').DataTable({
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': true
		})

    $('#datatable2').DataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': true,
      'info': true,
      'autoWidth': true
    })

	})
	function no(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
	}
</script>
<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})
</script>
<!-- Untuk meng-email yang ditolak -->
<script>
	$('#confirm').on('show.bs.modal', function (e) {
		$(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
	});
	$('.modal').on('hidden.bs.modal', function () {
		$(this).find('form')[0].reset();
	});
</script>
<script>
	$(document).ready(function () {
		$('.datepicker').datepicker({
			format: 'dd-mm-yyyy'
		});
	});
</script>
<script>
	$('#confirmtolak').on('show.bs.modal', function (e) {
		$(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
	});
</script>
<!-- validasi yang mengambil -->
<script>
	$('#namaPengambil').ready(function () {
		$('#btnKonfirmasiNama').click(function (e) {
			var isValid = /* true */$('input[name=namaPengambil]').val();
			$('input[type="text"]').each(function () {
				if ($.trim($(this).val()) == '') {
					isValid = false;
					$(this).css({
						"border": "1px solid red",
						"background": "#FFCECE"
					});
				} else {
					$(this).css({
						"border": "",
						"background": ""
					});
				}
			});
			if (isValid == false)
				e.preventDefault();
			else
				alert('Telah Diambil Oleh '+isValid);
		});
	});
</script>
<script>
  $(function(){


    $.ajaxSetup({
      type:"POST",
      url: "<?php echo base_url('mahasiswa/select_daerah') ?>",
    });

    $("#provinsi").change(function(){
      var value=$(this).val();
      if(value != 0){
        $.ajax({
          data:{modul:'kabupaten',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kabupaten-kota").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kecamatan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })

      }else{
        $.ajax({
          data:{modul:'kabupaten',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kabupaten-kota").html(respond);
          }
        })

        $.ajax({
          data:{modul:'kecamatan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      } 
    })




    $("#kabupaten-kota").change(function(){
      var value=$(this).val();
      if(value != ""){
        $.ajax({
          data:{modul:'kecamatan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })  
        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }else{
        $.ajax({
          data:{modul:'kecamatan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })

        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }
    })

    $("#kecamatan").change(function(){
      var value=$(this).val();
      if(value !=""){
        $.ajax({
          data:{modul:'kelurahan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }else{
        $.ajax({
          data:{modul:'kelurahan',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      } 
    })


    $("#kelurahan-desa").change(function(){
      var value=$(this).val();
      if(value != ""){
        $.ajax({
          data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }else{
       $.ajax({
        data:{modul:'kodepos',id:value,'<?php echo $this->security->get_csrf_token_name(); ?>' :$.cookie('csrf_cookie')},
        success: function(respond){
          $("#kodepos").html(respond);
        }
      })
     } 
   })

  })
</script>
<script>
  function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
</html>