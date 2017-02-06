<?php
session_start();
/*
Options:
type='que'
{
$_POST['topic']=judul topik
$_POST['txt']=isi
$_SESSION['username']= penanya
}
-------
type='ans'&q_id=(get='id')
{
$_GET['q_id']=pertanyaan
$_SESSION['username'] = nama penjawab
$_POST['ans'] = answer
}

*/
include 'sql.php';
if ($_GET['type'] == 'que'){
	$sql="INSERT INTO `konseling`.`forum_q` (`nama_topik`, `username`, `question`) VALUES ('" . $_POST['topic'] . "','" . $_SESSION['username'] . "','" . $_POST['txt'] . "')";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
		echo '
	<head>
	<meta http-equiv="Refresh" content="3;url=index.php?page=forum">
</head><body><center><br><br>Pertanyaan telah disubmit, terimakasih.<br>(Klik <a href="index.php?page=forum">di sini</a>, jika tidak ada respon.)</center></body>';
?>
<?php
} else if ($_GET['type'] == 'ans'){
$sql="INSERT INTO `konseling`.`forum_a` (`q_id`, `ans_username`, `answer`) VALUES ('" . $_GET['q_id'] . "','" . $_SESSION['username'] . "','" . $_POST['ans'] . "')";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
		echo '
	<head>
	<meta http-equiv="Refresh" content="3;url=index.php?page=forum">
</head><body><center><br><br>Jawaban telah disubmit, terimakasih.<br>(Klik <a href="index.php?page=forum">di sini</a>, jika tidak ada respon.)</center></body>';

?>
<?php
}else if ($_GET['type'] == 'delq'){
$sql="DELETE FROM `konseling`.`forum_q` WHERE `forum_q`.`id` = ". $_GET['id'] . ";";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
		echo '
	<head>
	<meta http-equiv="Refresh" content="3;url=index.php?page=forum">
</head><body><center><br><br>Post telah dihapus, terimakasih.<br>(Klik <a href="index.php?page=forum">di sini</a>, jika tidak ada respon.)</center></body>';

?><?php
}else if ($_GET['type'] == 'dela'){
$sql="DELETE FROM `konseling`.`forum_a` WHERE `forum_a`.`a_id` = ". $_GET['id'] . ";";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}
		echo '
	<head>
	<meta http-equiv="Refresh" content="3;url=index.php?page=forum">
</head><body><center><br><br>Post telah dihapus, terimakasih.<br>(Klik <a href="index.php?page=forum">di sini</a>, jika tidak ada respon.)</center></body>';

?><?php
} else {
?><head>
	<meta http-equiv="Refresh" content="3;url=index.php">
</head><body><br><br> <center>404</center>
<?php
}

?>