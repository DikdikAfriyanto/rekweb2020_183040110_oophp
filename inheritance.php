<?php 

class Produk {
	public$judul,
		  $penulis,
		  $penerbit,
		  $harga,
		  $jmlhalaman,
		  $waktumain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0,  $waktumain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktumain = $waktumain;
	}

	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	} 

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} ({$this->harga})";

		return $str;
	}
}

class Komik extends Produk{
	public function getInfoProduk(){
		$str = "Komik : $this->judul} | {$this->getLabel()} (rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
		return $str;
	} 
}

class Game extends Produk{
	public function getInfoProduk(){
		$str = "Komik : $this->judul} | {$this->getLabel()} (rp. {$this->harga}) - {$this->waktumain} Jama.";
		return $str;
	} 
}

class CetakInfoProduk {
	public function cetak(Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Komik("Naruto", "Mamashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
