<?php
    $nama_wilayah=$_POST['nama_wilayah'];
    $jumlah_positif=$_POST['jumlah_positif'];
    $jumlah_dirawat=$_POST['jumlah_dirawat'];
    $jumlah_sembuh=$_POST['jumlah_sembuh'];
    $jumlah_meninggal=$_POST['jumlah_meninggal'];
    $nama_operator=$_POST['nama_operator'];
    $nim_mahasiswa=$_POST['nim_mahasiswa'];
 echo "
 <table width=400 border=1 align=center>
  <tr>
    <td colspan=3 align=center>Data Pemantauan Covid-19 Wilayah Jawa Barat 
    <br>Per 17 Mei 2022 13.20
    <br>Alfi Khoerul Rijal / 191011402709
    </td>
  </tr>
  <tr>
    <td>Nama Wilayah</td>
    <td>:</td>
    <td>".$nama_wilayah."</td>
  </tr>
  <tr>
    <td>Jumlah Positif</td>
    <td>:</td>
    <td>".$jumlah_positif."</td>
  </tr>
  <tr>
    <td>Jumlah Dirawat</td>
    <td>:</td>
    <td>".$jumlah_dirawat."</td>
  </tr>
  <tr>
    <td>Jumlah Sembuh</td>
    <td>:</td>
    <td>".$jumlah_sembuh."</td>
  </tr>
  <tr>
    <td>Jumlah Meninggal</td>
    <td>:</td>
    <td>".$jumlah_meninggal."</td>
  </tr>
  <tr>
    <td>Nama Operator</td>
    <td>:</td>
    <td>".$nama_operator."</td>
  </tr>
  <tr>
    <td>NIM Mahasiswa</td>
    <td>:</td>
    <td>".$nim_mahasiswa."</td>
  </tr>
  
</table>";
?>