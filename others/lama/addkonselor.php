<?php
include 'sql2.php';
mysql_connect ('localhost','root');
	mysql_db_query('konseling',"INSERT INTO konselor(Id_Konselor, Nama, Email, Pendidikan, Kategori_Pakar, Tgl_Lahir, Alamat, Telepon, Foto) values ('".$_POST ['Id_Konselor']."','".$_POST ['Nama']."','".$_POST ['Email']."','".$_POST ['Pendidikan']."','".$_POST ['Kategori_pakar']."','".$_POST ['Tgl_Lahir'].",'".$_POST ['Alamat']."', '".$_POST ['Telepon']."','".$_POST ['Foto']."')");
	echo("Registrasi berhasil.");
?>