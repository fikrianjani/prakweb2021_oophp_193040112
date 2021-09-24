<?php

// define('NAMA', 'Fikri Anjani');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Fikri Anjani'; 
// }

// echo Coba::NAMA;

echo __FILE__;

echo "<br>";

echo __LINE__;

class Coba {
    public $kelas = __CLASS__;
}

echo "<br>";
$obj = new Coba;
echo $obj->kelas;

?>