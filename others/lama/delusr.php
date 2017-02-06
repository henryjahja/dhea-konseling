<?php
include 'sql.php';
mysql_query("DELETE FROM user WHERE Id_User = '" . $_POST['Id_User'] . "'");
echo("Delete berhasil.");

?>