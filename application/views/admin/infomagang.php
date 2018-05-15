<div class="content-wrapper">
	<section class="content-header">
		<h1>
			List Info Kerja Praktek
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
			<li><i class="fa fa-building-o active"></i> List Info Magang</li>
		</ol>
	</section>
	<br>
	<div class="container-fluid">
		<div class="box">
			<div class="box-body table-responsive">
				<button class="btn btn-success" style="margin-bottom: 20px" data-toggle="modal" data-target="#listbaru">
					<i class="fa fa-plus" style="font-size:13px"></i>
					Buat List Baru
				</button>
				<table id="datatable" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th width="20%">Nama Institusi</th>
							<th width="20%">Alamat</th>
							<th width="10%">Nomor Telepon</th>
							<th>Bagian</th>
							<th width="20%">Pihak Tertuju</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($info->result_array() as $u):
							$id_perusahaan 		= $u['id_perusahaan'];
							$nama_perusahaan 	= $u['nama_perusahaan'];
							$alamat_perusahaan 	= $u['alamat_perusahaan'];
							$no_telepon 		= $u['no_telepon'];
							$bagian 			= $u['bagian'];
							$pihak_tertuju 		= $u['pihak_tertuju'];
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $nama_perusahaan; ?></td>
								<td><?php echo $alamat_perusahaan; ?></td>
								<td><?php echo $no_telepon; ?></td>
								<td><?php echo $bagian; ?></td>
								<td><?php echo $pihak_tertuju; ?></td>
								<td>
									<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit<?php echo $id_perusahaan;?>"><i class="fa fa-edit" style="font-size:20px"></i></button>
									<a class="btn btn-danger" href="<?php echo site_url('admin/hapusinfomagang/'.$id_perusahaan);?>" ><i class="fa fa-trash" style="font-size:20px"></i>
									</a>
								</td>
							</tr>
							<?php
							endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>


			<!-- Modal Form Buat List Magang -->
			<div class="modal fade" id="listbaru" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Buat List Baru Info Kerja Praktek</h4>
						</div>
						<?php echo form_open('admin/tambahinfomagang',array('class'=>'form','method'=>'post')) ?>	
							<div class="modal-body">
								<div class="form-group col-md-6">
									<label for="namaPerusahaan" class=" control-label">Nama Perusahaan</label>
									<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nomor Telp Perusahaan</label>
									<input type="text" class="form-control" id="no_telepon" onkeypress='validate(event)' name="no_telepon" placeholder="Nomor Telepon Perusahaan">
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Bagian</label>
									<input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian Rekrutmen Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Provinsi</label>
									<select class='form-control' id='provinsi' name="provinsi" required>
										<option value=''>Pilih Provinsi</option>
										<?php 
										foreach ($provinsi as $prov) {
											echo "<option value='$prov[id]'>$prov[nama]</option>";
										}
										?>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kota/Kab</label>
									<select class='form-control' id='kabupaten-kota' name="kota_kabupaten" required>
										<option value=''>Pilih Kabupaten/Kota</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kecamatan</label>
									<select class='form-control' id='kecamatan' name="kecamatan" required>
										<option value=''>Pilih Kecamatan</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kelurahan</label>
									<select class='form-control' id='kelurahan-desa' name="kelurahan" required>
										<option value=''>Pilih Kelurahan</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Kode Pos</label>
									<select class='form-control' id='kodepos' name="kodepos" required>
										<option value=''>Pilih Kode Pos</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Alamat Perusahaan</label>
									<textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Lengkap Perusahaan"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Pihak Tertuju</label>
									<input type="text" class="form-control" id="pihak_tertuju" name="pihak_tertuju" placeholder="Pihak Tertuju">
								</div>
							</div>
							<div class="modal-footer">
								<button type="reset" class="btn btn-default" >Reset</button>
								<input type="submit" class="btn btn-success m-l-100" name="simpan" value="Tambah">
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<!-- End of Buat List Magang -->


			<!-- Modal Form Edit List Magang -->
			<?php
				$no = 1;
				foreach ($info->result_array() as $u):
					$id_perusahaan 		= $u['id_perusahaan'];
					$nama_perusahaan 	= $u['nama_perusahaan'];
					$alamat_perusahaan 	= $u['alamat_perusahaan'];
					$no_telepon 		= $u['no_telepon'];
					$bagian 			= $u['bagian'];
					$kota 				= $u['kota'];
					$kodepos 			= $u['kodepos'];
					$pihak_tertuju 		= $u['pihak_tertuju'];
			?>
			<div class="modal fade" id="modal_edit<?php cetak($id_perusahaan);?>" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit List Info Kerja Praktek</h4>
						</div>
						<form class="form" method="post" action="<?php echo base_url("admin/editinfomagang"); ?>">
							<div class="modal-body">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								<div>
									<input type="hidden" class="form-control" id="id_perusahaan" name="id_perusahaan" value="<?php cetak($id_perusahaan); ?>">
								</div>
								<div class="form-group col-md-6">
									<label for="namaPerusahaan" class=" control-label">Nama Perusahaan</label>
									<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?php cetak($nama_perusahaan); ?>">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nomor Telp Perusahaan</label>
									<input type="text" class="form-control" id="no_telepon" onkeypress='validate(event)' name="no_telepon" value="<?php cetak($no_telepon); ?>">
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Bagian</label>
									<input type="text" class="form-control" id="bagian" name="bagian" value="<?php cetak($bagian); ?>">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Alamat</label>
									<input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" value="<?php cetak($alamat_perusahaan); ?>">
								</div>								<div class="form-group col-md-6">
									<label class="control-label">Kota</label>
									<input type="text" class="form-control" id="kota" name="kota" value="<?php cetak($kota); ?>">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kode Pos</label>
									<input type="text" class="form-control" id="kodepos" name="kodepos" onkeypress='validate(event)' value="<?php cetak($kodepos); ?>">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Pihak Tertuju</label>
									<input type="text" class="form-control" id="pihak_tertuju" name="pihak_tertuju" value="<?php cetak($pihak_tertuju); ?>">
								</div>
							</div>
							<div class="modal-footer text-center">
								<input type="submit"  class="btn btn-info m-l-100" name="simpan" value="Ubah">
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			<!-- End of Edit List Magang -->
		</div>
	</div>
<!-- </div> -->