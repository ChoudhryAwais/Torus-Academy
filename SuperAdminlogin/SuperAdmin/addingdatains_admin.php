<!DOCTYPE html>
<html>
<head>
	<title>Super Admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
</head>
<body>


	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t1.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t2.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F">
			ADMISSION FORM
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="mt-2 row border border-dark"></div>
		</div>
		<div class="col-lg-1"></div>
	</div>

	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			
		</div>
		<div class="col-lg-1"></div>
	</div>





	<?php
		if (!empty($_POST['adminquecheck'])) 
		{
			
			$numofdata = $_POST['numofdata'];
			for ($i=$numofdata; $i>=1 ; $i--) 
			{ 
				$student= $_POST['accept_del'.$i];
				if ($student=="accept") 
				{
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
					$data ="SELECT *
					FROM New_Student_Admin
					WHERE id='$i';
					";
					$result1 = mysqli_query($conn,$data);		
					$studentinfo = mysqli_fetch_array($result1);

					$class = $studentinfo['Class'];
					$batch = $studentinfo['Batch'];
					$status = $studentinfo['Status'];
					$group = $studentinfo['Groups'];
					$board = $studentinfo['Board_Uni_School'];

					$majorsub = $studentinfo['Discipline'];
					$sname   = $studentinfo['Name'];
					$sfname   = $studentinfo['Father_Name']; 
					$gender  = $studentinfo['Gender'];
					$dob  = $studentinfo['DOB'];
					$sdomicile = $studentinfo['Domicile'];
					$sreligion = $studentinfo['Religion'];
					$scnic = $studentinfo['CNIC'];
					$snationality = $studentinfo['Nationality'];
					$sphone = $studentinfo['Phone'];
					$scell = $studentinfo['Cell'];
					$semail = $studentinfo['Email'];
					$saddress = $studentinfo['Address'];			
					// // guardian data
					$ginfo = $studentinfo['Guardian_Info'];
					$relation = $studentinfo['Relation'];
					$gname = $studentinfo['Guardian_Name'];
					$gcnic = $studentinfo['Guardian_CNIC'];
					$gemail = $studentinfo['Guardian_Email'];
					$gphone = $studentinfo['Guardian_Contact'];
					$gcell = $studentinfo['Guardian_Cell'];


					$sub = $studentinfo['Subjects'];
					$countersub = $studentinfo['No_of_Subjects'];
					$Test =$studentinfo['Test_Series'];
					$tsub = $studentinfo['Test_Subjects'];
					$tsubn = $studentinfo['Test_No_Subjects'];
					$month = $studentinfo['Course_duration_Months'];

					// Fee paid
					$discount = $studentinfo['Discounted_Fee'];
					$actualfee = $studentinfo['Actual_Fee'];
					$total = $studentinfo['Total_Fee'];
					$reg = $studentinfo['Reg_Fee'];
					$tuition = $studentinfo['Paid_Tuition'];
					$test = $studentinfo['Paid_Test'];
					$other = $studentinfo['Paid_Other'];
					$paidtotal = $studentinfo['Paid_Total'];
					$duedate = $studentinfo['Due_Date'];
					$balance = $studentinfo['Balance'];	

					$superadminque = "
					SELECT MAX(Id) as lastid 
					from Students
					";

					$result2 = mysqli_query($conn, $superadminque);
					$idsuperadmin = mysqli_fetch_array($result2);
					$lastidsuperadmin=$idsuperadmin['lastid'];

					$Roll_no= $lastidsuperadmin;
					if (($majorsub=="Matric")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "MM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "MM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "MM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "MM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "MM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Matric")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "MF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "MF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "MF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "MF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "MF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Junior")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "JM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "JM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "JM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "JM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "JM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Junior")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "JF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "JF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "JF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "JF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "JF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Intermediate")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "IM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "IM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "IM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "IM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "IM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Intermediate")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "IF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "IF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "IF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "IF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "IF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Bachelors")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "BM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "BM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "BM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "BM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "BM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Bachelors")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "BF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "BF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "BF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "BF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "BF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Masters")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "MaF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "MaF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "MaF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "MaF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "MaF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Masters")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "MaM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "MaM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "MaM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "MaM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "MaM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Entry_Test")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "EM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "EM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "EM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "EM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "EM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Entry_Test")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "EF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "EF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "EF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "EF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "EF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Courses")&&($gender=="Male")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "CM0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "CM000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "CM00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "CM0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "CM".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					elseif (($majorsub=="Courses")&&($gender=="Female")) 
					{
						if ($Roll_no<10) 
						{
							$Roll_no = "CF0000".$Roll_no;
						}
						elseif ($Roll_no<100) 
						{
							$Roll_no = "CF000".$Roll_no;	
						}
						elseif ($Roll_no<1000) 
						{
							$Roll_no = "CF00".$Roll_no;	
						}
						elseif ($Roll_no<10000) 
						{
							$Roll_no = "CF0".$Roll_no;	
						}
						elseif ($Roll_no<100000) 
						{
							$Roll_no = "CF".$Roll_no;	
						}
						else
						{
							$Roll_no ="Congratulation You have Exceed 100000 Studends";
						}
					}
					else
					{

					}
					$adminque = "INSERT INTO Students( 
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
											Email,
											Discipline,
											Class,
											Groups,
											Batch,
											Status,
											Board_Uni_School,
											Subjects,
											No_of_Subjects,
											Course_duration_Months,
											Guardian_Info,
											Relation,
											Guardian_Name,
											Guardian_CNIC,
											Guardian_Contact,
											Guardian_Cell,
											Guardian_Email,
											Test_Series,
											Test_Subjects,
											Test_No_Subjects,
											Actual_Fee,
											Discounted_Fee,
											Total_Fee,
											Reg_Fee,
											Paid_Tuition,
											Paid_Test,
											Paid_Other,
											Paid_Total,
											Balance,
											Due_Date)
										VALUES(
											'$Roll_no',
											'$sname',
											'$sfname', 
											'$gender',
											'$dob',
											'$sreligion',
											'$sdomicile',
											'$scnic',
											'$snationality',
											'$saddress',
											'$sphone',
											'$scell',
											'$semail',
											'$majorsub',
											'$class',
											'$group',
											'$batch',
											'$status',
											'$board',
											'$sub',
											'$countersub',
											'$month',
											'$ginfo',
											'$relation',
											'$gname',
											'$gcnic',
											'$gphone',
											'$gcell',
											'$gemail',
											'$Test',
											'$tsub',
											'$tsubn',
											'$actualfee',
											'$discount',
											'$total',
											'$reg',
											'$tuition',
											'$test',
											'$other',
											'$paidtotal',
											'$balance',
											'$duedate'
											)
										";

					if (mysqli_query($conn, $adminque)) 
					{
					    // echo "New record created successfully ";
					} else {
					    echo "Error: " . $adminque . "<br>" . mysqli_error($conn);
					}




					$deleteadminque = "DELETE 
									   FROM New_Student_Admin
									   WHERE id ='$i'
									  ";
				    if (mysqli_query($conn,$deleteadminque)) 
				    {
				    	
				    }
				    else
				    {
				    	"Error";
				    }



					?>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<div class="row mt-3">
									<div class="col-lg-12">
										<div class="alert alert-success status">
											<strong>Congratulation!</strong> Successfully Added
										</div>
										<div class="text-uppercase text-white h5 font-weight-bold table-responsive" style="text-align: center;">
											<table class="table table-bordered">
												<tr  style="font-size: 15px;background-color:gray;color:white;">
													<th>Roll_No</th>
													<th>Name</th>
													<th>Gender</th>
													<th>Class</th>
												</tr>
												<tr  style="font-size: 12px;">
													<td><?php echo $Roll_no ?></td>
													<td><?php echo $sname ?></td>
													<td><?php echo $gender ?></td>
													<td><?php echo $class ?></td>
												</tr>
											</table>
										</div>	
									</div>
								</div>
							</div>
							<div class="col-lg-1"></div>
						</div>


					<?php
				}
				else
				{	

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


					$deleteadminque = "DELETE 
									   FROM New_Student_Admin
									   WHERE id ='$i'
									  ";
				    if (mysqli_query($conn,$deleteadminque)) 
				    {
				    	
				    }
				    else
				    {
				    	"Error";
				    }

				}
			}
		}
		
	?>







	<div class="row mt-4">
		<div class="col-lg-1"></div>
		<div class="col-lg-2">
			<a href="superadmin.php" style="text-decoration: none" class="btn-outline-info form-control text-center mt-5">
				<span style="font-weight: 800;">BACK</span>
			</a>
		</div>
		<div class="col-lg-5"></div>
	 		
		<div class="col-lg-2 mt-5">
		
		</div>
	</div>



</body>
</html>