<?php
// melakukan pengulangan pada array
// for/foreach

$angka = [3, 5, 7, 9, 11, 13];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array</title>
</head>
<style>
  .box {
    width: 50px;
    height: 50px;
    background-color: salmon;
    text-align: center;
    line-height: 50px;
    margin: 3px;
    float: left;
  }

  .clear {
    clear: both;
  }
</style>

<body>
  <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="box"><?php echo $angka[$i]; ?></div>
  <?php } ?>


  <div class="clear"></div>
  <?php foreach ($angka as $a) { ?>
    <div class="box"><?php echo $a; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <?php foreach ($angka as $a) : ?>
    <div class="box"><?= $a; ?></div>
  <?php endforeach; ?>
</body>

</html>