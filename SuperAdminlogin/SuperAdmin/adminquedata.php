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
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="mt-2 row border border-dark"></div>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<form action="addingdatains_admin.php" method="post" class="form1">
	<?php
		if (empty($_POST['supercheck1'])) 
		{
	 		header('Location:superadmin.php');
		}  
	?>

	<?php 
		$numofdata = $_POST['numofdata'];
	?>




	<?php
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
		for ($i=1; $i <=$numofdata ; $i++) 
		{ 
			$data ="SELECT *
					FROM New_Student_Admin
					WHERE id='$i';
					";
			$result = mysqli_query($conn,$data);		
			$studentinfo = mysqli_fetch_array($result);

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
			$submission_date =$studentinfo['Submission_date'];
			$submit_by =$studentinfo['Submit_By'];



			?>
					<div class="row mt-2">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="row mt-1">
								<div class="col-lg-12">
									<div class="text-uppercase mt-3 text-white h5 font-weight-bold" style="background-color:#323E6F;text-align: center;">
										Student Form <?php echo $i?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="text-uppercase text-white h5 font-weight-bold table-responsive" style="text-align: center;">
										<table class="table table-bordered">
											<tr  style="font-size: 15px;background-color:gray;color:white;">
												<th>Submission Date</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Class</th>
												<th>Subjects</th>
												<th>Registration</th>
												<th>Tuition</th>
												<th>Total fee</th>
											</tr>
											<tr  style="font-size: 12px;">
												<td><?php echo $submission_date ?></td>
												<td><?php echo $sname ?></td>
												<td><?php echo $gender ?></td>
												<td><?php echo $class ?></td>
												<td><?php echo $sub ?></td>
												<td><?php echo $reg ?></td>
												<td><?php echo $tuition ?></td>
												<td><?php echo $paidtotal ?></td>
											</tr>
										</table>
									</div>	
								</div>
							</div>
							<div class="row">

								<div class="col-lg-3">
									<div class="text-uppercase text-white h5 font-weight-bold table-responsive" style="text-align: center;">
										<table class="table table-bordered">
											<tr  style="font-size: 15px;background-color:gray;color:white;">
												<th>Submitted By</th>
											</tr>
											<tr  style="font-size: 12px;">
												<td><?php echo $submit_by ?></td>
											</tr>
										</table>
									</div>
								</div>
								<div class="col-lg-6"></div>
								<div class="col-lg-3 text-right custom-radio custom-control">	
									<div class="btn btn-info" id="<?php echo'button'.$i?>" onclick="<?php echo 'viewform'.$i.'()';?>">View
									</div>
									<input type="hidden" value="1" id="<?php echo'forms'.$i?>">
									<label class="btn btn-success mt-2" >
										<input value="accept" type="radio" name="accept_del<?php echo$i?>" checked>Accept
									</label>
									<label class="btn btn-danger mt-2">
										<input value="delete" type="radio" name="accept_del<?php echo$i?>">Delete
									</label>
								</div>
							</div>

							<div class="text-uppercase text-white font-weight-bold mt-5" value="true" style="display:none;" id="<?php echo 'form'.$i?>">
									<div class="row mt-1">
										<div class="col-lg-12"  style="background-color:#323E6F;text-align: center;">
											Academic Information
										</div>
									</div>
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
								<div class="mt-5"></div>

						</div>
						<div class="col-lg-1"></div>
					</div>	
				


			<?php


		
		}
		mysqli_close($conn);

	?>
		<div class="row mb-5">
			<div class="col-lg-1"></div>
			<div class="col-lg-3">
				<a href="superadmin.php" style="text-decoration: none" class="btn-outline-info form-control text-center mt-5">
					<span style="font-weight: 800;">BACK</span>
				</a>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-6 mt-5">
				<?php
					if ($numofdata>0) 
					{
						echo'
							<input style="font-weight: 800;" type="submit" class="next form-control btn btn-outline-success" value="CONFIRM" name="confirm">
						';
					}
					else
					{

					}
				?>
			</div>
		</div>
		<input type="hidden" name="adminquecheck" value="true">
		<input type="hidden" name="numofdata" value="<?php echo $numofdata; ?>">
	</form>
			<script>
					function viewform1() 
					{				
						var form = document.getElementById('form1');
						var viewbutton = document.getElementById('forms1');
						if (parseInt(viewbutton.value%2)!=0)
						{	
							document.getElementById('button1').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button1').innerHTML="View";
							form.style.display= "none";
						}
							viewbutton.value=parseInt(viewbutton.value)+1;
						}
					function viewform2() 
					{				
						var form = document.getElementById('form2');
						var viewbutton = document.getElementById('forms2');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button2').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button2').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform3() 
					{				
						var form = document.getElementById('form3');
						var viewbutton = document.getElementById('forms3');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button3').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button3').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform4() 
					{				
						var form = document.getElementById('form4');
						var viewbutton = document.getElementById('forms4');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button4').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
				 			document.getElementById('button4').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform5() 
					{				
						var form = document.getElementById('form5');
						var viewbutton = document.getElementById('forms5');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button5').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button5').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform6() 
					{				
						var form = document.getElementById('form6');
						var viewbutton = document.getElementById('forms6');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button6').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button6').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform7() 
					{				
						var form = document.getElementById('form7');
						var viewbutton = document.getElementById('forms7');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button7').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button7').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform8() 
					{				
						var form = document.getElementById('form8');
						var viewbutton = document.getElementById('forms8');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button8').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button8').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform9() 
					{				
						var form = document.getElementById('form9');
						var viewbutton = document.getElementById('forms9');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button9').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button9').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform10() 
					{				
						var form = document.getElementById('form10');
						var viewbutton = document.getElementById('forms10');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button10').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button10').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform11() 
					{				
						var form = document.getElementById('form11');
						var viewbutton = document.getElementById('forms11');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button11').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button11').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform12() 
					{				
						var form = document.getElementById('form12');
						var viewbutton = document.getElementById('forms12');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button12').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button12').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewfor132() 
					{				
						var form = document.getElementById('form13');
						var viewbutton = document.getElementById('forms13');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button13').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button13').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform14() 
					{				
						var form = document.getElementById('form14');
						var viewbutton = document.getElementById('forms14');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button14').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button14').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform15() 
					{				
						var form = document.getElementById('form15');
						var viewbutton = document.getElementById('forms15');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button15').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button15').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform16() 
					{				
						var form = document.getElementById('form16');
						var viewbutton = document.getElementById('forms16');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button16').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button16').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform17() 
					{				
						var form = document.getElementById('form17');
						var viewbutton = document.getElementById('forms17');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button17').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button17').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform18() 
					{				
						var form = document.getElementById('form18');
						var viewbutton = document.getElementById('forms18');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button18').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button18').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform19() 
					{				
						var form = document.getElementById('form19');
						var viewbutton = document.getElementById('forms19');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button19').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button19').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}

					function viewform20() 
					{				
						var form = document.getElementById('form20');
						var viewbutton = document.getElementById('forms20');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button20').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button20').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform21() 
					{				
						var form = document.getElementById('form21');
						var viewbutton = document.getElementById('forms21');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button21').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button21').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform22() 
					{				
						var form = document.getElementById('form22');
						var viewbutton = document.getElementById('forms22');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button22').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button22').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform23() 
					{				
						var form = document.getElementById('form23');
						var viewbutton = document.getElementById('forms23');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button23').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button23').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform24() 
					{				
						var form = document.getElementById('form24');
						var viewbutton = document.getElementById('forms24');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button24').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button24').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform25() 
					{				
						var form = document.getElementById('form25');
						var viewbutton = document.getElementById('forms25');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button25').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button25').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform26() 
					{				
						var form = document.getElementById('form26');
						var viewbutton = document.getElementById('forms26');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button26').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button26').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform27() 
					{				
						var form = document.getElementById('form27');
						var viewbutton = document.getElementById('forms27');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button27').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button27').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform28() 
					{				
						var form = document.getElementById('form28');
						var viewbutton = document.getElementById('forms28');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button28').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button28').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform29() 
					{				
						var form = document.getElementById('form29');
						var viewbutton = document.getElementById('forms29');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button29').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button29').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
					function viewform30() 
					{				
						var form = document.getElementById('form30');
						var viewbutton = document.getElementById('forms30');
						if (parseInt(viewbutton.value)%2!=0)
						{	
							document.getElementById('button30').innerHTML="Hide";
							form.style.display= "";
						}
						else
						{
							document.getElementById('button30').innerHTML="View";
							form.style.display= "none";
						}
						viewbutton.value=parseInt(viewbutton.value)+1;
					}
			</script>


</body>
</html>