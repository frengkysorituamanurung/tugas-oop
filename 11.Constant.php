<?php

define('NAMA', 'Frengky Manurung');

echo NAMA;

echo "<br>";

const UMUR = 19;
echo UMUR;


class Coba{
    const NAMA = 'Frengky Manurung';
}
echo Coba::NAMA;

echo __FILE__;

function coba() {
    return __FUNCTION__;
}

// class Coba {
//     public $kelas = __CLASS__;
// }

// $obj = new Coba;
// echo $obj->kelas;
