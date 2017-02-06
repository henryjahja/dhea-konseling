<?php
session_start();
include 'sql.php';
$result = mysql_query("SELECT * FROM user WHERE username = '" . $_POST['usr']. "'" );

while($row = mysql_fetch_array($result))
  {
  //echo $row['FirstName'] . " " . $row['LastName'];
  //echo "<br />";
  if($_POST['pwd'] == $row['password']){
		echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>';
		echo '<body><br><br><br><center>Login berhasil.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon).';
		$_SESSION['user_id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['tgl_lahir'] = $row['tgl_lahir'];
		$_SESSION['fakultas'] = $row['fakultas'];
		$_SESSION['status'] = $row['status'];
	} else {
		echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>';
		echo '<body><br><br><br><center>Login gagal.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)';
		session_destroy();
		}
  }

mysql_close($con);
?>
