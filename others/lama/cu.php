
<?php
include 'sql.php' ;
$result=mysql_query("SELECT * FROM user WHERE Id_User LIKE '%" . $_GET['Id_User']."%';");
while($row=mysql_fetch_array($result))
{
echo $row['Id_User'] . " " . $row['Nama'] ." ". $row['Email'] . " " . $row['Tgl_Lahir'] ." ". $row['Alamat'] . " " . $row['Telepon'] ." " . $row['Foto'];
echo "<br/>";
}
mysql_close($con);
?>