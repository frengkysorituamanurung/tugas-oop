<?php  

class Produk{
    //property
    public $judul,
           $penulis,
           $penerbit,
           $harga;
           


    public function __construct($judul ="judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }       

    //method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul ="judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0){

        parent::__construct($judul, $penulis,  $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;


    }
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Produk {
    public $waktuMain;

    public function __construct($judul ="judul", $penulis = "penulis",  $penerbit = "penerbit", $harga = 0,  $waktuMain = 0){

        parent::__construct($judul, $penulis,  $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, "Komik");
$produk2 = new Game("Downhill Domination", "Incognito Entertainment",  "Sony Interactive Entertainment, Codemasters", 374000, 50,"Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
