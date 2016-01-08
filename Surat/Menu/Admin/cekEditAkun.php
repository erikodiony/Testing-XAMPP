<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('surat');  
      
    $update="UPDATE `login` SET `level`='$_POST[level]',`pass`='$_POST[pwdlogin]'
	WHERE `user` = '$_POST[idlogin]';";
	
	mysql_query($update);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>

