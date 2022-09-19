<?php
// $_POST (metode request melalui pengiriman data, namun tidak terbaca di url)
// action="untuk mengirimkan data pada halaman yang di tuju"
// jika actionnya kosong maka data akan di kirim ke halaman itu sendiri
// jika method nya kosong maka nilai defaultnya akan menjadi method GET
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>

<body>
  <?php if (isset($_POST["submit"])) : ?>
    <h1>Hello, Welcome <?= $_POST["nama"]; ?></h1>
  <?php endif; ?>

  <form action="" method="post">
    Masukkan Nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Send</button>
  </form>
</body>

</html>