<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
</head>
<body>
	<?php 
		if (empty($_POST['check4'])) 
		{
		 	header('Location:Studentform2.php');
		}
		$class = $_POST['class'];
		$batch = $_POST['batch'];
		$status = $_POST['status'];
		$group = $_POST['group'];
		$board = $_POST['board'];

		// // student data
		$majorsub = $_POST['majorsub'];
		$sname   = ucwords($_POST['sname']);
		$sfname   = ucwords($_POST['sfname']); 
		$gender  = $_POST['gender'];
		$dob  = $_POST['dob'];
		$sdomicile = ucwords($_POST['sdomicile']);
		$sreligion = ucwords($_POST['sreligion']);
		$scnic = $_POST['scnic'];
		$snationality = ucwords($_POST['snationality']);
		$sphone = $_POST['sphone'];
		$scell = $_POST['scell'];
		$semail = $_POST['semail'];
		$saddress = ucwords($_POST['saddress']);			
		// // guardian data
		$ginfo = $_POST['ginfo'];
		$relation = ucwords($_POST['relation']);
		$gname = ucwords($_POST['gname']);
		$gcnic = ucwords($_POST['gcnic']);
		$gemail = ucwords($_POST['gemail']);
		$gphone = ucwords($_POST['gphone']);
		$gcell = ucwords($_POST['gcell']);


		$sub = ucwords($_POST['subs']);
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
	 ?>



	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t1.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t2.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F">
			ADMISSION FORM
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="mt-2 row border border-dark"></div>
			<form class="form-group form1 mb-5" id="subj" method="post" action="submit.php">
				<div class="text-uppercase text-white font-weight-bold" >
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">
							Academic Information
						</div>
					</div>




			<!-- Main page form data starts-->
				<input type="hidden" name="majorsub" value="<?php echo ($majorsub)?>">
				<input type="hidden" name="sname" value="<?php echo ($sname)?>">
				<input type="hidden" name="sfname" value="<?php echo ($sfname)?>">
				<input type="hidden" name="gender" value="<?php echo ($gender)?>">
				<input type="hidden" name="dob" value="<?php echo ($dob)?>">
				<input type="hidden" name="sdomicile" value="<?php echo ($sdomicile)?>">
				<input type="hidden" name="sreligion" value="<?php echo ($sreligion)?>">
				<input type="hidden" name="scnic" value="<?php echo ($scnic)?>">
				<input type="hidden" name="snationality" value="<?php echo ($snationality)?>">
				<input type="hidden" name="sphone" value="<?php echo ($sphone)?>">
				<input type="hidden" name="semail" value="<?php echo ($semail)?>">
				<input type="hidden" name="scell" value="<?php echo ($scell)?>">
				<input type="hidden" name="saddress" value="<?php echo ($saddress)?>">
				<input type="hidden" name="ginfo" value="<?php echo ($ginfo)?>">
				<input type="hidden" name="relation" value="<?php echo ($relation)?>">
				<input type="hidden" name="gname" value="<?php echo ($gname)?>">
				<input type="hidden" name="gcnic" value="<?php echo ($gcnic)?>">
				<input type="hidden" name="gemail" value="<?php echo ($gemail)?>">
				<input type="hidden" name="gphone" value="<?php echo ($gphone)?>">
				<input type="hidden" name="gcell" value="<?php echo ($gcell)?>">
				<!-- Main page form data ends -->

				<!-- Second page form data Starts -->
				<input type="hidden" name="class" value="<?php echo ($class)?>">
				<input type="hidden" name="batch" value="<?php echo ($batch)?>">
				<input type="hidden" name="group" value="<?php echo ($group)?>">
				<input type="hidden" name="status" value="<?php echo ($status)?>">
				<input type="hidden" name="board" value="<?php echo ($board)?>">
				<!-- Second page form data ends -->

				<!-- Third page data starts -->
				<input type="hidden" name="Test" value="<?php echo ($Test)?>">
				<input type="hidden" name="month" value="<?php echo ($month)?>">
				<input type="hidden" name="tsubs" value="<?php echo ($tsub)?>">
				<input type="hidden" name="tsubn" value="<?php echo ($tsubn)?>">

				<input type="hidden" name="subs" value="<?php echo ($sub)?>">
				<input type="hidden" name="countersub" value="<?php echo ($countersub)?>">
				<!-- Third page data endss -->

				<!-- Fee data starts -->
				<input type="hidden" name="discount" value="<?php echo ($discount)?>">
				<input type="hidden" name="actualfee" value="<?php echo ($actualfee)?>">
				<input type="hidden" name="total" value="<?php echo ($total)?>">
				<input type="hidden" name="preg" value="<?php echo ($reg)?>">
				<input type="hidden" name="ptuition" value="<?php echo ($tuition)?>">
				<input type="hidden" name="ptest" value="<?php echo ($test)?>">
				<input type="hidden" name="pother" value="<?php echo ($other)?>">
				<input type="hidden" name="ptotal" value="<?php echo ($paidtotal)?>">
				<input type="hidden" name="duedate" value="<?php echo ($duedate)?>">
				<input type="hidden" name="balance" value="<?php echo ($balance)?>">
				<!-- Fee data ends -->				




					<div class="row mt-3">
						<div class="col-lg-4">
							<div style="background-color:#323E6F;text-align: center;">
								Discipline
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $majorsub ?>
							</p>
						</div>
						<div class="col-lg-4 border border-left-0 border-top-0 border-bottom-0 border-light">
							<div style="background-color:#323E6F;text-align: center;">
								class
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $class ?>
							</p>
						</div>
						<div class="col-lg-4 border border-left-0 border-top-0 border-bottom-0 border-light">
							<div style="background-color:#323E6F;text-align: center;">
								group
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $group ?>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div style="background-color:#323E6F;text-align: center;">
								Batch
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $batch?>
							</p>
						</div>
						<div class="col-lg-4 border border-left-0 border-top-0 border-bottom-0 border-light">
							<div style="background-color:#323E6F;text-align: center;">
								Status
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $status ?>
							</p>
						</div>
						<div class="col-lg-4 border border-left-0 border-top-0 border-bottom-0 border-light">
							<div style="background-color:#323E6F;text-align: center;">
								University/board/School
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $board ?>
							</p>
						</div>
					</div>
					<div class=" row">
						<div class="col-lg-6">
							<div style="background-color:#323E6F;text-align: center;">
								Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $sub ?>
							</p>	
						</div>
						<div class="col-lg-2">
							<div style="background-color:#323E6F;text-align: center;">
								No. of Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $countersub ?>
							</p>	
						</div>
						<div class="col-lg-4">
							<div style="background-color:#323E6F;text-align: center;">
								Course Duration Months
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $month ?>
							</p>	
						</div>
					</div>
					<div class="mt-3 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">Student's information</div>
					</div>
					<div class="row mt-4"  style="font-size: 12px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%">Name </td>
									<td class="pl-5 border" style="color: black"><?php echo $sname; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row" style="font-size: 12px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 11%">Father Name</td>
									<td class="pl-5" style="color: black"><?php echo $sfname; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row" style="font-size: 12px;">
						<div class="col-lg-4">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 22%">Gender</td>
									<td  class="pl-5" style="color: black"><?php echo $gender; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row" style="font-size: 12px;">
						<div class="col-lg-5">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 28%">Date of birth</td>
									<td  class="pl-5" style="color: black"><?php echo $dob; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-3">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 30%">Religion</td>
									<td  class="pl-5" style="color: black"><?php echo $sreligion; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-4">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%">Domicile</td>
									<td  class="pl-5" style="color: black"><?php echo $sdomicile; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row" style="font-size: 12px;">
						<div class="col-lg-7">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 12%">CNIC</td>
									<td  class="pl-5" style="color: black"><?php echo $scnic; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-5">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%">Nationality</td>
									<td  class="pl-5" style="color: black"><?php echo $snationality; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row"  style="font-size: 12px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%">Address</td>
									<td class="pl-5" style="color: black"><?php echo $saddress; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row" style="font-size: 12px;">
						<div class="col-lg-4">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%">Phone #</td>
									<td  class="pl-5" style="color: black"><?php echo $sphone; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-3">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 25%">Cell</td>
									<td  class="pl-5" style="color: black"><?php echo $scell; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-5">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 15%">Email</td>
									<td  class="pl-5 text-lowercase" style="color: black"><?php echo $semail; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="mt-3 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">guardian's information</div>
					</div>
					<div class="row mt-4"  style="font-size: 12px;">
						<div class="col-lg-2 ">
							<table class="table">
								<tr class="table-bordered text-center">
									<td style="background-color:#323E6F;color:white;width: 30%"><?php echo $ginfo?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-10">
							<div class="row">
								<div class="col-lg-7"></div>
								<div class="col-lg-5">
									<table class="table">
										<tr class="table-bordered">
											<td style="background-color:#323E6F;color:white;width: 25%">Relation</td>
											<td  class="pl-5" style="color: black"><?php echo $relation; ?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4"  style="font-size: 12px;">
						<div class="col-lg-12">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%">Name </td>
									<td class="pl-5 border" style="color: black"><?php echo $gname; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-2" style="font-size: 12px;">
						<div class="col-lg-7">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 12%">CNIC</td>
									<td  class="pl-5" style="color: black"><?php echo $gcnic; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-5">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 22%">Contact #</td>
									<td  class="pl-5" style="color: black"><?php echo $gphone; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-2" style="font-size: 12px;">
						<div class="col-lg-4">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 22%">Cell</td>
									<td  class="pl-5" style="color: black"><?php echo $gcell; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-8">
							<table class="table">
								<tr class="table-bordered">
									<td style="background-color:#323E6F;color:white;width: 8%">Email</td>
									<td  class="pl-5 text-lowercase" style="color: black"><?php echo $gemail; ?></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="mt-3 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">Test Series</div>
					</div>
					<div class=" row mt-4">
						<div class="col-lg-8">
							<div style="background-color:#323E6F;text-align: center;">
								Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $tsub ?>
							</p>	
						</div>
						<div class="col-lg-4">
							<div style="background-color:#323E6F;text-align: center;">
								No. of Subjects
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $tsubn ?>
							</p>	
						</div>
					</div>
					<div class="mt-3 row border border-dark"></div>
					<div class="row mt-1">
						<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">Fee details</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg-1"></div>
						<div class="col-lg-3">
							<div style="background-color:#323E6F;text-align: center;">
								Actual Fee
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $actualfee ?>
							</p>
						</div>
						<div class="col-lg-3 border border-left-0 border-top-0 border-bottom-0 border-light">
							<div style="background-color:#323E6F;text-align: center;">
								Discount
							</div>
							<p class="text-center border" style="color:black;font-size:13px">
								<?php echo $discount ?>
							</p>
						</div>
						<div class="col-lg-4 border border-left-0 border-top-0 border-bottom-0 border-light">
							<div style="background-color:#323E6F;text-align: center;">
								Total Fee
							</div>
							<p class="text-center border" style="color:black;font-size:13px;">
								<?php echo $total ?>
							</p>
						</div>
						<div class="col-lg-1"></div>
					</div>
					<div class="row mt-1">
						<div class="col-lg-1"></div>
						<div class="col-lg-10 text-center" style="background-color:#323E6F;">
							Fee paid
							<div class="row mt-1">
								<div class="col-lg-3">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0;">
										Registration
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $reg ?>
									</p>
								</div>
								<div class="col-lg-3">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Tuition
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $tuition ?>
									</p>
								</div>
								<div class="col-lg-3">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Test
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $test ?>
									</p>
								</div>
								<div class="col-lg-3">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Other
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $other ?>
									</p>
								</div>
							</div>
							<div class="row mt-1">
								<div class="col-lg-4">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0;">
										Total
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $paidtotal ?>
									</p>
								</div>
								<div class="col-lg-4">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Balance
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $balance ?>
									</p>
								</div>
								<div class="col-lg-4">
									<div style="background-color:#323E6F;text-align: center;border:1px solid white;border-radius: 0">
										Due Date
									</div>
									<p class="text-center border" style="background-color:white;color:black;font-size:13px;">
										<?php echo $duedate ?>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-12">
						<table class="table">
							<tr class="table-bordered">
								<td style="background-color:#323E6F;color:white;width: 15%;font-size: 22px">Submitted By :</td>
								<td  class="pl-5" style="color: black">
									<input class="form-control text-capitalize" type="text" name="submitby" placeholder="Name">
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-2">
						<a href="Studentform1.php" style="text-decoration: none" class="btn-outline-info form-control text-center mt-5">
							<span style="font-weight: 800;">BACK</span>
						</a>
					</div>
					<div class="col-lg-6"></div>
					<div class="col-lg-4 mt-5">
						<input style="font-weight: 800;" type="submit" class="next form-control btn btn-outline-success" value="SUBMIT" name="submit">
						<input type="hidden" name="check5" value="true">
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-1"></div>
	</div>





</body>
</html>