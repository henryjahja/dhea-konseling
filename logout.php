<?php
session_start(); //memanggil fungsi session_start() memulai session karena dibutuhkan untuk logout dan hapus session
session_destroy(); //menghapus semua array session
echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>'; //paksa kembali ke index.php
echo '<body><br><br><br><center>Logout berhasil.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)';
?>