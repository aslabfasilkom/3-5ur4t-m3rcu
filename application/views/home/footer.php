<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 footer-column">
				<br>
				<div class="row text-center">
					<p>Fakultas Ilmu Komputer</p>
					<p>Universitas Mercu Buana</p>
					<p>Jl. Meruya Selatan No.1 Gedung C Lantai 2</p>
					<br>
					<div>
						<i class="ion-ios-telephone" style="font-size: 25px; vertical-align: middle;"></i>
						<a class="link-dukungan" href="tel:622158408165700">+6221-5840816 ext 5700</a>
					</div>
					<div>
						<i class="ion-ios-email" style="font-size: 25px; vertical-align: middle;"></i>
						<a class="link-dukungan" href="mailto:fasilkom@mercubuana.ac.id">fasilkom@mercubuana.ac.id</a>
					</div>
				</div>
			</div>
			<div class="col-md-4  footer-column">
				<h4 class="text-center">Link Dukungan</h4>
				<div class="row text-center">
					<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
						<a class="link-dukungan" href="http://sisteminformasi.fasilkom.mercubuana.ac.id/" target="_blank">Sistem Informasi</a>
					</div>
					<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
						<a class="link-dukungan" href="http://teknikinformatika.fasilkom.mercubuana.ac.id/" target="_blank">Teknik Informatika</a>
					</div>
				</div>
				<br>
				<div class="row text-center">
					<div class="col-md-12 ">
						<a class="link-dukungan" href="https://elearning.mercubuana.ac.id/" target="_blank">e-Learning Fasilkom</a>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-12 ">
						<a class="link-dukungan" href="https://sia.mercubuana.ac.id/" target="_blank">Sistem Informasi Akademik (SIA)</a>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-12 ">
						<a class="link-dukungan" href="https://sso.mercubuana.ac.id/" target="_blank">SSO Mercubuana</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<h4 class="text-center">Tata Usaha Fasilkom</h4>
				<br>
				<!-- BIKIN LEMOT WEB -->
				<div id="map" style="height: 200px;" class="embed-responsive embed-responsive-16by9 row" style="border-radius: 10px; width: 300px; overflow: hidden;">
					<iframe class="embed-responsive-item" width="300" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ0Yiefk_3aS4RXyefceQBZ18&key=AIzaSyDAVb-cCMXNZST6a_0Opq_C7wLqWdxy1Ic&zoom=18"
					allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="row">
			<h4 class="text-center">
				&copy; 2017 -
				<?php echo date("Y"); ?>
				<a href="http://fasilkom.mercubuana.ac.id/wp-content/uploads/2017/11/struktur-organisasi-aslab.jpg" target="_blank" style="color: #CCDC22; text-decoration:none;">Aslab Fasilkom</a>
			</h4>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- UNTUK HOSTING -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<!--UNTUK LOCALHOST-->
