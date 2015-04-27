<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>
<?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('data');  
      $sqlTampil="select * from akun Where username='$_GET[username]' AND level='$_GET[level]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
     ?> 
<body>
<h2>./Lupa Password</h2>
<p>Isi hanya <b>`Username`</b> dan <b>`Level`</b> saja! ^_^ , <b>`Password`</b> akan tampil secara Otomatis</p>
<form action="Lupa.php" method="get">
<table><tr>
<td>Username</td>
<td><input type="text" name="username" value="<?php echo $dataTampil['username']; ?>" size="20"></td>
</tr><tr>
<td>Level</td>
<td><select name="level">
  <option value="user">User</option>
</select></td>
</tr><tr>
<td>Password</td>
<td><input type="text" name="password" disabled value="<?php echo $dataTampil['password']; ?>" size="20"></td>
</tr>
<tr>
<tr><td><a href="../Level" style="text-decoration:none">Sudah punya akun ?</a></td></tr>
<td><br><input type="submit" name="proses" value="Cek Password"></td>
</tr>
</table>
</form>
</body>
</html>
