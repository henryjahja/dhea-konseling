<!-- userhead.php -->
<?php
	if(isset($_SESSION['user_id'])){
?>
<div style="background-color:#DCF0F7;width:1000px;height:160px">
<table bgcolor="#DCF0F7" border="0" style="width:550px;height:135px;float:left">
<tr>
		<th rowspan="6" width = "150px"> <img border="0" src="images/<?php echo $_SESSION['user_id'];?>.jpg" alt="<?php echo $_SESSION['nama']; ?>" width="150" height="150">
		</th>
		<td>Nama</td><td>:</td>
		<th colspan="2" align="left"><?php echo $_SESSION['nama']; ?> </th>
</tr>
<tr>
		<td>Jenis Kelamin</td><td>:</td>
		<th colspan="2" align="left"><?php echo $_SESSION['j_k']; ?> </th>
</tr>
<tr>
		<td>Email</td><td>:</td>
		<th colspan="2" align="left"><?php echo $_SESSION['email']; ?> </th>
</tr>
<tr>
		<td>Tgl Lahir</td><td>:</td>
		<th colspan="2" align="left"><?php echo $_SESSION['tgl_lahir']; ?> </th>
</tr>
<tr>
		<td>Fakultas</td><td>:</td>
		<th colspan="2" align="left"><?php echo $_SESSION['fakultas']; ?> </th>
</tr>
<tr>
		<th colspan="3" align="right"> </th>
</tr>
</table>
<?php
} else {?>
<table border="0" style="width:1000px;height:150;">
<tr>
<th style="height:150px;">

<img border="0" src="logo.jpg" alt="Wide" width="150" height="150">
</th>
<th style="height:150px;">
<marquee>
<img border="0" src="BKk.png" alt="Wide" width="950" height="150">
<!-----Slider-----> 
</marquee>
</th>
</tr>
</table>
</div>
<?php

}?>