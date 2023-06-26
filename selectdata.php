<?php 
$servername  ="localhost";
$username = "root";
$password = "";
$database = "Torous_Academy";
 
// Connect with database
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) 
{
	echo "Connetion failed";
}
$adminque = "
			SELECT MAX(Id) as lastid 
			from Admin_que
			";

$result = mysqli_query($conn, $adminque);
$data = mysqli_fetch_array($result);
echo "Last Id".$data['lastid'];
?>