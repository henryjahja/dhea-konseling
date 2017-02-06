<?php
include 'sql.php';
//if ($_SESSION['status'] == 'konselor'){
	 $sql = "SELECT r.id_riwayat AS  'no', p.nama AS  'pasien', k.nama AS  'koselor', r.riwayat AS  'riwayat', r.waktu AS  'waktu' FROM user p LEFT JOIN riwayat r ON r.id_user = p.id LEFT JOIN user k ON r.id_konselor = k.id ORDER BY  `r`.`id_riwayat` ASC  LIMIT 0 , 30";
		$result = mysql_query($sql);
		?>
		<table border='0' style='width:1000px'>
		<tr><td>No</td><td>Pasien</td><td>Konselor</td><td>Waktu</td></tr>
		<?php
		while($row = mysql_fetch_array($result)){
			echo '<tr>';
			echo '<td>' . $row['no'] . '</td>';
			echo '<td>' . $row['pasien'] . '</td>';
			echo '<td>' . $row['konselor'] . '</td>';
			echo '<td>' . $row['riwayat'] . '</td>';
			echo '<td>' . $row['waktu'] . '</td>';
			echo '</tr>';
		}
		?>
		</table>
		<hr> <a href='addriwayat.php'>Tambah riwayat.</a>
		<?php
		
	
/*} else {
	echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>';
	echo '<body><br><br><br><center>Anda tidak memiliki hak akses.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon).';
	}
*/?>
