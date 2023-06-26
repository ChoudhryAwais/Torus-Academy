<!DOCTYPE html>
<html>
<head>
	<title>Personal Info Filtered</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t2.png">
</head>
<body>
	<?php
		if (empty($_POST['personalinfocheck1'])) 
		{
			header('Location:personalinfo.php');
		}
	?>
	<?php
		$Roll_No = htmlspecialchars(strtoupper($_POST['Roll_No']));
		$name = htmlspecialchars(ucwords($_POST['name']));
		$gender = $_POST['gender'];
		$servername  ="localhost";
		$username = "root";
		$password = "";
		$database = "Torus_Academy";
					 
		// Connect with database
		$conn = mysqli_connect($servername,$username,$password,$database);
		if (!$conn) 
		{
			echo "Connetion failed";
		}
		 echo $Roll_No;echo "<br>";
		 echo $name;echo "<br>";
		 echo $gender;echo "<br>";
		
	?>

	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t2.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t5.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F;text-shadow: 2px 1px 3px">
			PERSONAL INFO
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<hr>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row mt-5 form1">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<table class="mt-2 table table-bordered table-responsive">
				<tr class="text-center" style="background-color: #323E6F;color: white;font-family: verdana">
					<th style="padding-left:40px;padding-right:40px;">Roll_No</th>
					<th style="padding-left:40px;padding-right:40px;">First Name</th>
					<th style="padding-left:40px;padding-right:40px;">Last Name</th>
					<th style="padding-left:40px;padding-right:40px;">Gender</th>
					<th style="padding-left:60px;padding-right:60px;">DOB</th>
					<th style="padding-left:40px;padding-right:40px;">Religion</th>
					<th style="padding-left:40px;padding-right:40px;">Domicile</th>
					<th style="padding-left:70px;padding-right:70px;">CNIC</th>
					<th style="padding-left:40px;padding-right:40px;">Nationality</th>
					<th style="padding-left:80px;padding-right:80px;">Address</th>	
					<th style="padding-left:40px;padding-right:40px;">Phone#</th>
					<th style="padding-left:40px;padding-right:40px;">Cell</th>
					<th style="padding-left:40px;padding-right:40px;">Email</th>
				</tr>
				<?php
					$noofstudent = "
						SELECT COUNT(Id) as noofstd 
						from Students
						";
					$result = mysqli_query($conn, $noofstudent);
					$studentsno = mysqli_fetch_array($result);
					$studentsno = $studentsno['noofstd']-1;
					for ($i=2; $i <=$studentsno+1 ; $i++) 
					{
						if (($Roll_No!="")&&($name!="")&&($gender!="")) 
						{
							$studentperinfo = "SELECT 
													Roll_no,
													Name,
													Father_Name,
													Gender,
													DOB,
													Religion,
													Domicile,
													CNIC,
													Nationality,
													Address,
													Phone,
													Cell,
													Email
												   FROM Students
												   WHERE (id='$i')AND(Roll_no='$Roll_No')AND(Name='$name')AND(Gender='$gender')
											";
							$student1 = mysqli_query($conn,$studentperinfo);		
							$students = mysqli_fetch_array($student1);
							$Roll_no = $students['Roll_no'];
							$sname   = $students['Name'];
							$sfname   = $students['Father_Name']; 
							$gender  = $students['Gender'];
							$dob  = $students['DOB'];
							$sdomicile = $students['Domicile'];
							$sreligion = $students['Religion'];
							$scnic = $students['CNIC'];
							$snationality = $students['Nationality'];
							$sphone = $students['Phone'];
							$scell = $students['Cell'];
							$semail = $students['Email'];
							$saddress = $students['Address'];
							?>
								<tr>
									<td><?php echo $Roll_no?></td>
									<td><?php echo $sname?></td>
									<td><?php echo $sfname?></td>
									<td><?php echo $gender?></td>
									<td><?php echo $dob?></td>
									<td><?php echo $sdomicile?></td>
									<td><?php echo $sreligion?></td>
									<td><?php echo $scnic?></td>
									<td><?php echo $snationality?></td>
									<td><?php echo $saddress?></td>
									<td><?php echo $sphone?></td>
									<td><?php echo $scell?></td>
									<td><?php echo $semail?></td>
								</tr>
							<?php
						}
						else
						{
							echo "Hello world";
						}
					}	
				?>
			</table>
		</div>
		<div class="col-lg-1"></div>
	</div>

</body>
</html>