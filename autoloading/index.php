<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, "Komik");
$produk2 = new Game("Downhill Domination", "Incognito Entertainment",  "Sony Interactive Entertainment, Codemasters", 374000, 50,"Game");

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();