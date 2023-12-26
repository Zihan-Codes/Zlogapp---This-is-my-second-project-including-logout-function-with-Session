<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "zappf";  
    $port = 3307; // Your port number

    $conn = mysqli_connect($host, $user, $password, $db_name, $port);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: " . mysqli_connect_error());  
    }  
?>