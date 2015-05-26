<!-- IF Else PHP -->
<!-- Nama : Erikodiony Ariessa Wahyudi -->
<!-- Kelas : 2-G -->
<!-- NPM : 13.1.03.02.0233 -->

<html>
<form method="post">
<input type="text" name="bil" placeholder="Masukkan Nilai">
<button type="submit">Proses</button>
</form>
</html>

<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

class IfElse{

public function coba ($nilai)
	{
		if ($nilai > 80)
		{return ($nilai+80);}
		else if ($nilai < 70)
		{return ($nilai-50);}
		else
		{return (($nilai+70)/2);}
	}
	
			}

$anu = new IfElse();
	$nilai = $_POST['bil'];
	$notif1 = "Nilai Input >80 = Nilai Input + 80<br>";
	$notif2 = "Nilai Input 70-80 = Nilai Input + 70 lalu dibagi 2<br>";
	$notif3 = "Nilai Input <70 = Nilai Input - 50<br>";
	
echo"Keterangan:<br>";
echo $notif1;
echo $notif2;
echo $notif3;
echo "<br><br>";
echo "Nilai Input = ".$nilai." <br>Setelah diproses menjadi = ".$anu->coba($nilai).'';
echo "<br>";
if ($nilai >80)
	{echo "Sebab, ".$notif1;}
else if ($nilai <70)
	{echo "Sebab, ".$notif3;}
else
	{echo "Sebab, ".$notif2;}
?>
