<html>
	<head>
		<title>
			Home Page
			</title>
	</head>
	<body>
	<center><b>Selamat Datang<br> di halaman Guest Book</b></center>
	
	<form method="post" action="">
	Nama : <input type="text" size="20" maxlength="40" name="Nama"><br>
	Umur : <input type="text" size="20" maxlength="40" name="Umur"><br>
	Komentar : <textarea rows="5" cols="20"
	name="Komentar"></textarea><br>
	<input type="submit" value="kirim">
	</form>
	
	<?php
	echo ("Data yang anda input adalah :<br><br>");
	echo ("Nama : ");
	echo ($_POST ['Nama']); echo ('<br>');
	echo ("Umur	: ");
	echo ($_POST ['Umur']); echo ('<br>');
	echo ("Komentar : ");
	echo ($_POST ['Komentar']);
	?>
	</body>
</html>