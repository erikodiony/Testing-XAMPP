<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('cms');  
      
    $update="UPDATE artikel SET no = '$_POST[no]' ,judul = '$_POST[judul]',head = '$_POST[head]'
	,isi = '$_POST[isi]',kategori = '$_POST[kat]'
	,bulan = '$_POST[bln]',tahun = '$_POST[thn]' ,kontrib = '$_POST[kont]' WHERE no=$_POST[no];";
			
    mysql_query($update);
	echo '<script type="text/javascript">alert("./Data Berhasil di Edit dan Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../User" />';
?>

