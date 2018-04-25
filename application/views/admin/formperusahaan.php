<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Perusahaan
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('admin') ?>">
                    <i class="fa fa-home"></i> Beranda
                </a>
            </li>
            <li class="active">
                <i class="fa fa-building-o"></i> Tambah Perusahaan
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <center>
                <h4>Form Perusahaan</h4>
            </center>
            <center>
                <form method="post" action="<?php echo base_url("admin/perusahaan"); ?>">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                    <table>
                        <tr>
                            <td style="color:white;">Nama Perusahaan</td>
                            <td>:</td>
                            <td><input type="text" name="nama_perusahaan"></td>
                        </tr>
                        <tr>
                            <td style="color:white;">Alamat Perusahaan</td>
                            <td>:</td>
                            <td><input type="text" name="alamat_perusahaan"></td>
                        </tr>
                        <tr>
                            <td style="color:white;">No. Telpon</td>
                            <td>:</td>
                            <td><input type="text" name="nomortelp_perusahaan"></td>
                        </tr>
                        <tr>
                            <td style="color:white;">Bagian</td>
                            <td>:</td>
                            <td><input type="text" name="bagian"></td>
                        </tr>
                        <tr>
                            <td style="color:white;">Kota</td>
                            <td>:</td>
                            <td><input type="text" name="kota"></td>
                        </tr>
                        <tr>
                            <td style="color:white;">Kode Pos</td>
                            <td>:</td>
                            <td><input type="text" name="kodepos"></td>
                        </tr>
                        <tr>
                            <td style="color:white;">orang yang dapat dihubungi/No. Hp</td>
                            <td>:</td>
                            <td><input type="text" name="orang_yang_dihubungi"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Isi Data Perusahaan dengan Lengkap</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url("admin/perusahaan"); ?>">
                        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="namaPerusahaan" class="col-sm-3 control-label">Nama Perusahaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Alamat Perusahaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" placeholder="Alamat Perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nomor Telp Perusahaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nomortelp_perusahaan" onkeypress='validate(event)' name="nomortelp_perusahaan" placeholder="Nomor Telepon Perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Bagian</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian Rekrutmen Perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kota</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota Perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Kode Pos</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodepos" name="kodepos" onkeypress='validate(event)' placeholder="Kode Pos Perusahaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nomor Kontak</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="namakontak" name="namakontak" placeholder="Nama kontak">
                                </div>
                                <div class="col-sm-5 ">
                                    <div class="input-group">
                                        <span class="input-group-addon">(</span>
                                        <input type="text" class="form-control" id="nomorkontak" onkeypress='validate(event)' name="nomorkontak" placeholder="Nomor yang dapat dihubungi">
                                        <span class="input-group-addon">)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer text-center">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <input type="submit" class="btn btn-info m-l-100" name="simpan" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>