<?php 

// Jualan produk
// Makanan
// Buku 
class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	} 



}

$produk1 = new Produk("Doraemon", "Nobita", "Giant", 25000);
$produk2 = new Produk("GTA", "Saha we", "Eta we", 50000);



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel(); 
 