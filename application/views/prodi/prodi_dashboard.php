<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Selamat Datang di Halaman Prodi E-Surat Mercu
    </h1>
    <!-- link breadcumb -->
    <ol class="breadcrumb">
      <li class="active"><a href="<?php echo base_url('prodi')?>"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
  </section>

  <!-- isi content dashboard -->
  <section class="content">
    <div class="row">
      <!-- widget laporan yang berstatus selesai -->
      <div class="col-md-12 col-xs-12 col-sm-12">
        <!-- widget tugas akhir -->
        <div class="row">
          <div class="col-md-4 col-md-push-2 col-sm-12 col-xs-12">
            <div class="small-box bg-teal">
              <div class="inner">
                <!-- jumlah surat ta -->
                <h3>123</h3>
                <p>Laporan Tugas Akhir</p>
              </div>
              <div class="icon">
                <i class="ion ion-university"></i>
              </div>
            </div>
          </div>
          <!-- akhir widget tugas akhir -->

          <!-- widget kerja praktek -->
          <div class="col-md-4 col-md-push-2 col-sm-12 col-xs-12">
            <div class="small-box bg-grey">
              <div class="inner">
                <!-- jumlah surat kp -->
                <h3>123</h3>
                <p>Laporan Kerja Praktek</p>
              </div>
              <div class="icon">
                <i class="ion ion-briefcase"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- tab pilihan pencetakan laporan --> 
        <div class="row">
          <div class="col-md-8 col-md-push-2">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active" style="text-align:center;"><a href="#cetakRekapitulasi" data-toggle="tab"><b>REKAPITULASI</b></a></li>
                <li style="text-align: center;"><a href="#cetakLaporan" data-toggle="tab"><b>LAPORAN SURAT</b></a></li>
              </ul>
              <div class="tab-content">
                <!-- cetak rekapitulasi -->
                <div class="active tab-pane" id="cetakRekapitulasi">
                  <form action="#" class="form-horizontal"  method="POST" role="form">
                    <div class="form-group">
                      <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
                      <div class="col-md-8">
                        <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
                      </div>  
                    </div>
                    <div class="form-group">
                      <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
                      <div class="col-md-8">
                        <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal" required>
                      </div>
                    </div>
                    <div style="text-align: center;">
                      <button type="submit" class="btn bg-teal">Cetak</button>
                    </div>
                  </form>
                </div>
                <!-- akhir cetak rekapitulasi -->
                <!-- cetak laporan -->
                <div class="tab-pane" id="cetakLaporan">
                  <form action="#" class="form-horizontal"  method="POST" role="form">
                    <div class="form-group">
                      <label for="jenislaporan" class="col-md-3 control-label">Jenis Laporan</label>
                      <div class="col-md-8">
                        <select name="jenislaporan" class="form-control" style="border-radius: 4px;" required>
                          <option value=''>Pilih Jenis Laporan</option>
                          <option value="Tugas Akhir">Tugas Akhir</option>
                          <option value="Kerja Praktek">Kerja Praktek</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="startdate" class="col-md-3 control-label">Dari Tanggal</label>
                      <div class="col-md-8">
                        <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal" required>
                      </div>  
                    </div>
                    <div class="form-group">
                      <label for="enddate" class="col-md-3 control-label">Sampai Tanggal</label>
                      <div class="col-md-8">
                        <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal" required>
                      </div>
                    </div>
                    <div style="text-align: center;">
                      <button type="submit" class="btn bg-teal">Cetak</button>
                    </div>
                  </form>
                </div>
                <!-- akhir cetak laporan -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir content dashboard -->
  </div>