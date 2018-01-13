<section class="content-header">
	<h1 class="text-center ">Kerja Praktek</h1>
</section>

<div class="form-horizontal">
	<section class="content container"">
<form class='form-test'>
			<div class="form-group">
				<!-- Jurusan -->
				<label for="jurusan" class="control-label col-md-4 col-xs-3">Jurusan</label>
				<div class="col-md-4 col-xs-8">
			     	<select name="jurusan" id="jurusan" class="form-control" onchange="prodi()" >
			     		<option value="" selected>Pilih Jurusan</option>
			      		<option value="415">Informatika</option>
			      		<option value="418">Sistem Informasi</option>
			      	</select>
		      	</div>
			</div>
		
				

			<div class="form-group">
				<!-- NIM -->
				<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>
				<div class="col-md-1 col-xs-3 col-sm-2">
			 		<input type="text" class="form-control" id="fnim" readonly>
			 	</div>
			 	<div class="col-md-3 col-xs-5 col-sm-6">
			 		<input type="text" class="form-control" name="nim" onkeypress="return no(event)">
			 	</div>
			</div>

			<div class="form-group">
				<!-- Nama -->
			 	<label class="control-label col-md-4 col-xs-3" for="nama">Nama Lengkap</label>
			 	<div class="col-md-4 col-xs-8">
		 			<input type="text" name="nama" class="form-control">
		 		</div>
			</div>

		<div class="box">
			<div class="form-group inline">
				<!-- Nama Perusahaan -->
			 	<label class="col-md-3" for="nomorsurat">Nomor Surat</label>
			 	<div class="col-md-6">
		 			<input type="text" name="nomorsurat" value="<?=$nomorsuratkp?>" class="form-control" readonly>
		 		</div>
			</div>


			<div class="form-group inline">
				<!-- Nama Perusahaan -->
			 	<label class="col-md-3" for="namaperusahaan">Nama Perusahaan yang dituju</label>
			 	<div class="col-md-6">
		 			<input type="text" name="namaperusahaan" class="form-control">
		 		</div>
			</div>

			<div class="form-group inline">
				<!-- Orang yang dituju -->
			 	<label class="col-md-3" for="namaygdituju" >Orang yang Dituju</label>
			 	<div class="col-md-6">
		 			<input type="text" name="namefor" class="form-control">
		 		</div>
			</div>

			<div class="form-group inline">
				<!-- Alamat Perusahaan -->
			 	<label class="col-md-3" for="alamat" >Alamat Perusahaan</label>
			 	<div class="col-md-6">
		 			<input type="text" name="alamat" class="form-control">
		 		</div>
			</div>

			<div class="form-group">
				<!-- Tambahan Orang -->
			 	<label class="col-md-3" for="tambah" >Tambahan Orang (Jika Perlu)</label>
			 	<button class="btn btn-default btn-add" type='button'>tambah</button>
			 </div>
			
			 	<div class="form-group">
					<!-- NIM Tambahan -->
					<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>

					<div class="col-md-1 col-xs-3 col-sm-2">
					 	<input type="text" class="form-control" id="fnimadd" readonly>
				 	</div>

				 	<div class="col-md-3 col-xs-5 col-sm-6">
					 	<input type="text" class="form-control" name="nim" onkeypress="return no(event)">
				 	</div>

				</div>

				<div class="form-group">
					<!-- Nama Tambahan -->
				 	<label class="control-label col-md-offset-1 col-xs-3" for="nama">Nama Lengkap</label>

				 	<div class="col-md-4 col-xs-8">
			 			<input type="text" name="nama" class="form-control" style="margin-bottom: 15px">
			 		</div>

				</div>

			
			</div>
		</div>
		<div class="form-group test">
			<div class="text-center col-md-10">
 				<button class="btn btn-default">Tambah <span class="glyphicon glyphicon-plus"></span></button>
 			</div>
 		</div>

			<div class="form-group">
			 	<!-- Button -->
			 	<div class="col-xs-offset-5">
			 		<button class="btn btn-primary">Submit</button>
			 	</div>
			</div>
		</form>
	</section>
</div>

<script>

  function prodi(){
    var jurusan=document.getElementById("jurusan").value;
    document.getElementById("fnim").value=jurusan;
    document.getElementById("fnimadd").value=jurusan;
  }

  function no(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  }
</script>