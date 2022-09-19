<?php
// cek apakah tidak ada data di $_GET
// memaksa user berpindah ke page lain 
if (
  !isset($_GET["nama"]) ||
  !isset($_GET["nim"]) ||
  !isset($_GET["judul"]) ||
  !isset($_GET["jurusan"]) ||
  !isset($_GET["gambar"])
) {
  // redirect (memindahkan user dari halaman ke halaman lain)
  header("Location: latihan.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <ul>
    <li>
      <img src="img/<?= $_GET["gambar"]; ?>">
    </li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nim"]; ?> </li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
    <li><?= $_GET["gambar"]; ?> </li>
  </ul>
  <a href="latihan.php">Kembali ke menu</a>
</body>

</html>