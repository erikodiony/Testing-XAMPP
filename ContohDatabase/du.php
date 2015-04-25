<form name="form1" method="post" action="edp.php">  
      <table width="400" border="1" align="center" cellpadding="1" cellspacing="1" >  
        <tr>
          <td height="50" colspan="2"><div align="center">EDIT DATA</div></td>  
        </tr>  
     <?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('data');  
        
      $sqlTampil="select * from biodata Where id='$_GET[id]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
     ?>  
    <tr bgcolor="#FFFFFF">  
          <td height="40">id </td>  
          <td>:  
          <input name="iid" type="text" id="id" value="<?php echo $dataTampil['id']; ?>"></td>  
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td height="40">Nama </td>  
          <td>:  
          <input name="nnama" type="text" id="nama" value="<?php echo $dataTampil['nama']; ?>"></td>  
        </tr>  
        <tr bgcolor="#FFFFFF">  
          <td height="40">Agama</td>  
          <td>:  
          <input name="aagama" type="text" id="agama" value="<?php echo $dataTampil['agama']; ?>"></td>  
        </tr>  
        
        <tr bgcolor="#FFFFFF">  
          <td>&nbsp;</td>  
          <td height="50"><input type="submit" name="Submit" value="Simpan"></td>  
        </tr>  
      </table>  
    </form>  
