<?php session_start();
if (isset($_GET['edit']) &&  $_GET['edit'] == 1 ){?>
<h3>Edit Profil</h3><?php
	include 'sql.php'; //memasukan (sekalian) script sql.php sehingga tidak perlu lagi mengetik code ulang
	$result = mysql_query("SELECT * FROM user WHERE username = '" . $_POST['username']. "'" );
	while($row = mysql_fetch_array($result)){
		?>
		<form method="post" action="adminexec.php?act=upd" enctype="multipart/form-data">
			<table>
				<tr><td>ID User</td><td><?php echo $row['id'] ?> <input type="hidden" size="20" name="id" value="<?php echo $row['id'] ?>"></td></tr>
				<tr><td>Nama</td><td><input type="text" size="20" name="nama" value="<?php echo $row['nama'] ?>"></td></tr>
				<tr><td> Jenis Kelamin </td><td><input type="radio" name="jk" value="Laki-Laki" <?php if($row['jk'] == "Laki-Laki") echo "checked";?>>Laki-Laki
				&nbsp;&nbsp;<input type="radio" name="jk" value="Perempuan"<?php if($row['jk'] == "Perempuan") echo "checked";?>>Perempuan</td></tr>
				
				<tr><td>Email</td><td><input type="text" size="20" name="email" value="<?php echo $row['email'] ?>"></td></tr>
				
				<tr><td>Tanggal Lahir</td><td><input type="date" size="20" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>"></td></tr>
				
				<tr><td>Yahoo Messenger</td><td><input type="text" size="20" name="ym" value="<?php echo $row['ym'] ?>"></td></tr>
				
				<tr><td>Fakultas</td><td><input type="text" size="20" name="fakultas" value="<?php echo $row['fakultas'] ?>"></td></tr>
				
				<tr><td>Foto</td><td><input type="file" name="file" id="file"></td></tr>
				
				<tr><td> <input type="submit" value="Perbaharui"> </td></tr>
				</table>
			</form>
		<?php
	}
} else {
if ($_SESSION['status'] == 'admin'){
	?>
	<h3> Hak Admin </h3>
	<form method="post" action="adminexec.php?act=adm"
	<table>
		<tr><td>Username</td><td><input type="text" size="20" name="username"><br></tr>
		<tr><td><input type="submit" value="Submit"></td></tr>
	</table>
	</form>
	<hr>
	<h3> Hak Konselor </h3>
	<form method="post" action="adminexec.php?act=kon">
	<table>
		<tr><td>Username</td><td><input type="text" size="20" name="username"><br></tr>
		<tr><td><input type="submit" value="Submit"></td></tr>
	</table>
	</form>
	<hr>
	<h3> Hapus Data </h3>
	<form method="post" action="adminexec.php?act=del">
	<table>
		<tr><td>Username</td><td><input type="text" size="20" name="username"><br></tr>
		<tr><td><input type="submit" value="Submit"></td></tr>
	</table>
	</form>
	<hr>
	<h3> Edit Data </h3>
	<form method="post" action="admin.php?edit=1">
	<table>
		<tr><td>Username</td><td><input type="text" size="20" name="username"><br></tr>
		<tr><td><input type="submit" value="Submit"></td></tr>
	</table>
	</form>
	<hr>
	
	<?php
	}
else {
	echo '
	<head>
	<meta http-equiv="Refresh" content="3;url=index.php?page=forum">
	</head>
	<body>
		<center><br><br>Tidak memiliki hak akses.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)</center>
	</body>';
}}
?>

