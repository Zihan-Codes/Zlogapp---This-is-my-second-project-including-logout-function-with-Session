
<?php 

include('loginconnect.php');
// if (isset($_SESSION['login_user'])) {
	
// 	 header("location: profile.php");
// }

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<center><h1>This is login page</h1></center><br><br>
<form action="loginconnect.php" method="post">
	username: <input type="text" name="username" placeholder="username"><br>
	password: <input type="password" name="password" placeholder="password">
	<input type="submit" name="submit" value="login">
	<span><?php echo $error; ?></span>
</form>
</body>
</html>