<!-- konseling.php -->
<?php
include 'sql.php';
if (!isset($_GET['kat'])){
$result = mysql_query("SELECT * FROM user where `status` = 'konselor'");
} else if ($_GET['kat'] == 'pri'){
$result = mysql_query("SELECT * FROM user WHERE `bidang` LIKE  'pribadi'");
} else if ($_GET['kat'] == 'aka'){
$result = mysql_query("SELECT * FROM user WHERE `bidang` LIKE  'akademik'");
}

?>
<div style="width:1000;background-color:#DCF0F7;">
		<table bgcolor="#DCF0F7" border='0' style="width:550;">

	<tr><td><hr></td></tr>
	<?php
while($row = mysql_fetch_array($result))
  {
	?>
	<th rowspan='6'>
		<img border="0" src="images/<?php echo $row['id'];?>.jpg" alt="<?php echo $row['nama']; ?>" width="125" height="125">
	</th>
	<tr> <td> Nama </td> <td> <?php echo $row['nama']; ?></td></tr>
	<?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin'){ ?>
					<tr> <td> Username </td> <td> <?php echo $row['username']; ?></td></tr>
				<?php } ?>
	<tr> <td> Email </td> <td> <a href="mailto:<?php echo $row['email']; ?>"> <?php echo $row['email']; ?> </a></td></tr>
	<tr> <td> Bidang Keahlian </td> <td> <?php echo $row['bidang']; ?></td></tr>
	<tr> <td> Jadwal </td> <td> <?php echo $row['jadual']; ?></td></tr>
	<tr> <td> Chat </td> <td> <a href="ymsgr:SendIM?<?php echo $row['ym']; ?>">
<img border=0 src="http://opi.yahoo.com/online?u=<?php echo $row['ym']; ?>&m=g&t=2"></a></td></tr>
	<tr><td><hr></td></tr>
	<?php
  }
  ?>
  </table>
<?php

?>
</div>