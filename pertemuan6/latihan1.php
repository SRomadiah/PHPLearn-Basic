<?php
// $mahasiswa = [
//   ["Romadiah", "21101129", "romadiah@gmail.com", "Teknologi Informatika"],
//   ["Taniamelia", "21101176", "taniamelia@gmail.com", "Teknologi Informatika"]
// ];
// array associative 
// definisinya sama seperti array numerik
// key-nya adalah strng yang kita buat 
// dlam array associative di perbolehkan tidak sesuai urutan asalkan key stringnya tepat
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
// echo $mahasiswa[1]["Nilai"][2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa </h1>
  <?php foreach ($dataPeminjaman as $data) : ?>
    <ul style="list-style-type:none;">
      <li>
        <img src="img/<?= $data["Gambar"]; ?>">
      </li>
      <li>Nama: <?= $data["Nama"]; ?></li>
      <li>NIM: <?= $data["NIM"]; ?></li>
      <li>Email: <?= $data["Judul"]; ?></li>
      <li>Jurusan: <?= $data["Jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>