<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
//mengambil nilai dari form di bawah
 $no = $_POST['no'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];

//query untuk update data di database
 $query = "UPDATE tb_profil SET nama = '$nama', alamat = '$alamat' WHERE no = '$no'" ;
 $hasil = mysql_query($query);
 //hasil
 if ($hasil) {
    include "index.php";
	echo "<center><h4> Update data sukses </h4></center>";
}
else {
                    die($sql . " => " . mysql_error());
                }
                
            }
?>