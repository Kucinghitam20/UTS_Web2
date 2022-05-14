<html>
<head>
 <title>.: Form  Identitas :.</title>
</head>

<body>
<form action="db.php" method="post" name="form1">
  <table align="center" border="1" style="width: 300px;">
<tr>
      <td colspan="3"><div align="center">
<strong>INPUT</strong></div>
</td>
    </tr>
      <tr>
      <td width="93">Nama Wilayah</td>
      <td width="5">:</td>
      <td width="180"><select class="form-control" id="nama_wilayah" name="nama_wilayah" style="width:180px">>
      <option>DKI Jakarta</option>
      <option>Jawa Barat</option>
      <option>Banten</option>
      <option>Jawa Tengah</option>
    </select>
      </td>
      </tr>
       <tr>
      <td width="93">Jumlah Positif</td>
      <td width="5">:</td>
      <td width="180"><input name="jumlah_positif" type="text" /></td>
      </tr>
       <tr>
      <td width="93">Jumlah Dirawat</td>
      <td width="5">:</td>
      <td width="180"><input name="jumlah_dirawat" type="text" /></td>
      </tr>
       <tr>
      <td width="93">Jumlah Sembuh</td>
      <td width="5">:</td>
      <td width="180"><input name="jumlah_sembuh" type="text" /></td>
      </tr>
       <tr>
      <td width="93">Jumlah Meninggal</td>
      <td width="5">:</td>
      <td width="180"><input name="jumlah_meninggal" type="text" /></td>
      </tr>
       <tr>
      <td width="93">Nama Operator</td>
      <td width="5">:</td>
      <td width="180"><input name="nama_operator" type="text" /></td>
      </tr>
       <tr>
      <td width="93">NIM Mahasiswa</td>
      <td width="5">:</td>
      <td width="180"><input name="nim_mahasiswa" type="text" /></td>
      </tr>

      <td colspan="3"><div align="right">
        <input name="tombol_simpan" type="submit" value="SIMPAN" />
      </div>
</td>
    </tr>
</table>
</form>
</body>
</html>