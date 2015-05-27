<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('test');  
	$email = $_POST['data'];
	$email2 = $_POST['data2'];
	$email3 = $_POST['data3'];	
	$as = '"'.implode('","', $email).'"';
	$as2 = '"'.implode('","', $email2).'"';
	$as3 = '"'.implode('","', $email3).'"';
	$as4 = ''.$as.''.$as2.''.$as3;
	$total2 = array_sum($email2);
	$total3 = array_sum($email3);
	$ad = explode(",", $as);
	$ad2 = explode(",", $as2);
	$ad3 = explode(",", $as3);
    $insert="INSERT INTO `data`(`a`, `b`, `c`, `d`) 
	VALUES ('$as','$total2','$total3','$as4');";
	
	mysql_query($insert);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=Index.html" />';
?>