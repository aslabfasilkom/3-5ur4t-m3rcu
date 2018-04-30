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
							<th width="20%">Alamat (No.Telpon)</th>
							<th>Bagian</th>
							<th width="20%">Orang Yang Dapat Dihubungi (No. HP)</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($info->result_array() as $u):
							$id_perusahaan = $u['id_perusahaan'];
							$nama_perusahaan = $u['nama_perusahaan'];
							$alamat_perusahaan = $u['alamat_perusahaan'];
							$bagian = $u['bagian'];
							$orang_yang_dihubungi = $u['orang_yang_dihubungi'];
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $nama_perusahaan; ?></td>
								<td><?php echo $alamat_perusahaan; ?></td>
								<td><?php echo $bagian; ?></td>
								<td><?php echo $orang_yang_dihubungi; ?></td>
								<td>
									<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#listedit"><i class="fa fa-edit" style="font-size:20px"></i></button>
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
						<form class="form" method="post" action="<?php echo base_url("admin/tambahinfomagang"); ?>">
							<div class="modal-body">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								<div class="form-group col-md-6">
									<label for="namaPerusahaan" class=" control-label">Nama Perusahaan</label>
									<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nomor Telp Perusahaan</label>
									<input type="text" class="form-control" id="nomortelp_perusahaan" onkeypress='validate(event)' name="nomortelp_perusahaan" placeholder="Nomor Telepon Perusahaan">
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Bagian</label>
									<input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian Rekrutmen Perusahaan">
								</div>
								<div class="form-group col-sm-12">
									<label class="control-label">Alamat Perusahaan</label>
									<textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Lengkap Perusahaan"></textarea>
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kota</label>
									<input type="text" class="form-control" id="kota" name="kota" placeholder="Kota Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kode Pos</label>
									<input type="text" class="form-control" id="kodepos" name="kodepos" onkeypress='validate(event)' placeholder="Kode Pos Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nama Kontak</label>
									<input type="text" class="form-control" id="namakontak" name="namakontak" placeholder="Nama kontak">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nomor Kontak</label>
									<div class="input-group">
										<span class="input-group-addon" value="(">(</span>
										<input type="text" class="form-control" id="nomorkontak" onkeypress='validate(event)' name="nomorkontak" placeholder="Nomor yang dapat dihubungi">
										<span class="input-group-addon" value=")">)</span>
									</div>
								</div>
							</div>
							<div class="modal-footer text-center">
								<button type="reset" class="btn btn-default">Reset</button>
								<input type="submit" class="btn btn-info m-l-100" name="simpan" value="Tambah">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End of Buat List Magang -->


			<!-- Modal Form Edit List Magang -->
			<div class="modal fade" id="listedit" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit List Info Kerja Praktek</h4>
						</div>
						<form class="form" method="post" action="">
							<div class="modal-body">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								<div class="form-group col-md-6">
									<label for="namaPerusahaan" class=" control-label">Nama Perusahaan</label>
									<input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nomor Telp Perusahaan</label>
									<input type="text" class="form-control" id="nomortelp_perusahaan" onkeypress='validate(event)' name="nomortelp_perusahaan" placeholder="Nomor Telepon Perusahaan">
								</div>
								<div class="form-group col-md-12">
									<label class="control-label">Bagian</label>
									<input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian Rekrutmen Perusahaan">
								</div>
								<div class="form-group col-sm-12">
									<label class="control-label">Alamat Perusahaan</label>
									<textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Lengkap Perusahaan"></textarea>
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kota</label>
									<input type="text" class="form-control" id="kota" name="kota" placeholder="Kota Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Kode Pos</label>
									<input type="text" class="form-control" id="kodepos" name="kodepos" onkeypress='validate(event)' placeholder="Kode Pos Perusahaan">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nama Kontak</label>
									<input type="text" class="form-control" id="namakontak" name="namakontak" placeholder="Nama kontak">
								</div>
								<div class="form-group col-md-6">
									<label class="control-label">Nomor Kontak</label>
									<div class="input-group">
										<span class="input-group-addon">(</span>
										<input type="text" class="form-control" id="nomorkontak" onkeypress='validate(event)' name="nomorkontak" placeholder="Nomor yang dapat dihubungi">
										<span class="input-group-addon">)</span>
									</div>
								</div>
							</div>
							<div class="modal-footer text-center">
								<button type="reset" class="btn btn-default">Reset</button>
								<input type="submit" class="btn btn-info m-l-100" name="simpan" value="Ubah">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End of Edit List Magang -->
		</div>
	</div>
<!-- </div> -->