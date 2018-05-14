<!DOCTYPE html>
<html><head>
<style>
  .bg-green{
    background:green;
  }
  .text-blue{
    color: #1976D2;
  }
  .text-white{
    color: white;
  }
  .text-center{
    text-align: center;
  }
  .text-muted{
    color: #34495E;
  }
  .notice{
    background: black;
    color: white;
    padding: 10px ;
    margin-bottom: 20px;
  }

  table{
    margin: 0 auto;
  }

  table td{
    border: 2px solid;
    padding: 0 10px;
  }
</style>
  
</head><body>
<div class="notice text-center">
  Print atau bawa tiket ini untuk ditukarkan dengan Surat Riset Tugas Akhir Yang Anda Ajukan di Tata Usaha
</div>
<br /><br /><br />
  <table>
   <tr>
      <td colspan="3" class="bg-green">
        <h2 class="text-center text-white">
          E SURAT | Tugas Akhir Penelitian
        </h2>
      </td>
    </tr>

    <tr>
      <td>
      <p class="text-blue">Nomor Surat:</p>
        
        <h3 class="text-center text-muted">
          <?=$no_surat?>
        </h3>
      </td>
      <td>
        <p class="text-blue">Nama Mahasiswa:</p>
        
        <h3 class="text-center text-muted">
         <?=$nama_mahasiswa?> -<?=$nim?>
        </h3>
      </td>
      <td>
        <p class="text-blue">Tanggal Diajukan:</p>
        
        <h3 class="text-center text-muted">
          <?=date("d M Y",strtotime($tanggal_diajukan))?> 
        </h3>
      </td>

    </tr>
    <tr>
      <td>
      <p class="text-blue">Nama Perusahaan:</p>
        <h3 class="text-center text-muted">
         <?=$nama_perusahaan?>
       </h3>
      </td>
      <td colspan="2">
        <p class="text-blue">Alamat Perusahaan:</p>
        <h3 class="text-center text-muted">
           <?=$alamat_perusahaan?>
        </h3>
      </td>
    </tr>
  </table>
</body></html>