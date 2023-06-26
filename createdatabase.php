<?php
$servername  ="localhost";
$username = "root";
$password = "";
 
// Connect with database
$conn = mysqli_connect($servername,$username,$password);
if (!$conn) 
{
	echo "Connetion failed";
}

// Createdata base

$db = "CREATE DATABASE ProgressiveDB";
if (mysqli_query($conn, $db)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
?>