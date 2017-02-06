
<form method="post" action="">
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
$con=mysql_connect("localhost","root");
if (!$con)
{
die('Could not connect:'. mysql_error());
}
mysql_select_db("konseling", $con);
mysql_query("UPDATE user SET Nama='" . $_POST ['Nama'] . "', Email='" . $_POST ['Email'] ."', Tgl_lahir='" . $_POST ['Tgl_lahir'] . "', Alamat='" . $_POST ['Alamat'] ."', Telepon='" . $_POST ['Telepon'] ."', Foto='" . $_POST ['Foto']."' WHERE Id_User='" . $_POST['Id_User']."'" );

mysql_close($con);
?>


