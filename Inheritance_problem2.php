<?php

// Jualan Komik
//komik
//game

/**
 * 
 */
class Produk{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		// Komik : Naruto | Masashi Khshimoto, Shoen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ($this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}

		return $str;

	}
}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga}) - {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk{
		public function cetak(Produk $produk){
			$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
			return $str;

		}
	}

	$produk1 = new Komik("Naruto", "Masashi Khshimoto", "Shoen Jump", 30000, 100, 0);
	$produk2 = new Game("Uncharted", "Neli Druckmann", "Sony Computer", 350000, 0, 50);
	
echo "Komik : " .$produk1->getLabel();
echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk2);

echo $produk1->getInfoLengkap();
echo "<br>";

echo $produk2->getInfoLengkap();