<?php 

class Produk {
	public$judul,
		  $penulis,
		  $penerbit,
		  $harga,
		  $jmlhalaman,
		  $waktumain,
		  $tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0,  $waktumain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	} 

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ({$this->harga})";
		if($this->tipe == "Komik")	{
			$str.= " - {$this->jmlhalaman} Halaman.";
		}else if( $this->tipe == "Game"){
			$str .= " - {$this->waktumain} Jam.";
		}

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Naruto", "Mamashi Kishimoto", "Shonen Jump", 30000, 100, 0,"Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
