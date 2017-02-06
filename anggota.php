 <!-- konseling.php -->
<?php
include 'sql.php';
$result = mysql_query("SELECT * FROM user WHERE `status` != 'konselor'");

?>

		<table bgcolor="#DCF0F7" border='0' style="width:1000;">

	<tr><td><hr></td></tr>
	<?php
while($row = mysql_fetch_array($result))
  {
	?>
	<th width="20%" rowspan='6'>
		<img border="0" src="images/<?php echo $row['id'];?>.jpg" alt="<?php echo $row['nama']; ?>" width="125" height="125">
	</th>
	<tr> <td width="10%"> Nama </td><td>:</td> <td> <?php echo $row['nama']; ?></td></tr>
	<?php if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin'){ ?>
					<tr> <td width="10%> Username </td> <td> <?php echo $row['username']; ?></td></tr>
				<?php } ?>
	<tr> <td width="10%"> Fakultas </td><td>:</td> <td> <?php echo $row['fakultas']; ?></td></tr>
	<tr> <td width="10%"> Email </td><td>:</td> <td> <a href="mailto:<?php echo $row['email']; ?>"> <?php echo $row['email']; ?> </a></td></tr>
	<tr> <td width="10%"> YM </td><td>:</td> <td>
<a href="ymsgr:SendIM?<?php echo $row['ym']; ?>">
<img border=0 src="http://opi.yahoo.com/online?u=<?php echo $row['ym']; ?>&m=g&t=2"></a></td></tr>
	
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td><hr></td></tr>
	<?php
  }
  ?>
  </table>
<?php

?>