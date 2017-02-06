<?php session_start(); ?><!-- user.php -->
<center>
<h2>Pusat Pengelolaan User.</h2>
</center>
<?php
if ($_GET['page'] == 'edit_profil'){
	?> <h3>Edit Profil</h3><?php
	include 'sql.php';
	$result = mysql_query("SELECT * FROM user WHERE id = '" . $_SESSION['user_id']. "'" );
	while($row = mysql_fetch_array($result)){
		?>
		<form method="post" action="userexec.php?act=upd">
			<table>
				<tr><td>Nama</td><td><input type="text" size="20" name="nama" value="<?php echo $_SESSION['nama'] ?>"></td></tr>
				
				<tr><td>Email</td><td><input type="text" size="20" name="email" value="<?php echo $_SESSION['email'] ?>"></td></tr>
				
				<tr><td>Tanggal Lahir</td><td><input type="date" size="20" name="tgl_lahir" value="<?php echo $_SESSION['tgl_lahir'] ?>"></td></tr>
				
				<tr><td>Fakultas</td><td><input type="text" size="20" name="fakultas" value="<?php echo $_SESSION['fakultas'] ?>"></td></tr>
				
				<tr><td>Foto</td><td><input type="text" size="20" name="foto" value="<?php echo $_SESSION['foto'] ?>"></td></tr>
				
				<tr><td> <input type="submit" value="Perbaharui"> </td></tr>
				</table>
			</form>
			<a href='ubahfoto.html'>Ubah foto</a>
		<?php
	}
	
mysql_close($con);
}	else if ($_GET['page'] == 'regis'){
	?> <h3>Registrasi</h3>
	<br>Silahkan masukkan data diri.
	<form method="post" action="userexec.php?act=reg">
	<table>
		<tr><td>Username</td><td><input type="text" size="20" name="username"></td></tr>
		<tr><td>Password</td><td><input type="text" size="20" name="password"></td></tr>
		<tr><td>Nama</td><td><input type="text" size="20" name="nama"></td></tr>
		<tr><td>Email</td><td><input type="text" size="20" name="email"></td></tr>
		<tr><td>Tanggal Lahir</td><td><input type="date" size="20" name="tgl_lahir"></td></tr>
		<tr><td>Fakultas</td><td><input type="text" size="20" name="fakultas"></td></tr>
		<tr><td>Foto</td><td><input type="text" size="20" name="foto"></td></tr>
		<tr><td><input type="submit" value="Daftar"></td></tr>
	</table>
	</form><?php
	
}	else if ($_GET['page'] == 'forgot'){
	?> <h3>Lupa password</h3>
	Silahkan masukan username anda.
	<form method='post' action='userexec.php?act=for'>
		<input type='text' size='20' name='usr'>
		<input type='submit' value='Lupa password'>
	</form><?php
}	else{ echo '404';}

?>