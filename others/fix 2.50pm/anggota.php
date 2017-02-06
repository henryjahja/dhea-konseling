 <!-- konseling.php -->
<?php
include 'sql.php';
$result = mysql_query("SELECT * FROM user");

?>

		<table bgcolor="#99CCFF" border='0' style="width:650;">

	<tr><td><hr></td></tr>
	<?php
while($row = mysql_fetch_array($result))
  {
	?>
	<th rowspan='3'>
		<img border="0" src="images/<?php echo $row['id'];?>.jpg" alt="<?php echo $row['nama']; ?>" width="125" height="125">
	</th>
	<tr> <td> Nama </td> <td> <?php echo $row['nama']; ?></td></tr>
	<tr> <td> Email </td> <td> <a href="mailto:<?php echo $row['email']; ?>"> <?php echo $row['email']; ?> </a></td></tr>
	<tr><td><hr></td></tr>
	<?php
  }
  ?>
  </table>
<?php

?>