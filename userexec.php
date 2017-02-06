<?php

session_start();
?>
<!-- ubahfoto.php -->
<?php

include 'sql.php';
if ($_GET['act'] == 'upd'){
	$allowedExts = array("jpg", "jpeg", "gif", "png");
	$extension = end(explode(".", $_FILES["file"]["name"]));
	if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts)){
	if ($_FILES["file"]["error"] > 0){
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
		move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
		if (file_exists("images/" . $_SESSION['user_id'] . ".jpg")){
			unlink("images/" . $_SESSION['user_id'] . ".jpg");
		}
		$oldnamee = "images/" .$_FILES["file"]["name"];
		$newnamee = "images/" .$_SESSION['user_id'] . '.jpg';
		rename($oldnamee, $newnamee);
    }
  } else {
	
  }
	if (isset($_POST['jadual'])){
	mysql_query("UPDATE  `konseling`.`user` SET  `nama`='". $_POST['nama'] ."', `jk`='".$_POST['jk']."', `email`='". $_POST['email'] ."', `tgl_lahir`='". $_POST['tgl_lahir'] ."',`ym`='". $_POST['ym'] ."',`jadual`='". $_POST['jadual'] ."', `fakultas`='". $_POST['fakultas'] ."' WHERE  `user`.`id` =". $_SESSION['user_id'].";");
	$_SESSION['jadual'] = $_POST['jadual'];
	} else {
	mysql_query("UPDATE  `konseling`.`user` SET  `nama`='". $_POST['nama'] ."', `jk`='".$_POST['jk']."', `email`='". $_POST['email'] ."', `tgl_lahir`='". $_POST['tgl_lahir'] ."',`ym`='". $_POST['ym'] ."', `fakultas`='". $_POST['fakultas'] ."' WHERE  `user`.`id` =". $_SESSION['user_id'].";");
	}
	//-----------------


		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['j_k'] = $_POST['jk'];
		$_SESSION['ym'] = $_POST['ym'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['tgl_lahir'] = $_POST['tgl_lahir'];
		$_SESSION['fakultas'] = $_POST['fakultas'];
	
	
	//-----------------
	
	?><head>
	<meta http-equiv="Refresh" content="3;url=index.php">
</head><body><center><br><br>Update profil selesai<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)</center></body> <?php
} else if ($_GET['act'] == 'reg'){
	
	mysql_query("INSERT INTO `konseling`.`user` (`id`, `username`, `password`, `nama`, `jk`, `email`, `tgl_lahir`, `fakultas`, `status`,`ym`) VALUES (NULL, '" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['nama'] . "', '" . $_POST['jk'] . "', '" . $_POST['email'] . "', '" . $_POST['tgl_lahir'] . "', '" . $_POST['fakultas'] . "', 'user','".$_POST['ym']."');");
	
	?><head>
	<meta http-equiv="Refresh" content="3;url=index.php">
</head><body><center><br><br>Registrasi selesai, silahkan login.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)</center></body> <?php
} else if ($_GET['act'] == 'for'){
	$result = mysql_query("SELECT * FROM user WHERE username = '" . $_POST['usr']. "'" );
	while($row = mysql_fetch_array($result)){
		?> Password anda adalah: <?php echo $row['password'];
	}
}

mysql_close($con);
?>