<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['pass'];
// query untuk mendapatkan record dari username
$query = "SELECT * FROM akun WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    header('location: admin.php');
}
else 
echo '<h1>Login gagal</h1>';
?>