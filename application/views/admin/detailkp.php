asaa<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tabel Kerja Praktek
      <span class="label label-primary">Detail Menunggu</span>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
      <li><i class="fa fa-building-o"></i> Surat Kerja Praktek</li>
      <li class="active"><i class="fa fa-table"></i> Tabel Surat Kerja Praktek</li>
    </ol>
  </section>


  <div class="row">
    <div class="box-body">
      <div class="col-md-4 col-sm-12 col-xs-12">

        <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Pengusul Kerja Praktek</h3>
            </div>
            <!-- Detail Box-->
            <div class="box-body">
              <strong>Tanggal Usul</strong>
              <p class="text-muted"><?=date('d-M-Y',strtotime($surat['tanggal_diajukan']))?></p>
              <hr>
              <strong>NIM</strong>
              <p class="text-muted"><?=$surat['nim']?></p>
              <hr>
              <strong>Nama</strong>
              <p class="text-muted"><?=$surat['nama_mahasiswa']?></p>
              <hr>
              <strong>Program Studi</strong>
              <p><?=$surat['prodi']?></p>
            </div>
          </div>
        </section>
        <!-- </div> -->
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
       <!-- <div class="box-body"> -->
        <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Perusahaan</h3>
            </div>
            <!-- Detail Box-->
            <div class="box-body">
              <strong>Nama Perusahaan</strong>
              <p class="text-muted"><?=$surat['nama_perusahaan']?></p>
              <hr>
              <strong>Alamat Perusahaan</strong>
              <p class="text-muted"><?=$surat['alamat_perusahaan']."<br>".$surat['kota']."-",$surat['kodepos']?> </p>
              <hr>
              <strong>Untuk</strong>
              <p class="text-muted"><?=$surat['orang_dituju']?></p>
              <hr>
              <strong>Jabatan</strong>
              <p class="text-muted"><?=$surat['jabatan_dituju']?></p>
            </div>
          </div>
        </section>
        <!-- </div> -->
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
       <!-- <div class="box-body"> -->
        <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Anggota</h3>
            </div>
            <!-- Detail Box-->
            <div class="box-body">
              <?php foreach ($mahasiswa as $value): ?>
              <strong><?=$value['nim']?></strong>
              <p class="text-muted">
                <?=$value['nama_mahasiswa']?><br>
                <?=$value['nohp']?>
              </p>
              <hr>  
              <?php endforeach ?>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>
</div>
</body>