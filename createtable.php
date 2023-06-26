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
else
{
	echo "Succesfully";
}

$adminque = "CREATE TABLE employee_login(
	EmployeeLoginId INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	CampusId VARCHAR(1000) NOT NULL,
	Employee_Code VARCHAR(1000) NOT NULL,
	Password VARCHAR(1000) NOT NULL	
)";	

if (mysqli_query($conn,$adminque)) 
{
	echo "Table Succesfully Created";
}
else
{
	echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($conn);



// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>