<?php
// materi saat ini mempelajari tentang variabel scope atau lingkup variabel
// ketika ada variabel di dalam function itu adalah variabel local(jika belum ada
// variabel dalam function maka kita harus membuatnya terlebih dahulu)
// jika sebuah variabel itu di luar functionn maka itu adalah variabel global 
// jika ingin memanggil variabel global ke dalam function maka di beri keyword 
// global $nama variabel.

// superglobals 
// $_GET 
// metode request GET adalah metode pengiriman data melalui url dan data tersebut bisa di ambil
// atau di tangkap oleh melalui variabel superglobal $_GET
$dataPeminjaman = [
  [
    "Nama" => "Romadiah",
    "NIM" => "21101198",
    "Judul" => "Algorithm",
    "Jurusan" => "Teknologi Informatika",
    "Gambar" => "algorithm.jpg"
  ],
  [
    "Nama" => "Taniamelia",
    "NIM" => "21101176",
    "Judul" => "Basis Data",
    "Jurusan" => "Teknologi Informatika",
    "Gambar" => "basisdata.jpg"
  ],
  [
    "Nama" => "Ferdi",
    "NIM" => "21101176",
    "Judul" => "Basis Data",
    "Jurusan" => "Teknologi Informatika",
    "Gambar" => "basisdata.jpg"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <?php foreach ($dataPeminjaman as $data) : ?>
    <ul style="list-style-type:none;">
      <li>
        <a href="latihan1.php?nama=<?= $data["Nama"]; ?>&nim=<?= $data["NIM"]; ?>&judul=<?= $data["Judul"]; ?>&jurusan=<?= $data["Jurusan"]; ?>&gambar=<?= $data["Gambar"]; ?>"><?= $data["Nama"]; ?></a>
      </li>
    </ul>
  <?php endforeach; ?>
</body>

</html>