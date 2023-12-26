<?php 

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');

if (!empty($username)) {
	// code...
	if (!empty($password)) {
		// code...
		include('config.php');

		if (mysqli_connect_error()) {
			// code...
			die('Connect Error ('.mysqli_connect_errno() .') '
				. mysqli_connect_error());
		}
		else{
			$sql = "INSERT INTO user_register (username, password, email)
			values ('$username', '$password', '$email')";

			if ($conn->query($sql)) {
				// code...
				echo "New record is inserted sucessfully";
			}
			else{
				echo "Error: ". $sql ." ". $conn->error;
			}
			$conn->close();
		} 
	}
	else{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<br><br>
 	<center><h1>Go to Login Page</h1></center><br>
 	<center><a href="login.php"><button>Go to Login</button></a></center>
 
 </body>
 </html>