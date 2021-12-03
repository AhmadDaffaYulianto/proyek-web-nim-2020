<!DOCTYPE html>
<head>
    <title>Kirim Data Form PHP</title>
</head>
<body>
<form action="proses.php" method="post">
    <h1>Data Dosen</h1>
 <table>
  <tr><td>Nama Dosen </td><td><input type="text" name="nama"></td></tr>
  <tr><td>Alamat </td><td><textarea name="alamat" width="300"></textarea></td></tr>
  <tr><td>Tanggal Lahir</td><td><input type='date' name='tgl_lhr'/></td></tr>  
  <tr><td>Jenis Kelamin</td>
   <td>
    <input type="radio" name="jns_klmin" value="Pria" checked> Pria
    <input type="radio" name="jns_klmin" value="Wanita"> Wanita
   </td>
  </tr>
  <tr><td><input type="submit" value="Simpan" name="simpan"></td></tr>
 </table>
</form>
</body>

</html>