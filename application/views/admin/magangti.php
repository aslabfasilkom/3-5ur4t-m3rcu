<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			List Info Magang
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
			<li><i class="fa fa-building-o"></i> List Info Magang</li>
			<li class="active"><i class="fa fa-book"></i> Teknik Informatika</li>
		</ol>
	</section>

	<div class="container-fluid">
		<h4>Teknik Informatika</h4>
		<br />
		<button class="btn btn-success" style="margin-bottom: 20px" data-toggle="modal" data-target="#listbaru">
			<i class="fa fa-plus" style="font-size:13px"></i>
			Buat List Baru
		</button>
		<div class="box">
			<!-- /<div class="bo">/div>x-header -->
				<div class="box-body table-responsive">
					<table id="datatable" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th width="20%">Nama Institusi</th>
								<th width="20%">Alamat/No. Telpon</th>
								<th>Bagian</th>
								<th width="20%">Orang Yang Dapat Dihubungi/No. HP</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>PT. Maju Mundur Tapi Ujungnya Mundur</td>
								<td>Jalan Maju No. 15 (021-5454545)</td>
								<td>System Analyst</td>
								<td>Orang Cakep, S.Kom., M.T (08123456789)</td>
								<td>
									<button class="btn btn-info btn-sm"><i class="fa fa-edit" style="font-size:20px"></i></button>
									<button class="btn btn-danger"><i class="fa fa-trash" style="font-size:20px"></i></button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>PT. Orang Ketiga Dari Mereka</td>
								<td>Jalan Mulu Jadian Kaga No. 2, Kembangan, Jakarta Barat (021-55445544)</td>
								<td>System Administrator</td>
								<td>Orang Ganteng, S.SI., M.M (0876543210)</td>
								<td>
									<button class="btn btn-info btn-sm"><i class="fa fa-edit" style="font-size:20px"></i></button>
									<button class="btn btn-danger"><i class="fa fa-trash" style="font-size:20px"></i></button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>PT. Aslab Fasilkom</td>
								<td>Ruang C-114 (021-5555555)</td>
								<td>Asisten Laboratorium</td>
								<td>Orang Aslab, S.Kom., M.Kom (000000000)</td>
								<td>
									<button class="btn btn-info btn-sm"><i class="fa fa-edit" style="font-size:20px"></i></button>
									<button class="btn btn-danger"><i class="fa fa-trash" style="font-size:20px"></i></button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
			<!-- Form Buat List Magang -->
			<div class="modal fade" id="listbaru" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Buat List Baru Info Magang/Kerja Praktek</h4>
						</div>
						<div class="modal-body">
							<form>
								<label for="nama_institusi">Nama Institusi</label>
								<input type="text" class="form-control" id="nama_institusi" name="nama_institusi" style="margin-bottom: 20px;">
								<label for="alamat_institusi">Alamat</label>
								<input type="text" class="form-control" id="alamat_institusi" name="alamat_institusi" style="margin-bottom: 20px;">
								<label for="no_institusi">No. Telpon Institusi</label>
								<input type="text" class="form-control" id="no_telpon" name="no_institusi" style="margin-bottom: 20px;">
								<label for="bagian">Bagian Yang Dibutuhkan</label>
								<input type="text" class="form-control" id="bagian" name="bagian" style="margin-bottom: 20px;">
								<label for="orang_aktif">Orang Institusi Yang Dapat Dihubungi</label>
								<input type="text" class="form-control" id="orang_aktif" name="orang_aktif" style="margin-bottom: 20px;">
								<label for="telp_org_aktif">No. HP Orang Yang Dapat Dihubungi</label>
								<input type="text" class="form-control" id="telp_org_aktif" name="telp_org_aktif" style="margin-bottom: 20px;">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
						</form>
						</div>
					</div>
			<!-- End of Buat List Magang -->
				</div>
			</div>
		</div>
	</div>