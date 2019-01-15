<?php 

// Jualan produk
// Makanan
// Buku 
class Produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	} 



}

$produk3 = new Produk();
$produk3->judul ="Doraemon";
$produk3->penerbit = "Nobita";
$produk3->rasa = "Giant";
$produk3->harga = 25000;



echo "<hr>";

$produk4 = new Produk();
$produk4->judul ="GTA";
$produk3->penulis = "Saha we";
$produk3->penerbit = "Eta we";
$produk3->harga = 100000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
