<?php
include"koneksi.php";

echo "<select name='anggota'>";
$tampil=mysql_query("SELECT * FROM anggota_ludruk ORDER BY id");
echo "<option value='belum milih' selected>- Pilih Anggota Ludruk -</option>";

while($w=mysql_fetch_array($tampil))
{
    echo "<option value=$w[nama] selected>$w[nama]</option>";        
}
 echo "</select>";
?>