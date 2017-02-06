
<!-- forum.php -->

<!-- add -->
<?php

if (!isset($_GET['act']) || $_GET['act']!= 'add'){

?>
&nbsp;&nbsp;&nbsp;<a href='index.php?page=forum&act=add'><i>Tambah Topik<i></a>
<?php

}?>
<hr>
<!-- List Forum -->
<?php
	include 'sql.php';
	if (!isset($_GET['act'])){
	$result = mysql_query("SELECT * FROM forum_q");
	?>
	<table bgcolor="#99CCFF" border='0' style="width:650;">
	<?php
	while($row = mysql_fetch_array($result)){
		?>
		<tr>
		<td>Topik</td>
		<td> <a href='index.php?page=forum&act=view&id=<?php echo $row['id']; ?>'><?php echo $row['nama_topik'];?></a></td>
		</tr>
		
		<tr>
		<td>Username</td>
		<td> <?php echo $row['username'];?></td>
		</tr>
		
		<tr>
		<td>Waktu</td>
		<td> <?php echo $row['timestamp'];?></td>
		</tr>
		
		<tr>
		<td>Jawaban</td>
		<td> <?php echo $row['replies'];?></td>
		</tr>
		<th colspan='2'><hr></th>
		<?php
	}} else if ($_GET['act'] == 'view'){
			$result = mysql_query("SELECT * FROM  `forum_q` WHERE  `id` =" . $_GET['id']);
			while($row = mysql_fetch_array($result)){
				?><table bgcolor="#99CCFF" border='0' style="width:650;">
				<tr>
				<td>Judul Topik</td><td>:</td><td> <?php echo $row['nama_topik']; ?> </td></tr>
				<tr>
				<td>Penanya</td><td>:</td><td> <?php echo $row['username']; ?> </td>
				</tr>
				<tr>
				<td>Waktu</td><td>:</td><td> <?php echo $row['timestamp']; ?> </td>
				</tr>
				<tr>
				<td>Pertanyaan</td><td>:</td><td> <?php echo $row['question']; ?> </td>
				</tr>
				</table><?php
			}
			echo '<hr>';
			echo '<h4>Jawaban:</h4><table bgcolor="#99CCFF" border="0" style="width:650;">';
			$result = mysql_query("SELECT * FROM  `forum_a` WHERE  `q_id` =" . $_GET['id']);
			while($row = mysql_fetch_array($result)){
				?>
				<tr>
				<td>Oleh</td><td>:</td><td> <?php echo $row['ans_username']; ?></td>
				</tr>
				<tr>
				<td>Jawaban</td><td>:</td><td><?php echo $row['answer']; ?></td>
				</tr>
				<tr>
				<td>Pada</td><td>:</td><td><?php echo $row['timestamp']; ?></td>
				</tr>
				<tr><th colspan='3'><hr></th></tr>
				<?php
			} ?>
			</table><center>* * *</center><hr>
			<table bgcolor="#99CCFF" style="width:650;">
				<form method='post' action="addforum.php?type=ans&q_id= <?php echo $_GET['id'];?>">
					<tr><td>Jawaban Anda</td><td>:</td><td><input type="text" size="50" name="ans"></td></tr>
				<tr><td><input type="submit" value="Submit"></td></tr>
				</form>
			</table>
			<?php
		} else if ($_GET['act'] == 'add'){
			//$result = mysql_query("SELECT * FROM  `forum_q` WHERE  `id` =" . $_GET['id']);?>
			<h2>Tambah topik</h2>
			<form method="post" action="addforum.php?type=que">
			<table bgcolor="#99CCFF" style="width:650;">
				<tr><td>Judul</td>
					<td><input type="text" size="20" name="topic"></td>
					</tr>
					<tr>
					<td>Isi</td>
					<td><input type="text" size="20" name="txt"></td>
					</tr>
					<tr>
					<td><input type='submit' value='Submit'</td>
					</tr>
				</table>
			</form>
		<?php
		}
	
	?>
	</table>
<!-- End List Forum -->


<center>
<div style="width:650;height:50;">
</div>
</center>
<?php
mysql_close($con);
?>