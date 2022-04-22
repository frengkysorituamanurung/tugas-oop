<?php  

class Produk{
    //property
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    //method
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = "300000";


echo "<br>";


echo "<hr>";

$produk2 = new Produk();
$produk2->judul = "Downhill Domination";
$produk2->penulis = "Incognito Entertainment";
$produk2->penerbit = "Sony Interactive Entertainment, Codemasters";
$produk2->harga = "374000";

echo "Komik : $produk1->penulis,  $produk1->penerbit";
echo "<br>";
echo "Game : $produk2->penulis,  $produk2->penerbit";





