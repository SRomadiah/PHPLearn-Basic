<?php
// ?materi saat ini ada perulangan
// -for
// -while
// -do while
// - foreach (perulangan khusus array)

// untuk menggunakan for ada 3 bagian 
// - inisialisasi (menetukan variabel awal untuk perulangannya)
// - terminasi (untuk memberhentikan perulangannya)
// - increment/decrement (untuk menambah/mengurangi nilai)

// for ($i = 0; $i < 5; $i++) {
//   echo "Hello World </br>";
// }
// - contoh looping while
// $i = 0;
// while ($i < 5) {
//   echo "Hello World <br>";
//   $i++;
// }

// - do while example (jalankan dlu lalu cek kondisinya)
// melakukan sekali perulangan 
// $i = 0;
// do {
//   echo "Hello World <br>";
//   $i++;
// } while ($i < 5);

// untuk membuat kolom menggunakan perulangan
// $i = baris
// $j = kolom

// for ($i = 1; $i <= 3; $i++) {
//   echo "<tr>";
//   for ($j = 1; $j <= 5; $j++) {
//     echo "<td>$i, $j</td>";
//   }
//   echo "</tr>";
// }
// {} bisa di ganti dengan : diakhiri dengan end baik itu untuk perulangan for maupun yg lain
// jika membuka tag php untuk meanmpilkan variabel dpat di singkat dengan <?= 

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
  <style>
    .warna-baris {
      background-color: blue;
    }
  </style>
</head>

<body>
  <!-- cara kedua membuat table -->
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php if ($i % 2 == 1) : ?>
        <tr class="warna-baris">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?= "$i, $j"; ?></td>
        <?php endfor; ?>
        </tr>
      <?php endfor; ?>
  </table>
</body>

</html>