<?php
//konselor/index.php

if(!isset$_SESSION['k_id']){
?>
<center>
<h3>Login Konselor</h3>
		
</center>
<form method="post" action="loginkonselor.php">
<table width="80">
<tr> <td>Username: </td>
	 <td> <input type="text" size='15' name="usr"> </td> </tr>
<tr> <td>Password: </td>
	 <td> <input type="password" size='15' name="pwd"> </td>
	 
<tr> <td> <input type="submit" value="Login"> </td> <td> </td> </tr>
	 
</table>

<?php
}?>


	 