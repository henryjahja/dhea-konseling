<?php
include 'sql.php';
if ($_SESSION['status'] == konselor){
	if (isset($_GET['user_id'])){
		$result = mysql_query("SELECT * FROM riwayat WHERE id_user = '" . $_GET['user_id']. "'" );
		$nameresult = mysql_query("SELECT  FROM user WHERE id_user = '" . $result['id_user']. "'" );
		while($row1 = mysql_fetch_array($nameresult)){
			?><h2>Riwayat <?php echo $row1['nama'];?></h2>
			<?php
		}
		$konresult = mysql_query("SELECT  FROM user WHERE status = 'konselor'" );
		while($row = mysql_fetch_array($result)){
			$konselor['']
		}
		
		?>
		<table border='0' style='width:1000px'>
		<tr><td>Oleh Konselor</td><td>Riwayat</td><td>Waktu</td></tr>
		<?php
		while($row = mysql_fetch_array($result)){
			echo '<tr>';
			echo '<td>' . $row['riwayat'] . '</td>';
			echo '<td>' . $row['riwayat'] . '</td>';
			echo '<tr>';
			echo '<tr>';
			echo '<tr>';
			echo '<tr>';
		}
		?>
		</table>
		<?php
	}
} else {
	echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>';
	echo '<body><br><br><br><center>Anda tidak memiliki hak akses.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon).';
	}
?>