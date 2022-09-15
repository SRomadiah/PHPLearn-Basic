<?php
// date (function untuk menampilkan tanggan dengan format tertentu)
// echo date("l, d -M-Y");

// time
// add yng di sebut UNIX Timestamp / Epoch time
// angka tadi adalah detik yang sudah berlalu sejak 1 januari 1970
// echo time();

// echo date("d M Y", time() + 60 * 60 * 24 * 100);
// echo date("d M Y", time() - 60 * 60 * 24 * 100);

// mktime (membuat sendiri detik yang kita inginkan)
// mktime (jam,menit,detik,bulan,tanggal,tahun) = format mktime
// echo date("l", mktime(0, 0, 0, 12, 10, 1999));

// strtotime (sama seperti mktime hanya saja ini berupa string untuk memasukkan parameter)
// echo strtotime("10 des 199");
