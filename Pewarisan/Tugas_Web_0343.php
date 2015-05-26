<?php 
class hitung{

public function jumlah ($m,$j_m)
	{
	return ($m*$j_m);
	}
	
public function jumlah2 ($m2,$j_m2)
	{
	return ($m2*$j_m2);
	}
public function jumlah3 ($m,$j_m,$m2,$j_m2)
	{
	return ($m*$j_m+$m2*$j_m2);
	}
			}

$tambah = new hitung();
	$m = 2000;
	$m2 = 1000;
	$j_m = 3;
	$j_m2 = 4;

echo "(nilai 1) ".$m." * (nilai2) ".$j_m." = ".$tambah->jumlah($m,$j_m).'';
echo "<br>";
echo "(nilai 1) ".$m2." * (nilai2) ".$j_m2." = ".$tambah->jumlah2($m2,$j_m2).'';
echo "<br>";
echo "Total ".$tambah->jumlah3($m,$j_m,$m2,$j_m2).'';
?>


