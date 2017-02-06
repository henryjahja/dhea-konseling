<html>
	<head>
		<title>
			Home Page
			</title>
	</head>
	<body>
	<center><b>Selamat Datang<br> di halaman Guest Book</b></center>
	<table>
	<tr>
	<form method="post" action="addkonselor.php">
	<td>Id_Konselor</td> <td>:</td> <td><input type="text" size="20" maxlength="40" name="Id_Konselor"><br></td>
	</tr>
	<td>Nama</td> <td>:</td> <td><input type="text" size="20" maxlength="40" name="Nama"><br></td>
	</tr>
	<td>Email</td> <td>:</td> <td><input type="text" size="20" maxlength="40" name="Email"><br></td>
	</tr>
	<td>Pendidikan</td> <td>:</td> <td><input type="text" size="20" maxlength="40" name="Pendidikan"><br></td>
	</tr>
	<td>Kategori_Pakar</td><td> :</td> <td><input type="text" size="20" maxlength="40" name="Kategori_Pakar"><br></td>
	</tr>
	<td>Tgl_Lahir</td><td>	:</td> <td><input type="text" size="20" maxlength="40" name="Tgl_Lahir"><br></td>
	</tr>
	<td>Alamat</td>		<td>:</td> <td><input type="text" size="20" maxlength="40" name="Alamat"><br></td>
	</tr>
	<td>Telepon</td>	<td>:</td> <td><input type="text" size="20" maxlength="40" name="Telepon"><br></td>
	</tr>
	<td>Foto</td>		<td>:</td> <td><input type="text" size="20" maxlength="40" name="Foto"><br></td>
	</tr>
	</table>
	<input type="submit" value="kirim"><br>
	</form>
	
	<?php
	echo ("Data yang anda input adalah :<br><br>");
	echo ("Id_Konselor : ");
	echo ($_POST ['Id_Konselor']); echo ('<br>');
	echo ("Nama : ");
	echo ($_POST ['Nama']); echo ('<br>');
	echo ("Email : ");
	echo ($_POST ['Email']); echo ('<br>');
	echo ("Pendidikan : ");
	echo ($_POST ['Pendidikan']); echo ('<br>');
	echo ("Kategori_Pakar : ");
	echo ($_POST ['Kategori_Pakar']); echo ('<br>');
	echo ("Tgl_Lahir	: ");
	echo ($_POST ['Tgl_Lahir']); echo ('<br>');
	echo ("Alamat : ");
	echo ($_POST ['Alamat']); echo ('<br>');
	echo ("Telepon	: ");
	echo ($_POST ['Telepon']); echo ('<br>');
	echo ("Foto : ");
	echo ($_POST ['Foto']);
	?>
	</body>
</html>