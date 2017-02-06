<?php session_start(); //panggil fungsi ini untuk urusan session (login)?>
<!-- user.php -->
<body style="background-color:#DCF0F7">
<center>
<h2>Pusat Pengelolaan User.</h2>
<div style="text-align:left;height:700px;width:450px;">
<?php
if ($_GET['page'] == 'edit_profil'){
	// bila di link ada ?page=edit_profil, maka script ini dijalankan
	?> <h3>Edit Profil</h3><?php
	include 'sql.php'; //memasukan (sekalian) script sql.php sehingga tidak perlu lagi mengetik code ulang
	$result = mysql_query("SELECT * FROM user WHERE id = '" . $_SESSION['user_id']. "'" ); //jalankan query ini,
	while($row = mysql_fetch_array($result)){
		?>
		<form method="post" action="userexec.php?act=upd" enctype="multipart/form-data">
			<table>
				<tr><td>Nama</td><td><input type="text" size="20" name="nama" value="<?php echo $_SESSION['nama'] ?>"></td></tr>
				<tr><td> Jenis Kelamin </td><td><input type="radio" name="jk" value="Laki-Laki" <?php if($_SESSION['j_k'] == "Laki-Laki") echo "checked";?>>Laki-Laki
				&nbsp;&nbsp;<input type="radio" name="jk" value="Perempuan"<?php if($_SESSION['j_k'] == "Perempuan") echo "checked";?>>Perempuan</td></tr>
				
				<tr><td>Email</td><td><input type="text" size="20" name="email" value="<?php echo $_SESSION['email'] ?>"></td></tr>
				
				<tr><td>Tanggal Lahir</td><td><input type="date" size="20" name="tgl_lahir" value=" <?php echo $_SESSION['tgl_lahir'] ?>"></td></tr>
				
				<tr><td>Yahoo Messenger</td><td><input type="text" size="20" name="ym" value="<?php echo $_SESSION['ym'] ?>"></td></tr>
				<?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'konselor'){ ?>
					<tr><td>Jadual</td><td><input type="text" size="20" name="jadual" value="<?php echo $_SESSION['jadual'] ?>"></td></tr>
				<?php } ?>
				<tr><td>Fakultas</td><td><input type="text" size="20" name="fakultas" value="<?php echo $_SESSION['fakultas'] ?>"></td></tr>
				
				<tr><td>Foto</td><td><input type="file" name="file" id="file"></td></tr>
				
				<tr><td> <input type="submit" value="Perbaharui"> </td></tr>
				</table>
			</form>
		<?php
	}
	
mysql_close($con);
}	else if ($_GET['page'] == 'regis'){
	// bila di link ada ?page=regis, maka script ini dijalankan
	?> <h3>Registrasi</h3>
	<br>Silahkan masukkan data diri.
	<form method="post" action="userexec.php?act=reg" enctype="multipart/form-data">
	<table>
		<tr><td>Username</td><td><input type="text" size="20" name="username"><br>
		<div style="height:10;font-size:12">*(NIM)</div></td></tr>
		<tr><td>Password</td><td><input type="text" size="20" name="password"></td></tr>
		<tr><td>Nama</td><td><input type="text" size="20" name="nama"></td></tr>
		<tr><td> Jenis Kelamin </td><td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
				&nbsp;&nbsp;<input type="radio" name="jk" value="Perempuan">Perempuan</td></tr>
				
		<tr><td>Email</td><td><input type="text" size="20" name="email"></td></tr>
		<tr><td>Yahoo Messenger</td><td><input type="text" size="20" name="ym"></td></tr>
		<tr><td>Tanggal Lahir</td><td><input type="date" size="20" name="tgl_lahir"></td></tr>
		<tr><td>Fakultas</td><td><input type="text" size="20" name="fakultas"></td></tr>
		<tr><td><input type="submit" value="Daftar"></td></tr>
	</table>
	</form><?php
	
}	else if ($_GET['page'] == 'forgot'){
	// bila di link ada ?page=forgot, maka script ini dijalankan
	
	?> <h3>Lupa password</h3>
	Silahkan masukan username anda.
	<form method='post' action='userexec.php?act=for'>
		<input type='text' size='20' name='usr'>
		<input type='submit' value='Lupa password'>
	</form><?php
}	else{ echo '404';}

?>
</div>
</center>
</body>