<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>
<body>
<h2>Halaman Login</h2>
<form action="login.php" method="post">
<table><tr>
<td>Username</td>
<td><input type="text" name="user" size="20"></td>
</tr><tr>
<td>Password</td>
<td><input type="password" name="pass" size="20"></td>
</tr><tr>
<td>Level</td>
<td><select name="level">
  <option value="admin">Admin</option>
  <option value="user">User</option>
</select></td>
</tr>
<tr>
<tr><td><a href="daftar.php" style="text-decoration:none">Belum punya akun ?</a></td></tr>
<tr><td><a href="lupa.php" style="text-decoration:none">Lupa Password ?</a></td></tr>
<td><br><input type="submit" name="proses" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>
