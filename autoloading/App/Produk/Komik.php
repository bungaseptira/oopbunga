<?php 

class Komik extends Produk implements InfoProduk{

		public $jmlHalaman;



		public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {

			parent::__construct(  $judul , $penulis , $penerbit, $harga = 0 );

			$this->jmlHalaman = $jmlHalaman;
		}
		public function getInfo() {

		$str = "{$this->judul} | {$this->getLabel()} {Rp. {$this->harga})";
		
		return $str; 
	}


		public function getinfoProduk() {
			$str = "Komik : " . $this->getinfo() . " - {$this->jmlHalaman} Halaman.";
			return $str;

		}
	}

	 ?>