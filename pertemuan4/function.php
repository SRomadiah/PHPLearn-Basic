<?php
// pertama harus mendefinisikan function
function greet($waktu = "Datang", $name = "Admin")
{
  return "Selamat $waktu,$name!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>

<body>
  <h1><?php echo greet("Pagi", "Romie") ?></h1>
</body>

</html>