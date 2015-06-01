<html> 
<head> 
<script type="text/javascript">
function GetXmlHttpObject() 
{ 
var xmlHttp=null; 
try 
     { 
     xmlHttp=new XMLHttpRequest(); 
     } 
    catch (e) 
     { 
     try 
     { 
     xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
      } 
     catch (e) 
      { 
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); 
      } 
     } 
return xmlHttp; 
}

function kirim(id) 
{ 
var xmlHttp=GetXmlHttpObject()     
var url="proses.php"; 
url1=url+"?id="+id; 
xmlHttp.onreadystatechange=result; 
function result() 
    { 
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") 
                   {         
                      document.getElementById("biaya").innerHTML=xmlHttp.responseText; 
                   } 
    else 
                      { 
                       alert("Problem retrieving data:" + xmlhttp.statusText); 
                       }     
    } 
    xmlHttp.open("GET",url1,true); 
    xmlHttp.send(null);      
}
</script>
</head> 
<body> 



 <select OnChange="kirim(this.value)">
<?php
echo "<OPTION>Pilih Program";
        $conn = mysql_connect("localhost","root","");
        $sukses = mysql_select_db("puskesmas", $conn);
        $sql    = "SELECT * FROM obat ";
        $query    = mysql_query($sql,$conn);
        while($data = mysql_fetch_array($query))
        {
        echo "<OPTION VALUE=$data[id_obat]>$data[nama_obat]</OPTION>";
        } 
?>
</select>
<br><br>


<div id="biaya"> 
</div> 
</body> 
</html> 