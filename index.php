<?php
include "model/functions.php"; //Include function
echo newRegister($_POST);

/*
###
##		If return value is 20 you use "-require" key but user not fill the field.
##		If return value is 21 you use "-repeat-" key but user not some fill the field. 
###
*/

?>
<form method="post">
	<input type="text" name="username-require" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="password" name="password-repeat-" placeholder="Again password"><br>
	<input type="submit">
</form>