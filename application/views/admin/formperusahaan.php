<center><h4 style="color:white;">Form Biodata</h4></center>
 
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
                    <td style="color:white;">Kota</td>
                    <td>:</td>
                    <td><input type="text" name="kota"></td>
                </tr>
                <<tr>
                    <td style="color:white;">Kode Pos</td>
                    <td>:</td>
                    <td><input type="text" name="kodepos"></td>
                </tr>
                <tr>
                    <td style="color:white;">orang_dituju</td>
                    <td>:</td>
                    <td><input type="text" name="kodepos"></td>
                </tr>
                <tr>
                    <td style="color:white;">jabatan_dituju</td>
                    <td>:</td>
                    <td><input type="text" name="kodepos"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
            <button type="submit">tes</button>
        </form>
        </center>
    </body>
</html>