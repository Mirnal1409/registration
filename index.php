<?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="reg.php" method="POST">
First Name<br>
<input type="text" name="fname" /><br>
Last Name<br>
<input type="text" name="lname" /><br>
Age<br>
<input type="text" name="age" /><br>
<input type="submit" value="Save" />
</form>