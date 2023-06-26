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
$date = date('d/m/Y');
$adminque = "INSERT INTO department(CampusId,DepartmentName,IsActive)
VALUES ('1','Lecturership','Yes')";

if (mysqli_query($conn, $adminque)) 
{
    echo "New record created successfully ";
} else {
    echo "Error: " . $adminque . "<br>" . mysqli_error($conn);
}
// lecturarship
// Accounts
// admmis
	

?>