<?php
	include ('cc.php');
    $conn = mysql_connect("localhost","root","");
    $sukses = mysql_select_db("puskesmas", $conn);
    $id_program =$_GET['id']; 
    $sql    = "SELECT hrg_obat FROM obat WHERE id_obat = '$id_program'; ";
    $query    = mysql_query($sql,$conn);
    $data    = mysql_fetch_array($query);
    echo "<input type=text value=$data[hrg_obat]>";
     ?>