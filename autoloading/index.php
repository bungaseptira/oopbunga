<?php 

require_once 'App/init.php';

$produk1 = new Komik("Doraemon", "Nobita", "Giant", 25000, 10 );
$produk2 = new Game("GTA", "Saha we", "Eta we", 50000, 60);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();
 

 echo "<hr>";
 new Coba();
