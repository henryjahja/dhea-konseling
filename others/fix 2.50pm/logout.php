<?php

session_start();
		session_destroy();
echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>';
		echo '<body><br><br><br><center>Logout berhasil.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)';
		?>