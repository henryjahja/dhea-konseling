<?php session_start();
include 'sql.php'; ?>
<!--admin exec -->
<?php
if ($_GET['act'] == 'kon'){
mysql_query("UPDATE  `konseling`.`user` SET  `status` =  'konselor' WHERE  `user`.`username` = '" . $_POST['username'] . "';");
?>
<head>
	<meta http-equiv="Refresh" content="3;url=admin.php">
</head>
<body>
	<center><br><br>Pemberian status konselor selesai<br>(Klik <a href="admin.php">di sini</a>, jika tidak ada respon.)</center>
</body> <?php

	} else if ($_GET['act'] == 'adm'){
mysql_query("UPDATE  `konseling`.`user` SET  `status` =  'admin' WHERE  `user`.`username` = '" . $_POST['username'] . "';");
?>
<head>
	<meta http-equiv="Refresh" content="3;url=admin.php">
</head>
<body>
	<center><br><br>Pemberian status admin selesai<br>(Klik <a href="admin.php">di sini</a>, jika tidak ada respon.)</center>
</body> <?php

	} else if ($_GET['act'] == 'del'){
mysql_query("DELETE FROM `konseling`.`user` WHERE  `user`.`username` = '" . $_POST['username'] . "';");
?><head>
	<meta http-equiv="Refresh" content="3;url=admin.php">
</head><body><center><br><br>Penghapusan ID selesai<br>(Klik <a href="admin.php">di sini</a>, jika tidak ada respon.)</center></body> <?php
	
	} else if ($_GET['act'] == 'upd'){
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
		if (file_exists("images/" . $_POST['id'] . ".jpg")){
			unlink("images/" . $_POST['id'] . ".jpg");
		}
		$oldnamee = "images/" .$_FILES["file"]["name"];
		$newnamee = "images/" .$_POST['id'] . '.jpg';
		rename($oldnamee, $newnamee);
    }
  } else {
	
  }

	mysql_query("UPDATE  `konseling`.`user` SET  `nama`='". $_POST['nama'] ."', `jk`='".$_POST['jk']."', `email`='". $_POST['email'] ."', `tgl_lahir`='". $_POST['tgl_lahir'] ."',`ym`='". $_POST['ym'] ."', `fakultas`='". $_POST['fakultas'] ."' WHERE  `user`.`id` =". $_POST['id'].";");
	
	?><head>
	<meta http-equiv="Refresh" content="3;url=admin.php">
</head><body><center><br><br>Update profil selesai<br>(Klik <a href="admin.php">di sini</a>, jika tidak ada respon.)</center></body> <?php
}

?>