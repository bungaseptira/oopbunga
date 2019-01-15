<?php 

// Jualan produk
// Makanan
// Buku 
class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain,
	       $tipe;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	} 

	public function getinfoLengkap(){

		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} {Rp. {$this->harga})";
		if ( $this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";

		} else if ( $this->tipe == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}
		return $str; 
	}

}
class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;

	}
}

$produk1 = new Produk("Doraemon", "Nobita", "Giant", 25000, 200, 0, "Komik");
$produk2 = new Produk("GTA", "Saha we", "Eta we", 50000, 0, 50, "Game");


echo $produk1->getinfoLengkap();
echo "<br>";
echo $produk2->getinfoLengkap();
