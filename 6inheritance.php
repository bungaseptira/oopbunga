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
	       $waktuMain; 


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	} 

	public function getinfoProduk(){

		$str = "{$this->judul} | {$this->getLabel()} {Rp. {$this->harga})";
		
		return $str; 
	}

}
	



	class Komik extends Produk {
		public function getinfoProduk() {
			$str = "Komik :  {$this->judul} | {$this->getLabel()} {Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
			return $str;

		}
	}
	class Game extends Produk {
		public function getinfoProduk() {
			$str = "Game :  {$this->judul} | {$this->getLabel()} {Rp. {$this->harga}) - {$this->waktuMain} Jam.";
			return $str;
		}
	}




class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;

	}
}

$produk1 = new Komik("Doraemon", "Nobita", "Giant", 25000, 200, 0);
$produk2 = new Game("GTA", "Saha we", "Eta we", 50000, 0);


echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
