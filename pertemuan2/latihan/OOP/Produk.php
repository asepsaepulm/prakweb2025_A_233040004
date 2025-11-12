<?php

class Produk {
    // Properti umum
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // Constructor milik Parent
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method milik Parent
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk {
    public $jlmHalaman;

    public function __construct($judul , $penulis, $penerbit, $harga, $jlmHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jlmHalaman = $jlmHalaman;
}

    public function getInfoProduk(){
        $info = "Komik: " . parent::getLabel() . " | Harga: " . $this->harga . " | Halaman: " . $this->jlmHalaman;
        return $info;
    }

}

//komik 1
$komik1 = new Komik('Naruto', 'Masashi Kishimoto', '20003', '30000', '10');
echo $komik1->getInfoProduk();
?>