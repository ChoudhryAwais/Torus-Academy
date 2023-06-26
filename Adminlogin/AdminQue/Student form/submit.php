<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/print.css?v=<?php echo time(); ?>" media="print">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
</head>
<body>

	<?php 
		$class = $_POST['class'];
		$batch = $_POST['batch'];
		$status = $_POST['status'];
		$group = $_POST['group'];
		$board = $_POST['board'];

		// // student data
		$majorsub = $_POST['majorsub'];
		$sname   = $_POST['sname'];
		$sfname   = $_POST['sfname']; 
		$gender  = $_POST['gender'];
		$dob  = $_POST['dob'];
		$sdomicile = $_POST['sdomicile'];
		$sreligion = $_POST['sreligion'];
		$scnic = $_POST['scnic'];
		$snationality = $_POST['snationality'];
		$sphone = $_POST['sphone'];
		$scell = $_POST['scell'];
		$semail = $_POST['semail'];
		$saddress = $_POST['saddress'];			
		// // guardian data
		$ginfo = $_POST['ginfo'];
		$relation = $_POST['relation'];
		$gname = $_POST['gname'];
		$gcnic = $_POST['gcnic'];
		$gemail = $_POST['gemail'];
		$gphone = $_POST['gphone'];
		$gcell = $_POST['gcell'];


		$sub = $_POST['subs'];
		$countersub = $_POST['countersub'];
		$Test =$_POST['Test'];
		$tsub = $_POST['tsubs'];
		$tsubn = $_POST['tsubn'];

		// Fee paid
		$discount = $_POST['discount'];
		$actualfee = $_POST['actualfee'];
		$total = $_POST['total'];
		$reg = $_POST['preg'];
		$tuition = $_POST['ptuition'];
		$test = $_POST['ptest'];
		$other = $_POST['pother'];
		$paidtotal = $_POST['ptotal'];
		$duedate = $_POST['duedate'];
		$balance = $_POST['balance'];
		
		if ($majorsub=="Courses") 
		{
			$month =$_POST['month'];
		}
		else
		{
			$month = "";
		}

		$submission_date = date("dF,Y");
		$submitby = $_POST['submitby'];
		// echo "Student Info"; echo "<br>";
		// // student
		// echo $majorsub; echo "<br>";
		// echo $sname; echo "<br>";
		// echo $sfname; echo "<br>";
		// echo $gender; echo "<br>";
		// echo $dob; echo "<br>";
		// echo $sdomicile; echo "<br>";
		// echo $sreligion; echo "<br>";
		// echo $scnic; echo "<br>";
		// echo $snationality; echo "<br>";
		// echo $saddress; echo "<br>";
		// echo $sphone; echo "<br>";
		// echo $scell; echo "<br>";
		// echo $semail; echo "<br>";

		// echo "Guardian's Info"; echo "<br>";
		// // guardian's
		// echo $ginfo; echo "<br>";
		// echo $gname; echo "<br>";
		// echo $gcnic; echo "<br>";
		// echo $gemail; echo "<br>";
		// echo $gphone; echo "<br>";
		// echo $gcell; echo "<br>";

		// echo "Academic Info"; echo "<br>";
		// echo $class; echo "<br>";
		// echo $batch; echo "<br>";
		// echo $status; echo "<br>";
		// echo $group; echo "<br>";
		// echo $board; echo "<br>";


		// echo "No. of Subject"; echo "<br>";
		// echo $countersub; echo "<br>";
		// echo "Name of Subject"; echo "<br>";
		// echo $sub;echo "<br>";
		// echo "Months";echo "<br>";
		// echo $month;echo "<br>";


		
		// echo "Test Series Subject Name";echo "<br>";
		// echo $tsub;echo "<br>";
		// echo "Number of Subject:";echo "<br>";
		// echo $tsubn;echo "<br>";
		


		// echo $discount; echo "<br>";
		// echo $reg; echo "<br>";
		// echo $tuition; echo "<br>";
		// echo $test; echo "<br>";
		// echo $other; echo "<br>";
		// echo $total; echo "<br>";
		// echo $balance; echo "<br>";
		// echo $duedate; echo "<br>";






		// Create Connection with sql

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

		// get last id
		$adminque = "
			SELECT MAX(Id) as lastid 
			from New_Student_Admin
			";

		$result = mysqli_query($conn, $adminque);
		$data = mysqli_fetch_array($result);
		$lastid = $data['lastid'];

		$lastid = $lastid +1;

		$adminque = "INSERT INTO New_Student_Admin( 
			id,  
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
			Due_Date,
			Submission_date,
			Submit_By)
		VALUES(
			'$lastid',
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
			'$duedate',
			'$submission_date',
			'$submitby')
		";

		if (mysqli_query($conn, $adminque)) 
		{
		    // echo "New record created successfully ";
		} else {
		    echo "Error: " . $adminque . "<br>" . mysqli_error($conn);
		}
	 ?>

	<div class="alert alert-success status">
		<strong>Congratulation!</strong> Your Form has been Successfully Submitted 
	</div>
	 
	 		
	<div class="text-center">
	 	<button class="btn btn-info pl-5 pr-5" id="print-btn" onclick="window.print();">Print</button>
	 	<button class="btn btn-danger addmore  pl-5 pr-5"><a href="Studentform.php" style="color:white;text-decoration: none;">Add More</a></button>
	</div>
	 
	<div class="row mt-5 wholetop" style="background-color: #323E6F">
	 	<div class="col-lg-1 topblank1"></div>
	
	 	<div class="col-lg-3 font-weight-bold text-white mt-4 printadform" style="font-size: 30px;">
	 		<p>ADMISSION FORM</p>
	 	</div>
	 	<div class="col-lg-4 topblank2"></div>
		<div class="col-lg-3 printlogo" style="background-color: white;border-radius: 0px;">
			<img src="pics/t3.png" width="100%" style="border-top: 0px">
		</div>
		
		<div class="col-lg-1 topblank3"></div>
	</div>
	<div class="row mt-4">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-10">
			<form class="form-group form1 mb-5" id="subj" method="post" action="submit.php">
				<hr>
				<div class="mt-3 row border border-dark"></div>
				<div class="text-uppercase text-white font-weight-bold" style="font-size: 16px;">
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">
							Academic Information
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg-4 section1">
							<div style="background-color:#323E6F;text-align: center;">
								Discipline
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $majorsub ?>
							</p>
						</div>
						<div class="col-lg-4 section1">
							<div style="background-color:#323E6F;text-align: center;">
								class
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $class ?>
							</p>
						</div>
						<div class="col-lg-4 section1">
							<div style="background-color:#323E6F;text-align: center;">
								group
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $group ?>
							</p>
						</div>
					</div>
					<div class="row mt-1">
						<div class="col-lg-4 section1">
							<div style="background-color:#323E6F;text-align: center;">
								Batch
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $batch?>
							</p>
						</div>
						<div class="col-lg-4 section1">
							<div style="background-color:#323E6F;text-align: center;">
								Status
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $status ?>
							</p>
						</div>
						<div class="col-lg-4 section1">
							<div style="background-color:#323E6F;text-align: center;">
								University/board/School
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $board ?>
							</p>
						</div>
					</div>
					<div class="row mt-1">
						<div class="col-lg-6 section2">
							<div style="background-color:#323E6F;text-align: center;">
								Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $sub ?>
							</p>	
						</div>
						<div class="col-lg-2 section22">
							<div style="background-color:#323E6F;text-align: center;">
								No. of Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $countersub ?>
							</p>	
						</div>
						<div class="col-lg-4 section222">
							<div style="background-color:#323E6F;text-align: center;">
								Course Duration Months
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $month ?>
							</p>	
						</div>
					</div>
					<div class="mt-4 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">Student's information</div>
					</div>
					<div class="row mt-3"  style="font-size: 12px;">
						<div class="col-lg-6 snamec">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 30%"><span class="sname" style="font-size: 15px;">First Name </span></td>
									<td style="font-size:15px;" class="pl-5 border" style="color: black"><?php echo $sname; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-6 sfnamec">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 28%"><span  style="font-size:13px"; class="fname">Last Name</span></td>
									<td class="pl-5" style="color: black;font-size:15px;"><?php echo $sfname; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1" style="font-size: 12px;">
						<div class="col-lg-4 genderc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 29%;font-size: 15px;"><span class="gender">Gender</span></td>
									<td  class="pl-5" style="color: black;font-size:15px;"><?php echo $gender; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1" style="font-size: 12px;">
						<div class="col-lg-5 dobc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 45%;font-size: 15px;"><span class="dob">Date of birth</span></td>
									<td class="pl-5" style="color: black;font-size:15px;"><?php echo $dob; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-3 religionc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 30%;font-size: 15px;"><span class="religion">Religion</span></td>
									<td  class="pl-3" style="color: black;font-size:15px;;"><?php echo $sreligion; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-4 domicilec">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%;font-size: 15px;"><span class="domicile">Domicile</span></td>
									<td  class="pl-5" style="color: black;font-size:15px;"><?php echo $sdomicile; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1" style="font-size: 12px;">
						<div class="col-lg-7 cnicc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 12%;font-size: 15px;"><span class="cnic">CNIC</span></td>
									<td  class="pl-5" style="color: black;font-size:15px;"><?php echo $scnic; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-5 nationalityc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%;font-size: 15px;"><span class="nationality">Nationality</span></td>
									<td  class="pl-5" style="color: black;font-size:15px;"><?php echo $snationality; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1"  style="font-size: 12px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%;font-size: 15px;"><span class="address">Address</span></td>
									<td class="pl-5" style="color: black;font-size:15px;"><?php echo $saddress; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1" style="font-size: 12px;">
						<div class="col-lg-4 phonec">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 28%;font-size: 15px;"><span class="phone">Phone#</span></td>
									<td  class="pl-4" style="color: black;font-size:15px;"><?php echo $sphone; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-3 cellc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%;font-size: 15px;"><span class="cell">Cell</span></td>
									<td  class="pl-4" style="color: black;font-size:15px;"><?php echo $scell; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-5 emailc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 15%;font-size: 15px;"><span class="email">Email</span></td>
									<td  class="pl-3 text-lowercase" style="color: black;font-size:15px;"><?php echo $semail; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="mt-4 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">guardian's information</div>
					</div>
					<div class="row mt-3"  style="font-size: 15px;">
						<div class="col-lg-2 ginfoc ">
							<table class="table">
								<tr class="table-bordered text-center">
									<td style="background-color:#323E6F;color:white;width: 30%"><span class="ginfo"><?php echo $ginfo?></span></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-10 relationc">
							<div class="row">
								<div class="col-lg-7 blankcc"></div>
								<div class="col-lg-5 relationcc">
									<table class="table">
										<tr class="table-bordered">
											<td style="background-color:#323E6F;color:white;width: 25%"><span class="relation">Relation</span></td>
											<td  class="pl-5" style="color: black"><?php echo $relation; ?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-1"  style="font-size: 15px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%"><span class="gname">Name</span></td>
									<td class="pl-5 border" style="color: black"><?php echo $gname; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1" style="font-size: 15px;">
						<div class="col-lg-7 gcnicc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 12%"><span class="gcnic">CNIC</span></td>
									<td  class="pl-5" style="color: black"><?php echo $gcnic; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-5 gphonec">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 22%"><span class="gphone">Contact#</span></td>
									<td  class="pl-5" style="color: black"><?php echo $gphone; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-1" style="font-size: 15px;">
						<div class="col-lg-4 gcellc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 22%"><span class="gcell">Cell</span></td>
									<td  class="pl-5" style="color: black"><?php echo $gcell; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-8 gemailc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%"><span class="gemail">Email</span></td>
									<td  class="pl-5 text-lowercase" style="color: black"><?php echo $gemail; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="mt-4 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">Test Series</div>
					</div>
					<div class=" row mt-3">
						<div class="col-lg-8 subjectc">
							<div style="background-color:#323E6F;text-align: center;">
								Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $tsub ?>
							</p>	
						</div>
						<div class="col-lg-4 nosubjc">
							<div style="background-color:#323E6F;text-align: center;">
								No. of Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $tsubn ?>
							</p>	
						</div>
					</div>
					<p style="page-break-before: always;"></p>
					<div class="fee" style="height: 150px"></div>
					<div class="mt-3 row border border-dark line"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">Fee details</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-1 blank1c"></div>
						<div class="col-lg-3 actualc">
							<div style="background-color:#323E6F;text-align: center;">
								Actual Fee
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $actualfee ?>
							</p>
						</div>
						<div class="col-lg-3 discountc">
							<div style="background-color:#323E6F;text-align: center;">
								Discount
							</div>
							<p class="text-center border" style="color:black;font-size:15px">
								<?php echo $discount ?>
							</p>
						</div>
						<div class="col-lg-4 totalc">
							<div style="background-color:#323E6F;text-align: center;">
								Total Fee
							</div>
							<p class="text-center border" style="color:black;font-size:15px;">
								<?php echo $total ?>
							</p>
						</div>
						<div class="col-lg-1 blank2c"></div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-1 blank3c"></div>
						<div class="col-lg-10 feec text-center" style="background-color:#323E6F;">
							Fee paid
							<div class="row mt-4">
								<div class="col-lg-3 regc">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0;">
										Registration
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $reg ?>
									</p>
								</div>
								<div class="col-lg-3 tuitionc">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Tuition
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $tuition ?>
									</p>
								</div>
								<div class="col-lg-3 testc">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Test
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $test ?>
									</p>
								</div>
								<div class="col-lg-3 otherc">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Other
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $other ?>
									</p>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-lg-4 totalc">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0;">
										Total
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $paidtotal ?>
									</p>
								</div>
								<div class="col-lg-4 balancec">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Balance
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $balance ?>
									</p>
								</div>
								<div class="col-lg-4 duedatec">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Due Date
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:15px;">
										<?php echo $duedate ?>
									</p>
								</div>			
							</div>
						</div>
						<div class="col-lg-1 blank4c"></div>
					</div>
					<div class="mt-5 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">
							For Office Use
						</div>
					</div>
					<div class="row mt-4"  style="font-size: 15px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 13%"><span class="roll">Roll No </span></td>
									<td class="pl-5 border" style="color: black"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-lg-12">
							<div style="background-color:#323E6F;text-align: center;">
								Comment
							</div>
							<p class="text-center border" style="color:black;font-size:15px;height: 100px;">
								
							</p>
						</div>
					</div>
					<div class="row mt-4"  style="font-size: 15px;">
						<div class="col-lg-6 submitbyc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 37%;"><span class="submitby">Submitted By </span></td>
									<td class="pl-5 border" style="color: black"><?php echo $submitby; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-6 approvebyc">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 36%"><span class="approveby">Approved By</span></td>
									<td class="pl-5 border" style="color: black"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div style="height: 314px;"></div>
	<footer style="background-color:#323E6F ">
		<div class="row p-1">
			<div class="col-lg-4 footer1c">
				<div class="h4 bg-white m-3 p-2 font-weight-bold text-center" style="color:#323E6F;border-radius: 0px;">
					6th Road Campus
				</div>
				<p class="text-white h6 text-center">D-147/147-A, 6th Road,</p>
				<p class="text-white h6 text-center">Satellite Town, Rawalpindi.</p>
				<p class="text-white h6 text-center">+92 333-5105493 / 051-4843090</p>
			</div>
			<div class="col-lg-4 footer2c">
				<div class="h4 bg-white m-3 p-2 font-weight-bold text-center" style="color:#323E6F;border-radius: 0px;">
					Cambridge Campus
				</div>
				<p class="text-white h6 text-center">519-B, B-Block, Near National Market,</p>
				<p class="text-white h6 text-center">Satellite Town, Rawalpindi.</p>
				<p class="text-white h6 text-center">+92 321-5862394 / 051-4421549</p>
			</div>
			<div class="col-lg-4 footer3c">
				<div class="h4 bg-white m-3 p-2 font-weight-bold text-center" style="color:#323E6F;border-radius: 0px;">
					Ghauri Town Campus
				</div>
				<p class="text-white h6 text-center">Sadoghar Plaza, Main Ghauri</p>
				<p class="text-white h6 text-center">Garden Road, Islamabad.</p>
				<p class="text-white h6 text-center">+92 321-5544443 / 051-2247020</p>
			</div>
		</div>
	</footer>

</body>
</html>