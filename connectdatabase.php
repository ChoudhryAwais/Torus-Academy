<?php
$servername  ="localhost";
$username = "root";
$password = "";
$database = "software";
 
// Connect with database
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) 
{
	echo "Connetion failed";
}

?>