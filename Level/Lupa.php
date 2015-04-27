<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>
<body>
<h2>./Lupa Password</h2>
<p>Isi hanya <b>`Username`</b> dan <b>`Level`</b> saja! ^_^ , <b>`Password`</b> akan tampil secara Otomatis</p>
<form action="CekLupa.php" method="get">
<table><tr>
<td>Username</td>
<td><input type="text" name="username" size="20"></td>
</tr><tr>
<td>Level</td>
<td><select name="level">
  <option value="user">User</option>
</select></td>
</tr><tr>
<td>Password</td>
<td><input type="text" name="password" disabled  size="20"></td>
</tr>
<tr>
<tr><td><a href="../Level" style="text-decoration:none">Sudah punya akun ?</a></td></tr>
<td><br><input type="submit" name="proses" value="Cek Password"></td>
</tr>
</table>
</form>
</body>
</html>
