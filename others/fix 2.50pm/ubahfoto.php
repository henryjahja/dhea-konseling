<?php
session_start();
?>
<!-- ubahfoto.php -->
<?php
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000)
&& in_array($extension, $allowedExts)){
  if ($_FILES["file"]["error"] > 0){
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
		//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		//echo "Type: " . $_FILES["file"]["type"] . "<br>";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
		//$_FILES["file"]["name"] = $_SESSION['user_id'];
		echo "<br><br><br><br><h1>UPLOAD: filetype tidak error</h1>";
		
			move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
			echo 'moving lancar bro';
			//echo "Stored in: " . "images/" . $_FILES["file"]["name"];
		if (file_exists("images/" . $_SESSION['user_id'] . ".jpg")){
			//echo $_FILES["file"]["name"] . " already exists. ";
			unlink("images/" . $_SESSION['user_id'] . ".jpg");
			echo'ada yangs sama dan di delete';
		}
		$oldnamee = "images/" .$_FILES["file"]["name"];
		$newnamee = "images/" .$_SESSION['user_id'] . '.jpg';
		rename($oldnamee, $newnamee);
		echo'rename';
		echo '<html><head><meta http-equiv="Refresh" content="3;url=index.php"></head>';
		echo '<body><br><br><br><center>Upload berhasil, kembali ke menu utama.<br>(Klik <a href="index.php">di sini</a>, jika tidak ada respon.)';
    }
  } else {
	echo "Invalid file";
  }
?>