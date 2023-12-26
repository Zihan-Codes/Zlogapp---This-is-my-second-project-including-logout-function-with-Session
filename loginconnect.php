<?php 
session_start();
$error = '';

if (isset($_POST['submit'])) {
	// code...
	if (empty($_POST['username']) || empty($_POST['password'])) {
		// code...
		$error = "Username or Password is invalid";
	}
	else{
		$username = $_POST['username'];
		$password = $_POST['password'];

		include('config.php');
		//$conn = mysqli_connect("localhost", "root", "", "zappf");

		$query = "SELECT username, password from user_register where username=? AND password=? ";

		$stmt = $conn->prepare($query);
 $stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();
if($stmt->fetch()) //fetching the contents of the row 
{
$_SESSION['login_user'] = $username; // Initializing Session

// die("login success");        
header("location: profile.php");
// echo '<script>window.location.href = "profile.php";</script>';

	}
	// die("login fail");
	mysqli_close($conn);
}
}
 ?>