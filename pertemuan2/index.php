<?php
// pertemuan 2 -php Dasar
// sintaks php

// standar output(digunakan untuk mencetak sesuatu ke layar)
// echo, print
// bisa juga print_r (khusus untuk array)
// var_dump (digunakan untuk melihat isi variabel)

// echo "Romadiah"; // meminta web untuk mencetak di layar
// print_r("This Roma");
// var_dump("Halo This is Roma");

// penulisan sintaks php
// 1. php di dalam html(bisa juga kebalikannya)

// selanjutnya variabel dan tipe data
// variabel
// tidak boleh di awali dengan angka tapi boleh mengandung angka
// contoh variabel 
// $name = "s romadiah";
// echo "halo, nama saya $name"
// jika menggunakan '' akan terjadi interpolasi

// operator 
// -aritmatika (+ - * / %)
// $x = 10;
// $y = 20;
// echo $x * $y;

// -penggabung string/conatenation/concat
// .
// $nama_depan = "Roma";
// $nama_belakang = "diah";
// echo $nama_depan . $nama_belakang;
// jika ingin ada spasinya di beri (nama_variabel. "" . nama_variabel)

// -assigement (operator penugasan)
// =, +=, -=, *=, /=, %=. .=
// $x = 2;
// $x *= 6;
// echo $x;
// $nama = "Roma";
// $nama .= " ";
// $nama .= "diah";
// echo $nama;

// -perbandingan
// <, >, <=, >=, ==, !=(hanya mengecek nilainya)
// var_dump(1 > 5);

// -identitas(mengecek tipe datanya juga)
// ===, !==
// var_dump(1 === "1");

// -logika (digunakan untuk pengkodisian)
//  &&, ||, !
// $x = 30;
// var_dump($x < 20 && $x % 2 == 0);
// var_dump($x < 20 || $x % 2 == 0);

$name = "Romie";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn Php</title>
</head>

<body>
  <h1>Halo selamat datang <?php echo $name ?></h1>
  <p><?php echo "hari ini saya mempelajari sintaks php " ?></p>

  <!--  ini adalah php dalam html -->
  <?php echo "<h4>Standar Output, Variabel & Operator</h4>" ?>

</body>

</html>