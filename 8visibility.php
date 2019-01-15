<?php 

// Jualan produk
// Makanan
// Buku 
class Produk {
	public $judul,
	       $penulis,
	       $penerbit;


	protected $diskon = 0 ;


	private $harga; 


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
		
	}

	
	public function getHarga() {
		return  $this->harga - ( $this->harga * $this->diskon / 100 );
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

		public $jmlHalaman;



		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

			parent::__construct(  $judul , $penulis , $penerbit, $harga = 0 );

			$this->jmlHalaman = $jmlHalaman;
		}


		public function getinfoProduk() {
			$str = "Komik : " . parent::getinfoProduk() . " - {$this->jmlHalaman} Halaman.";
			return $str;

		}
	}
	class Game extends Produk {
  
		public $waktuMain;

		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) { 

			parent::__construct ( $judul , $penulis , $penerbit , $harga );

			$this->waktuMain = $waktuMain;
		}
			public function setDiskon( $diskon ){
		$this->diskon = $diskon;
	}

		
		public function getinfoProduk() {
			$str = "Game : " . parent::getinfoProduk() . " - {$this->waktuMain} Jam.";
			return $str;
		}
	}




class CetakInfoProduk {
	public function cetak( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;

	}
}

$produk1 = new Komik("Doraemon", "Nobita", "Giant", 25000, 10);
$produk2 = new Game("GTA", "Saha we", "Eta we", 50000, 60);


echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
echo "<hr>";

$produk2->setDiskon(25);
echo $produk2->getHarga();
