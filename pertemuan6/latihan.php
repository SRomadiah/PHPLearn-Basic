<?php
// $mahasiswa = [
//   ["Romadiah", "21101129", "romadiah@gmail.com", "Teknologi Informatika"],
//   ["Taniamelia", "21101176", "taniamelia@gmail.com", "Teknologi Informatika"]
// ];
// array associative 
// definisinya sama seperti array numerik
// key-nya adalah strng yang kita buat 
// dlam array associative di perbolehkan tidak sesuai urutan asalkan key stringnya tepat
$mahasiswa = [
  [
    "Nama" => "Romadiah",
    "NIM" => "21101198",
    "Email" => "romadiah@gmail.com",
    "Jurusan" => "Teknologi Informatika",
    "Gambar" => "photo1.jpg"
  ],
  [
    "Nama" => "Taniamelia",
    "NIM" => "21101176",
    "Email" => "taniamelia@gmail.com",
    "Jurusan" => "Teknologi Informatika",
    "Gambar" => "photo2.jpg"
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
  <?php foreach ($mahasiswa as $data) : ?>
    <ul>
      <li>
        <img src="img/<?= $data["Gambar"]; ?>">
      </li>
      <li>Nama: <?= $data["Nama"]; ?></li>
      <li>NIM: <?= $data["NIM"]; ?></li>
      <li>Email: <?= $data["Email"]; ?></li>
      <li>Jurusan: <?= $data["Jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>