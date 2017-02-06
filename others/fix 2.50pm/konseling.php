<!-- konseling.php -->
<?php
include 'sql.php';
if (!isset($_GET['kat'])){
$result = mysql_query("SELECT * FROM konselor");
} else if ($_GET['kat'] == 'pri'){
$result = mysql_query("SELECT * FROM konselor WHERE `bidang` LIKE  'pribadi'");
} else if ($_GET['kat'] == 'aka'){
$result = mysql_query("SELECT * FROM konselor WHERE `bidang` LIKE  'akademik'");
}

?>

		<table bgcolor="#99CCFF" border='0' style="width:650;">

	<tr><td><hr></td></tr>
	<?php
while($row = mysql_fetch_array($result))
  {
	?>
	<th rowspan='6'>
		<img border="0" src="images/k_<?php echo $row['id'];?>.jpg" alt="<?php echo $row['nama']; ?>" width="125" height="125">
	</th>
	<tr> <td> Nama </td> <td> <?php echo $row['nama']; ?></td></tr>
	<tr> <td> Email </td> <td> <a href="mailto:<?php echo $row['email']; ?>"> <?php echo $row['email']; ?> </a></td></tr>
	<tr> <td> Bidang Keahlian </td> <td> <?php echo $row['bidang']; ?></td></tr>
	<tr> <td> Jadwal </td> <td> <?php echo $row['Jadual']; ?></td></tr>
	<tr> <td> Chat </td> <td> <a href="ymsgr:SendIM?<?php echo $row['ym']; ?>">
<img border=0 src="http://opi.yahoo.com/online?u=<?php echo $row['ym']; ?>&m=g&t=2"></a></td></tr>
	<tr><td><hr></td></tr>
	<?php
  }
  ?>
  </table>
<?php

?>