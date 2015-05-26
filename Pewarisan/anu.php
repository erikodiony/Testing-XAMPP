<?php
//buat class hewan
class hewan
	{
	public function beli_hewan()
		{
	return "Peliharaan Baru";
		}
		
	public function beli_ayam()
		{
	return "Peliharaan ayam";
		}
	}

	//turunkan class hewan ke mahluk
	class mahluk extends hewan {}
	
	//buat objek dari class mahluk (instansiasi)
	$hewan_baru = new mahluk();
	
	//panggil method objek
	echo $hewan_baru->beli_hewan();
	echo "<br>";
	echo $hewan_baru->beli_ayam();
?>