<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/wow.min.js')?>"></script>
<script>
	function isChecked(checkbox, sub1) {
		document.getElementById(sub1).disabled = !checkbox.checked;
	}
	new WOW().init();

	$(function () {
		$('#datatable').DataTable({
			'paging': false,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': true
		})
	})
	$(function () {
		$('#datatable2').DataTable({
			'paging': false,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': true
		})
	})

	$('.btn-add').click(function () {

		var x =
			$(".form-test").append("");
	});

	// Event handler for text input
	$('#kodenim').on('input', function () {
		//TODO Getiing option based on input value and setting it as selected
		$('#prodi option:contains(' + this.value + ')').eq(0).prop('selected', true);
	});

	// Event handler for select
	$('#prodi').change(function () {
		// Updating text input based on selected value
		$('#kodenim').val($('option:selected', this).val());
	});

	function no(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
	}


	$('.form-tambahan').hide();
	$('#anggota').change(function () {


		$('.form-tambahan').hide();
		var total = $(this).val();

		for (var x = total; x <= 5; x++) {
			// $('.ft'+i).show();
			$('#nim' + x).removeAttr('maxLength');
			$('#nim' + x).removeAttr('minlength');
			$('#nim' + x).removeAttr('required');
			$('#nama' + x).removeAttr('required');
			$('#nohp' + x).removeAttr('required');
			$('#nohp' + x).removeAttr('maxLength');
		}


		for (var i = 1; i <= total; i++) {
			$('.ft' + i).show();
			$('#nim' + i).prop({
				'required': true,
				'maxLength': 8,
				'minLength': 8,
			});
			$('#nama' + i).prop('required', true);
			$('#nohp' + i).prop({
				'required': true,
				'maxLength': 13,
			});
		}


	});


	$(function () {
		$.ajaxSetup({
			type: "POST",
			url: "<?php echo base_url('mahasiswa/select_daerah') ?>",
			cache: false,
		});

		$("#provinsi").change(function () {
			var value = $(this).val();
			if (value > 0) {
				$.ajax({
					data: {
						modul: 'kabupaten',
						id: value
					},
					success: function (respond) {
						$("#kabupaten-kota").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kecamatan',
						id: value
					},
					success: function (respond) {
						$("#kecamatan").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function (respond) {
						$("#kelurahan-desa").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kodepos',
						id: value
					},
					success: function (respond) {
						$("#kodepos").html(respond);
					}
				})

			} else {
				$.ajax({
					data: {
						modul: 'kabupaten',
						id: value
					},
					success: function (respond) {
						$("#kabupaten-kota").html(respond);
					}
				})

				$.ajax({
					data: {
						modul: 'kecamatan',
						id: value
					},
					success: function (respond) {
						$("#kecamatan").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function (respond) {
						$("#kelurahan-desa").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kodepos',
						id: value
					},
					success: function (respond) {
						$("#kodepos").html(respond);
					}
				})
			}
		});




		$("#kabupaten-kota").change(function () {
			var value = $(this).val();
			if (value != "") {
				$.ajax({
					data: {
						modul: 'kecamatan',
						id: value
					},
					success: function (respond) {
						$("#kecamatan").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function (respond) {
						$("#kelurahan-desa").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kodepos',
						id: value
					},
					success: function (respond) {
						$("#kodepos").html(respond);
					}
				})
			} else {
				$.ajax({
					data: {
						modul: 'kecamatan',
						id: value
					},
					success: function (respond) {
						$("#kecamatan").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function (respond) {
						$("#kelurahan-desa").html(respond);
					}
				})

				$.ajax({
					data: {
						modul: 'kodepos',
						id: value
					},
					success: function (respond) {
						$("#kodepos").html(respond);
					}
				})
			}
		})

		$("#kecamatan").change(function () {
			var value = $(this).val();
			if (value != "") {
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function (respond) {
						$("#kelurahan-desa").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kodepos',
						id: value
					},
					success: function (respond) {
						$("#kodepos").html(respond);
					}
				})
			} else {
				$.ajax({
					data: {
						modul: 'kelurahan',
						id: value
					},
					success: function (respond) {
						$("#kelurahan-desa").html(respond);
					}
				})
				$.ajax({
					data: {
						modul: 'kodepos',
						id: value
					},
					success: function (respond) {
						$("#kodepos").html(respond);
					}
				})
			}
		})
	})

	$("#kelurahan-desa").change(function () {
		var value = $(this).val();
		if (value != "") {
			$.ajax({
				data: {
					modul: 'kodepos',
					id: value
				},
				success: function (respond) {
					$("#kodepos").html(respond);
				}
			})
		} else {
			$.ajax({
				data: {
					modul: 'kodepos',
					id: value
				},
				success: function (respond) {
					$("#kodepos").html(respond);
				}
			})
		}
	})

</script>
<script>
	$(window).scroll(function () {
		if ($(document).scrollTop() > 300) {
			$('nav').addClass('shrink');
		} else {
			$('nav').removeClass('shrink');
		}
	});

</script>




<!-- sckrip coba -->


</body>

</html>
