<?php
include 'sql.php';
mysql_query("INSERT INTO user WHERE Id_User = '" . $_POST['Id_User'] . "'");
echo("INSERT berhasil.");

?>