<?php
// $mahasiswa = [
//   ["Romadiah", "21101129", "romadiah@gmail.com", "Teknologi Informatika"],
//   ["Taniamelia", "21101176", "taniamelia@gmail.com", "Teknologi Informatika"]
// ];
// array associative 
// definisinya sama seperti array numerik
// key-nya adalah strng yang kita buat 
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
      <li>Nama: <?= $data[0]; ?></li>
      <li>NIM: <?= $data[1]; ?></li>
      <li>Email: <?= $data[2]; ?></li>
      <li>Jurusan: <?= $data[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>