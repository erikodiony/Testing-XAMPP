<table width="400" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
  <tr bgcolor="#CCFFFF"> <!--header-->
    <td><div align="center"><strong>no</strong></div></td> 
    <td><div align="center"><strong>id</strong></div></td> 
    <td><div align="center"><strong>Nama</strong></div></td> 
    <td><div align="center"><strong>Agama</strong></div></td> 
	  <td><div align="center"><strong>aksi</strong></div></td> 

  </tr> 
  <?php 
		$no=0;
      mysql_connect('localhost','root',''); 
      mysql_select_db('data'); 
    
      $tampil="select * from biodata"; 
      $qryTampil=mysql_query($tampil); 
      while ($dataTampil=mysql_fetch_array($qryTampil)) { 
     $no++; 
     ?> 
  
   <tr bgcolor="#FFFFFF"> 
    <td><?php echo $no ; ?></td> 
    <td><?php echo $dataTampil['id']; ?></td> 
    <td><?php echo $dataTampil['nama']; ?></td> 
    <td><?php echo $dataTampil['agama']; ?></td> 
    
    <td><div align="center"><a href="deleted.php?id=<?php echo $dataTampil['id'] ; ?>">Delete</a> | <a href="du.php?id=<?php echo $dataTampil['id']; ?>">Edit </a></div></td>  

  </tr> 
    <?php } ?> 
</table>
