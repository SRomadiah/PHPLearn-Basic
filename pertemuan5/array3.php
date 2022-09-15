<!-- exmaple  -->
<!-- foreach ($mahasiswa as $mhs) : ?>
      <li><php $mhs; ?></li>
endforeach;  -->


<?php
$mahasiswa = [
  ["Romadiah", "21101129", "Teknik Informatika", "diyah1888@gmail.com"],
  ["Romie", "21101187", "Teknik Informatika", "romiee@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiwa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>

    <ul>
      <li>Nama: <?= $mhs[0]; ?></li>
      <li>NIM: <?= $mhs[1]; ?></li>
      <li>Jurusan: <?= $mhs[2]; ?></li>
      <li>Email: <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>