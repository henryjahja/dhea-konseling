<h2>Tambah riwayat</h2>
<table border='0'>
<form method='post' action='riwayatexec.php'>
<tr><td>Nama Konselor</td><td>Nama Pasien</td></tr>
<tr><td><?php echo $_SESSION['nama']; ?><input type="hidden" name="konselor" value="<?php echo $_SESSION['user_id']; ?>"></td></tr>
<tr><th colspan='2'>
<select name="pasien">
<?php
$sql = 'SELECT id, username, name FROM user WHERE `status` = `user` ';
$result = mysql_query($sql);
while($row = mysql_fetch_array($result){
echo '<option value="'. $row['id'] . '">'. $row['name'] .'</option>';
}?>
</select> </th></tr>
<tr><th colspan='2' align='left'><input type="submit" value="Submit"></th></tr>
</form>

</table>

<?php
//mysql_query("INSERT INTO `konseling`.`user` (`id`, `username`, `password`, `nama`, `jk`, `email`, `tgl_lahir`, `fakultas`, `status`,`ym`) VALUES ('x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x','x');"); ?>