<?php 

include('session.php');

if(!isset($_SESSION['login_user'])){
	header("location: login.php");
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Home page</title>
	 <link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body>
 	<center><h1>This is Home page</h1></center><br><br>
 	<center><h3>Welcome : <i><?php echo $login_session; ?></i> </h3></center>
 	<br><br>
 	<center><a href="logout.php"><button class="logout">Log Out</button></a></center>
 
 </body>
 </html>