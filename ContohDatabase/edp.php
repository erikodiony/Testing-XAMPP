<?php  
    mysql_connect('localhost','root','');  
    mysql_select_db('data');  
      
    $update="UPDATE biodata SET nama = '$_POST[nnama]',agama = '$_POST[aagama]' WHERE id =$_POST[iid];";
			
    mysql_query($update);  
      
    echo "<center>Data Berhasil Di Update<center>";  
    echo "<center><h3><a href=d.php>Back Tampil Data</a></h3></center>";  
?>
