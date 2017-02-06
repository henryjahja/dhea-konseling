<?php
session_start();
?>

<center>
	<table border="1" style="width:350;">
	<tr>
		<td>
			<center>
			<a href ="index.php?page=home">Home</a>
			</center>
		</td>
		<td>
			<center>
			<a href ="index.php?page=About">About</a>
			</center>
		</td>
		</table>
</center>

<center><table border="1" style="width:650;">
<?php
if(isset($_SESSION['user_id'])){
?>

<tr>
		<th rowspan="5" width = "25%"> WATDEPUK </th>
		<th colspan="3" align="left">Nama:  </th>
</tr>
<tr>
		<th colspan="3" align="left">Email:	</th>
</tr>
<tr>
		<th colspan="3" align="left">Tgl Lahir:  </th>
</tr>
<tr>
		<th colspan="3" align="left">Fakultas:  </th>
</tr>
<tr>
		<th colspan="3" align="right"><a href="index.php?page=edit_profil">Edit Profil</a>  </th>
</tr>

<?php
	}
		else{
?>
<th style="height:127px;" colspan="4">
Ini tampil bila tidak login
<!-----Slider-----> 
</th>
<?php }
?>
<tr>
		<td width="25%"><center><a href="index.php?page=forum">Forum </a></center></td>

		<td width="25%"><center><a href="index.php?page=konseling">Konseling</a></center></td>

		<td width="25%"><center><a href="index.php?page=anggota">Anggota </a></center></td>
		
		<td width="25%"><center><a href="index.php?page=tes">Tes Kepribadian </a></center></td>
</tr>
	

</table> </center>

<!-- divs main menu -->

<center>
<div style="height:400px;width:650;background-color:#FFFFFF">
ola olala roma roma ma gaga o la la
<?php
	if(!isset($_SESSION['user_id'])){
	?>
	<center>
		<h1>ANDA BELUM LOGIN</h1>
		<div style="height:250px;width:150;background-color:#FFFFFF">
			<?php
				include 'loginbox.php';
			?>
		</div>
	</center>
	<?php
	} else {
		if ($_GET['page'] == NULL){
		//isi welcome
		} else if ($_GET['page'] == 'forum'){
		//isi forum
		} else if ($_GET['page'] == 'konseling'){
		//isi konseling
		} else if ($_GET['page'] == 'anggota'){
		//isi anggota
		} else if ($_GET['page'] == 'tes'){
		//isi tes
		}
		
	}
?>
</div> 

</center>