<?php
include 'scripts/functions.php'; //includes the functions.php - very important
 
if (loggedin()) //check if the user is logged in, if it is, it will skip this page and jump to the 'user-loggedin.php' page.
{
header ("Location: user-loggedin.php");
exit();
}
?>
<!-- END NEW CODE -->
 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
</head>
<body>
<form  action="scripts/login.php" method="post" enctype="multipart/form-data" name="form-login">
<input required placeholder="Username" type="text" name="username"/>
<input required placeholder="Password" type="password" name="password"/>
<label for="remember">Remember Me:</label>
<input type="checkbox" name="remember" value="yes">
<input type="submit" name="login" value="LOG IN"/>
</form>
</body>
</html>