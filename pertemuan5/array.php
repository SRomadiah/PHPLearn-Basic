<?php
// materi hari ini adalah array
// array = variabel yang bisa menampung banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key & value 
// key-nya adalah index yang di mulai dari 0
// ada 2 cara membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru 
$bulan = ["Jan", "Feb", "March", "April"];
$i = [123, "angka", false];

// menampilkan array 
// bisa gunakan var_dump / print_r
// var_dump($bulan);
// echo "<br>";
print_r($hari);
echo "<br>";

// menampilkan satu elemen pada array
// echo $hari[2];

// menambahkan elemen array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
