<?php
include 'sql.php';
mysql_db_query("INSERT INTO user(`Id_User`, `Nama`, `Email`, `Tgl_lahir`, `Alamat`, `Telepon`, `Foto`) VALUES     ('" . $_POST ['Id_User'] .      "','" . $_POST ['Nama'] .       "','" . $_POST ['Email'] .      "','" . $_POST ['Tgl_lahir'] .  "','" . $_POST ['Alamat'] .     "','" . $_POST ['Telepon'] .    "','" . $_POST ['Foto'] .       "');");
echo("Registrasi berhasil.");
mysql_close($con);
?>