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
		if (empty($_POST['check2'])) 
		{
		 	header('Location:Studentform2.php');
		}
		$class = $_POST['class'];
		$batch = $_POST['batch'];
		$status = $_POST['status'];
		$group = $_POST['group'];
		$board = $_POST['board'];

		// student data
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
		$Test = "No";
		$tsubn = 0;
		$tsub = array('');
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
		$countersub = $_POST['subn'];
		$sub1 = htmlspecialchars($_POST['sub1']);
		$sub2 = htmlspecialchars($_POST['sub2']);
		$sub3 = htmlspecialchars($_POST['sub3']);
		$sub4 = htmlspecialchars($_POST['sub4']);
		$sub5 = htmlspecialchars($_POST['sub5']);
		$sub6 = htmlspecialchars($_POST['sub6']);
		$sub7 = htmlspecialchars($_POST['sub7']);
		$sub8 = htmlspecialchars($_POST['sub8']);
		$sub9 = htmlspecialchars($_POST['sub9']);
		$sub10 = htmlspecialchars($_POST['sub10']);
		$sub = array($sub1,$sub2,$sub3,$sub4,$sub5,$sub6,$sub7,$sub8,$sub9,$sub10);
		for ($i=0; $i <10 ; $i++) 
		{ 
			if($sub[$i]=="")
			{
				unset($sub[$i]);
			}		
		}
		// print_r($sub);echo "<br>";
		// echo "Subject number";echo "<br>";
		// echo $countersub; echo "<br>";


		$reg = 1500;
		$other = 0;
		if (($status=="Regular")&&($group=="MSC")) 
		{
			if ($countersub>4) 
			{
				$tuition = $countersub*2600;
				$tuition = $tuition - ($tuition*0.1);	
			}
			else
			{
				$tuition = $countersub*2600;
			}
		}
		else if (($status=="Regular")&&($group=="MCOM")) 
		{
			if ($countersub>4) 
			{
				$tuition = $countersub*2500;
				$tuition = $tuition - ($tuition*0.1);	
			}
			else
			{
				$tuition = $countersub*2500;
			}
		}
		else if (($status=="Regular")&&($group=="MA")) 
		{
			if ($countersub>4) 
			{
				$tuition = $countersub*2400;
				$tuition = $tuition - ($tuition*0.1);	
			}
			else
			{
				$tuition = $countersub*2400;
			}
		}
		else if (($status=="Regular")&&($majorsub=="Junior")) 
		{
			if ($countersub>5) 
			{
				$tuition = 3000;
			}
			else
			{
				$tuition = $countersub*600;
			}
		}
		else if (($status=="Special")&&($majorsub=="Junior")) 
		{
			if ($countersub>5) 
			{
				$tuition = 4000;
			}
			else
			{
				$tuition = $countersub*800;
			}
		}
		else if ((($status=="Supply")||($status=="Special"))&&($majorsub=="Masters")) 
		{
			if ($countersub>4) 
			{
				$tuition = $countersub*7000;
				$tuition = $tuition - ($tuition*0.1);	
			}
			else
			{
				$tuition = $countersub*6000;
			}
		}
		else
		{
			$tuition=0;
		}
		$actualfee = $reg + $tuition + $other;
		$total=$actualfee;
		// echo $tuition;

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
	<div class="row mt-4">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 border border-dark border-left-0 border-right-0">
			<form class="form-group form1 mb-5" id="subj" method="post" action="Studentform4.php">
				<div class="text-uppercase mt-3 text-white h2 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					fee structure 
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
				<input type="hidden" name="tsubs" value="<?php foreach ($tsub as $tsubs) 
															{
																echo $tsubs;echo " ";
															}
														?>">
				<input type="hidden" name="tsubn" value="<?php echo ($tsubn)?>">

				<input type="hidden" name="subs" value="<?php foreach ($sub as $subs) 
															{
																echo $subs;echo ",";
															}
														?>">
				<input type="hidden" name="countersub" value="<?php echo ($countersub)?>">
				<!-- Third page data endss -->











				<div class="row">
					<div class="col-lg-4">
						<div class="text-uppercase mt-3 text-white p-2" style="background-color:#43464B;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
							Registration
						</div>
						<input id="dis" disabled class="form-control text-center font-weight-bold" type="text" name="reg" value="<?php echo $reg ?>">
						
					</div>
					<div class="col-lg-4">
						<div class="text-uppercase mt-3 text-white p-2" style="background-color:#43464B;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
							Tuition
						</div>
						<input id="dis" disabled class="form-control text-center font-weight-bold" type="text" name="tuition" value="<?php echo $tuition?>">
						
					</div>
					<div class="col-lg-4">
						<div class="text-uppercase mt-3 text-white p-2" style="background-color:#43464B;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
							Other
						</div>
						<input id="dis" disabled class="form-control text-center font-weight-bold" type="text" name="other" value="<?php echo $other?>">
						
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-4">
								<div class="text-uppercase mt-3 text-white p-2" style="background-color:#43464B;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
											Actual Fee
								</div>
								<input style="cursor: no-drop;" id="actual"  disabled class="form-control text-center font-weight-bold" type="text" name="other" value="<?php echo $actualfee?>">
								<input style="cursor: no-drop;" id="actual" class="form-control text-center font-weight-bold" type="hidden" name="actualfee" value="<?php echo $actualfee?>">
								<div class="text-uppercase mt-3 text-white p-2" style="background-color:#323E6F;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
										Discount provided
								</div>
								<input id="discount" class="form-control text-center font-weight-bold" type="Number" name="discount" value="<?php echo $discount=0?>">
								<div class="text-uppercase mt-3 text-white p-2" style="background-color:#43464B;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
									Total Fee
								</div>
								<input style="cursor: no-drop;" id="total" disabled class="form-control text-center font-weight-bold" type="text" name="other" value="<?php echo $total?>">
								<input style="cursor: no-drop;" id="total" class="form-control text-center font-weight-bold" type="hidden" name="total" value="<?php echo $total?>">
							</div>
							<div class="col-lg-8 mt-3" style="border:5px inset lightgray;">
								<div class="text-uppercase mt-2 text-white h2 font-weight-bold" style="background-color:#323E6F;text-align: center;">
									fee paid 
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="text-uppercase mt-3 text-white p-2" style="background-color:#323E6F;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
											Registration
										</div>
										<input id="preg" class="form-control text-center font-weight-bold" type="Number" name="preg" placeholder="0"  value="0">
									</div>
									<div class="col-lg-4">
										<div class="text-uppercase mt-3 text-white p-2" style="background-color:#323E6F;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
											Tuition
										</div>
										<input id="ptuition" class="form-control text-center font-weight-bold" type="Number" name="ptuition" placeholder="0"  value="0">
									</div>
									<div class="col-lg-4">
										<div class="text-uppercase mt-3 text-white p-2" style="background-color:#323E6F;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
											Other
										</div>
										<input id="pother" class="form-control text-center font-weight-bold" type="Number" name="pother" placeholder="0"  value="0">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="row">
											<div class="col-lg-4">
												<div class="text-uppercase mt-3 text-white p-2" style="background-color:#43464B;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
													Total Paid
												</div>
												<input style="cursor: no-drop;" disabled id="dptotal" class="form-control text-center font-weight-bold" type="Number" name="ptotal" placeholder="0" value="">
												<span id="balanceerror" style="color: red;font-size: 15px;font-family:italic"></span>
												<input id="ptotal" class="form-control text-center font-weight-bold" type="hidden" name="ptotal" placeholder="0" value="">
											</div>
											<div class="col-lg-4">
												<div class="text-uppercase mt-3 text-white p-2 bg-danger" style="text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
													Balance
												</div>
												<input style="cursor: no-drop;" disabled id="dbalance" class="form-control text-center font-weight-bold" type="Number" name="balance" placeholder="0">
												<input id="balance" class="form-control text-center font-weight-bold" type="hidden" name="balance" placeholder="0">
												
											</div>
											<div class="col-lg-4">
												<div class="text-uppercase mt-3 text-white p-2" style="background-color:#323E6F;text-align: center;font-size: 16px;font-family: Lucida Sans Unicode;">
													Due Date
												</div>
												<input class="form-control text-center" type="date" name="duedate">
											</div>
										</div>
									</div>
								 </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-4"></div>
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<input class="btn text-white text-uppercase font-weight-bold btn-warning btn-block" type="button" onclick="calculation()" value="Calculate">
					</div>
					<div class="col-lg-1"></div>
					<div class="col-lg-4"></div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-2">
						<a href="Studentform1.php" style="text-decoration: none" class="btn-outline-info form-control text-center mt-5">
							<span style="font-weight: 800;">BACK</span>
						</a>
					</div>
					<div class="col-lg-6"></div>
					<div class="col-lg-2 mt-5">
						<input style="font-weight: 800;" type="reset" class="form-control btn btn-outline-danger" value="RESET" name="reset">
					</div>
					<div class="col-lg-2 mt-5">
						<input style="font-weight: 800;" type="submit" class="next form-control btn btn-outline-success" value="NEXT" name="submit">
						<input type="hidden" name="check4" value="true">
					</div>
				</div>
				
				<input id="ptest" class="form-control text-center font-weight-bold" type="hidden" name="ptest" placeholder="0"  value="0">
			</form>
		</div>

		<div class="col-lg-1"></div>


		<script>
			function calculation()
			{
				var discount = parseInt(document.getElementById('discount').value);
				var actual = parseInt(document.getElementById('actual').value);
				var total    = document.getElementById('total');
				var preg = parseInt(document.getElementById('preg').value);
				var ptuition = parseInt(document.getElementById('ptuition').value);
				var pother = parseInt(document.getElementById('pother').value);
				var dptotal = document.getElementById('dptotal');
				var ptotal = document.getElementById('ptotal');
				var dbalance= document.getElementById('dbalance');
				var balance= document.getElementById('balance');
				total.value = actual-discount;
				dptotal.value = preg+ptuition+pother;
				ptotal.value  = preg+ptuition+pother;
				if(ptotal.value<parseInt(total.value))
				{
					dbalance.value = parseInt(total.value) - ptotal.value;	
					balance.value = parseInt(total.value) - ptotal.value;	
					document.getElementById('balanceerror').innerHTML="";
				}
				else if(ptotal.value>parseInt(total.value))
				{
					document.getElementById('balanceerror').innerHTML="*Cannot be Greater then Total Fee";
				}
				else
				{
					dbalance.value =0;
					balance.value =0;
					document.getElementById('balanceerror').innerHTML="";

				}
			}
			
		</script>
</body>
</html>