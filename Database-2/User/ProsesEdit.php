<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('data');  
      
    $update="UPDATE perpus SET id_buku = '$_POST[IDBuku]',nama_buku = '$_POST[NamaBuku]'
	,pengarang = '$_POST[Pengarang]',thn_terbit = '$_POST[ThnTerbit]'
	,jml_hlm = '$_POST[JmlHlm]' WHERE id_buku=$_POST[IDBuku];";
			
    mysql_query($update);
	echo '<script type="text/javascript">alert("./Data Berhasil di Edit dan Disimpan! :)");</script>';
	echo '<script>window.setTimeout("window.close()", 1000);</script>';
	echo '<script>window.onunload = refreshParent;
	function refreshParent(){window.opener.location.reload();}</script>';
?>

