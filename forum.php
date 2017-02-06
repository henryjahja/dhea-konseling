
<!-- forum.php -->

<!-- add -->
<?php

if (!isset($_GET['act']) || $_GET['act']!= 'add'){

?>
<center><br><b>Halaman ini dikhususkan untuk anggota yang ingin bertanya, berdiskusi, berbagi informasi dan memberikan opini.</b><br>
&nbsp;&nbsp;&nbsp;<a href='index.php?page=forum&act=add'></center><i>Tambah Topik<i></a><div style="float:right;">
<form method="get" action="index.php">
Search: 
<input type="hidden" name="page" value='forum'>
<input type="hidden" name="act" value='search'>
<input type="text" size="20" name="search"> <input type="submit" value="Cari">
</form>
</div>
<?php

}?>
<br><br><hr>
<!-- List Forum -->
<?php
	include 'sql.php';
	if (!isset($_GET['act'])){
			$result = mysql_query("SELECT * FROM forum_q");
	?>
	<table bgcolor="#DCF0F7" border='0' style="width:1000;">
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
		<td> <?php 
			$result2 = mysql_query("SELECT * FROM forum_a WHERE q_id =". $row['id']);
			$t_ans = mysql_num_rows($result2);
			echo $t_ans;
		?></td>
		</tr>
		<?php
			if ($_SESSION['username'] == $row['username'] || $_SESSION['status'] == 'admin')
			{
			?>
			<tr><th colspan='2' align="right">
			<a href="addforum.php?type=delq&id=<?php echo $row['id']; ?>"><i>Hapus</i></a>
			</th></tr>
			<?php
			}
		?>
		<th colspan='2'><hr></th>
		<?php
	}

	} else if ($_GET['act'] == 'view'){
			$result = mysql_query("SELECT * FROM  `forum_q` WHERE  `id` =" . $_GET['id']);
			while($row = mysql_fetch_array($result)){
				?><table bgcolor="#DCF0F7" border='0' style="width:1000;">
				<tr>
				<td width= '15%'>Judul Topik</td><td width= '1%'>:</td><td width= '84%'> <?php echo $row['nama_topik']; ?> </td></tr>
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
			echo '<h4>Jawaban:</h4><table bgcolor="#DCF0F7" border="0" style="width:1000;">';
			$result = mysql_query("SELECT * FROM  `forum_a` WHERE  `q_id` =" . $_GET['id']);
			while($row = mysql_fetch_array($result)){
				?>
				<tr>
				<td width= '15%'>Oleh</td><td width= '1%'>:</td><td width= '84%'> <?php echo $row['ans_username']; ?></td>
				</tr>
				<tr>
				<td>Jawaban</td><td>:</td><td><?php echo $row['answer']; ?></td>
				</tr>
				<tr>
				<td>Pada</td><td>:</td><td><?php echo $row['timestamp']; ?></td>
				</tr>
				<?php
					if ($_SESSION['username'] == $row['ans_username'] || $_SESSION['status'] == 'admin'){
				?>
				<tr><th colspan='3' align="right">
			<a href="addforum.php?type=dela&id=<?php echo $row['a_id']; ?>"><i>Hapus</i></a>
			</th></tr>
			<?php
			}
		?>
				
				
				<tr><th colspan='3'><hr></th></tr>
				<?php
			} ?>
			</table><center>* * *</center><hr>
			<table bgcolor="#DCF0F7" style="width:650;">
				<form method='post' action="addforum.php?type=ans&q_id=<?php echo $_GET['id'];?>">
					<tr><td>Jawaban Anda</td><td>:</td><td><!--<input type="text" size="100" name="ans">-->
					<textarea rows='4' cols='50' name='ans'> </textarea></td></tr>
				<tr><td><input type="submit" value="Submit"></td></tr>
				</form>
			</table>
			<?php
		} else if ($_GET['act'] == 'add'){
			//$result = mysql_query("SELECT * FROM  `forum_q` WHERE  `id` =" . $_GET['id']);?>
			
			<div style="width:1000;background-color:#DCF0F7;padding-top:5px;padding-left:20px;padding-bottom:10px">
			<h2>Tambah topik</h2>
			<form method="post" action="addforum.php?type=que">
			
			<table bgcolor="#DCF0F7" style="width:500;">
				<tr><td>Judul</td>
					<td><input type="text" size="20" name="topic"></td>
					</tr>
					<tr>
					<td>Isi</td>
					<td><!--<input type="text" size="100" name="txt">-->
					<textarea rows='4' cols='20' name='txt'> </textarea></td>
					</tr>
					<tr>
					<td><input type='submit' value='Submit'</td>
					</tr>
				</table>
			</form>
			</div>
		<?php
		} else if ($_GET['act'] == 'search'){
			
			$result = mysql_query("SELECT * FROM  `forum_q` WHERE  `nama_topik` LIKE  '%" . $_GET['search'] . "%' OR `question` LIKE  '%" . $_GET['search'] . "%'");
	?>
	<table bgcolor="#DCF0F7" border='0' style="width:1000;">
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
		<td> <?php 
			$result2 = mysql_query("SELECT * FROM forum_a WHERE q_id =". $row['id']);
			$t_ans = mysql_num_rows($result2);
			echo $t_ans;
		?></td>
		</tr>
		<?php
			if ($_SESSION['username'] == $row['username'] || $_SESSION['status'] == 'admin')
			{
			?>
			<tr><th colspan='2' align="right">
			<a href="addforum.php?type=delq&id=<?php echo $row['id']; ?>"><i>Hapus</i></a>
			</th></tr>
			<?php
			}
		?>
		<th colspan='2'><hr></th>
		<?php
	}

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