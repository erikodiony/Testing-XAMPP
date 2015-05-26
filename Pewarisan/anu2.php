<?php
//buat class hewan
class hewan {

public $kaki;
public $warna;
public $kaki2;
public $warna2;

public function beli_hewan()
		{
		return "Beli Hewan Baru";
		}
	}

	//turunkan class hewan ke mahluk
	class mahluk extends hewan {
	
		public function ciri()
		{ 
		return "kaki: $this->kaki, warna: $this->warna";
		}
		
		public function ciri2()
		{ 
		return "kaki: $this->kaki2, warna: $this->warna2";
		}
	
	}
	
	//buat objek dari class hewan baru (instansiasi)
	$hewan_baru = new mahluk();

	//isi properti objek
	$hewan_baru->kaki = "besar";
	$hewan_baru->warna = "hitam";
	$hewan_baru->kaki2 = "kecil";
	$hewan_baru->warna2 = "putih";
	
	//panggil method objek
	echo $hewan_baru->beli_hewan();
	echo "<br>";
	echo $hewan_baru->ciri();
	echo "<br>";
	echo $hewan_baru->ciri2();
?>