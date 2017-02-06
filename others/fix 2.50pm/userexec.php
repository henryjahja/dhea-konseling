<?php
session_start();
include 'sql.php';
if ($_GET['act'] == 'upd'){
	mysql_query("UPDATE  `konseling`.`user` SET  `nama`='". $_POST['nama'] ."', `email`='". $_POST['email'] ."', `tgl_lahir`='". $_POST['tgl_lahir'] ."', `fakultas`='". $_POST['fakultas'] ."', `foto`='". $_POST['foto'] ."' WHERE  `user`.`id` =". $_SESSION['user_id'].";");
	?><head>
	<meta http-equiv="Refresh" content="3;url=index.php">
</head><body><center><br><br>Update profil selesai, silahkan login kembali.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)</center></body> <?php
} else if ($_GET['act'] == 'reg'){
	
	mysql_query("INSERT INTO `konseling`.`user` (`id`, `username`, `password`, `nama`, `email`, `tgl_lahir`, `fakultas`, `status`, `foto`) VALUES (NULL, '" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['nama'] . "', '" . $_POST['email'] . "', '" . $_POST['tgl_lahir'] . "', '" . $_POST['fakultas'] . "', 'user', '" . $_POST['foto'] . "');");
	
	?><head>
	<meta http-equiv="Refresh" content="3;url=index.php">
</head><body><center><br><br>Registrasi selesai, silahkan login.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)</center></body> <?php
} else if ($_GET['act'] == 'for'){
	$result = mysql_query("SELECT * FROM user WHERE username = '" . $_POST['usr']. "'" );
	while($row = mysql_fetch_array($result)){
		?> Password anda adalah: <?php echo $row['password'];
	}
}
session_destroy();
mysql_close($con);
?>