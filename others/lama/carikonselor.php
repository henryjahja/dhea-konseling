<form method="get" action="">
Id_Konselor :<input type="text" size="20" maxlength="40" name="Id_Konselor">
</form>
<?
mysql_connect ('localhost', 'root');
$data_buffer=mysql_query("select * from konseling.konselor wh");
while($data=mysql_fetch_row)$data_buffer)){
echo("Ini adalah datanya $data[0], $data[1]");
}
mysql_close();
?>