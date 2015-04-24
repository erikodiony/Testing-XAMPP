<center><h2> Profil Data <h2></center>
<?php
include 'koneksi.php';
$query = "SELECT * FROM tb_profil"; //the query for get all data in tb_student
$result = mysql_query($query);

echo "<center><table border='0' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='orange' align='center'>
		<td> <b> No </b> </td>
        <td> <b> Nama </b> </td>
        <td> <b> Alamat </b> </td>
        <td> <b> Aksi </b> </td>
     </tr>";
while ($data = mysql_fetch_array($result)) //mysql_fetch_array = get the query data into array
{
  echo "<tr align='center'>
  			<td>".$data['no']."</td>
            <td>".$data['nama']."</td>
            <td>".$data['alamat']."</td>
            <td> <i> <a href='update.php?no=".$data['no']."'>Edit</a> </i></td>
       </tr>";
}
echo "</table></center>";
?>