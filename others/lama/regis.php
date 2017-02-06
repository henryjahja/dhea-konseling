<html>
	<head>
		<title>
			Home Page
			</title>
	</head>
	<body>
	<center><b>Selamat Datang<br> tambah user</b></center>
	
	<form method="post" action="adduser.php">
	<table>
	<tr>
	<td>Id_User</td> <td>: </td> <td><input type="text" size="20" maxlength="40" name="Id_User"><br></td>
	</tr>
	<td>Nama</td> <td>: </td><td><input type="text" size="20" maxlength="40" name="Nama"><br></td>
	</tr>
	<td>Email</td> <td>: <td><input type="text" size="20" maxlength="40" name="Email"><br></td>
	</tr>
	<td>Tgl_lahir</td>	<td>: </td><td><input type="text" size="20" maxlength="40" name="Tgl_lahir"><br></td>
	</tr>
	<td>Alamat</td>		<td>:</td> <td><input type="text" size="20" maxlength="40" name="Alamat"><br></td>
	</tr>
	<td>Telepon</td>	<td>: </td><td><input type="text" size="20" maxlength="40" name="Telepon"><br></td>
	</tr>
	<td>Foto</td>		<td>:</td> <td><input type="text" size="20" maxlength="40" name="Foto"><br></td>
	</tr>
	</table>
	<input type="submit" value="kirim skrg"><br>
	</form>
	
	<?php
	echo ("Data yang anda input adalah :<br><br>");
	echo ("Id_User : ");
	echo ($_POST ['Id_User']); echo ('<br>');
	echo ("Nama : ");
	echo ($_POST ['Nama']); echo ('<br>');
	echo ("Email : ");
	echo ($_POST ['Email']); echo ('<br>');
	echo ("Tgl_lahir	: ");
	echo ($_POST ['Tgl_lahir']); echo ('<br>');
	echo ("Alamat : ");
	echo ($_POST ['Alamat']); echo ('<br>');
	echo ("Telepon	: ");
	echo ($_POST ['Telepon']); echo ('<br>');
	echo ("Foto : ");
	echo ($_POST ['Foto']);
	//mysql_db_query('konseling',"INSERT INTO `konseling`.`user`(`Id_User`, `Nama`, `Email`, `Tgl_lahir`, `Alamat`, `Telepon`, `Foto`) VALUES ('3', 'Annisa', 'nnisadhe@yahoo.com', '1991-09-30', 'Jl. Bangun Nusa No.46', '081316424869', '');");
	?>
	</body>
</html>