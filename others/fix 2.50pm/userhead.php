<!-- userhead.php -->

<tr>
		<th rowspan="5" width = "25%"> <img border="0" src="images/<?php echo $_SESSION['user_id'];?>.jpg" alt="<?php echo $_SESSION['nama']; ?>" width="160" height="118"></th>
		<td>Nama:</td>
		<th colspan="3" align="left"><?php echo $_SESSION['nama']; ?> </th>
</tr>
<tr>
		<td>Email:</td>
		<th colspan="3" align="left"><?php echo $_SESSION['email']; ?> </th>
</tr>
<tr>
		<td>Tgl Lahir:</td>
		<th colspan="3" align="left"><?php echo $_SESSION['tgl_lahir']; ?> </th>
</tr>
<tr>
		<td>Fakultas:</td>
		<th colspan="3" align="left"><?php echo $_SESSION['fakultas']; ?> </th>
</tr>
<tr>
		<th colspan="3" align="right"><a href="user.php?page=edit_profil">Edit Profil</a>&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></th>
</tr>