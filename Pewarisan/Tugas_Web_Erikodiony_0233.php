<?php 
class hitung{

public function hrg_mak ($mak,$jml_mak)
	{
	return ($mak*$jml_mak);
	}
	
public function hrg_min ($min,$jml_min)
	{
	return ($min*$jml_min);
	}
public function total ($mak,$jml_mak,$min,$jml_min)
	{
	return (($mak*$jml_mak)+($min*$jml_min));
	}
			}

$tambah = new hitung();
	$mak = 2000;
	$min = 1000;
	$jml_mak = 3;
	$jml_min = 4;

echo "Nasi = ".$mak." * ".$jml_mak." = ".$tambah->hrg_mak($mak,$jml_mak).'';
echo "<br>";
echo "Teh = ".$min." *  ".$jml_min." = ".$tambah->hrg_min($min,$jml_min).'';
echo "<br>";
echo "Total Bayar = ".$tambah->total($mak,$jml_mak,$min,$jml_min).'';
?>


