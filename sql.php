<?php
$con = mysql_connect("localhost","root",""); //buat koneksi ke MySQL milik localhost (komputer sendiri), dengan username root dan password kosong
if (!$con)
  {
  die('Could not connect: ' . mysql_error()); //bila $con (percobaan pembuatan koneksi diatas) gagal, maka tampilkan error
  }

mysql_select_db("konseling", $con); //bila tidak ada error, maka script akan dilanjutkan ke sini, ini adalah perintah untuk memilih database (yang dipilih disini adalah konseling) dengan menggunakan koneksi yang telah berhasil yaitu $con

?>
