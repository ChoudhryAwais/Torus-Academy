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

	?>
	 <script>
	 	function validation3()
	 	{
	 		var majorsubi = document.getElementById("majorsubi").value;
			var classi = document.getElementById("classi").value;
			var groupi = document.getElementById("groupi").value;
			if (majorsubi=="Matric") 
			{
				var sub1 = document.getElementById("sub1");
				var sub2 = document.getElementById("sub2");
				var sub3 = document.getElementById("sub3");
				var sub4 = document.getElementById("sub4");
				var sub5 = document.getElementById("sub5");
				var sub6 = document.getElementById("sub6");
				var sub7 = document.getElementById("sub7");
				var sub8 = document.getElementById("sub8");
				var sub9 = document.getElementById("sub9");
				var sub10 = document.getElementById("sub10");
				var sub11 = document.getElementById("sub11");
				var sub12 = document.getElementById("sub12");
				var sub13 = document.getElementById("sub13");
				var sub14 = document.getElementById("sub14");
				var sub15 = document.getElementById("sub15");
				var sub16 = document.getElementById("sub16");
				var sub17 = document.getElementById("sub17");

				if ((sub1.checked==true)||(sub2.checked==true)||(sub3.checked==true)||(sub4.checked==true)||(sub5.checked==true)||(sub6.checked==true)||(sub7.checked==true)||(sub8.checked==true)||(sub9.checked==true)||(sub10.checked==true)||(sub11.checked==true)||(sub12.checked==true)||(sub13.checked==true)||(sub14.checked==true)||(sub15.checked==true)||(sub16.checked==true)||(sub17.checked==true)) 
				{
					return true;
				}
				else
				{
					document.getElementById("errorbar").innerHTML=("*Please Select Atleast One Subject");
					return false;
				}
			}
			else if ((groupi=="FSC_Med")||(groupi=="FSC_Eng")||(groupi=="ICS_Phy")||(groupi=="ICS_Stats")||(groupi=="ICS_Eco"))
			{
				var sub1 = document.getElementById("sub1");
				var sub2 = document.getElementById("sub2");
				var sub3 = document.getElementById("sub3");
				var sub4 = document.getElementById("sub4");
				var sub5 = document.getElementById("sub5");
				var sub6 = document.getElementById("sub6");
				var sub7 = document.getElementById("sub7");
				var sub8 = document.getElementById("sub8");
				var sub9 = document.getElementById("sub9");
				var sub10 = document.getElementById("sub10");
				var sub11 = document.getElementById("sub11");
				var sub12 = document.getElementById("sub12");
				var sub13 = document.getElementById("sub13");

				if ((sub1.checked==true)||(sub2.checked==true)||(sub3.checked==true)||(sub4.checked==true)||(sub5.checked==true)||(sub6.checked==true)||(sub7.checked==true)||(sub8.checked==true)||(sub9.checked==true)||(sub10.checked==true)||(sub11.checked==true)||(sub12.checked==true)||(sub13.checked==true)) 
				{
					return true;
				}
				else
				{
					document.getElementById("errorbar").innerHTML=("*Please Select Atleast One Subject");
					return false;
				}
			}
			else if ((groupi=="ICOM")||(groupi=="FA"))
			{
				var sub1 = document.getElementById("sub1");
				var sub2 = document.getElementById("sub2");
				var sub3 = document.getElementById("sub3");
				var sub4 = document.getElementById("sub4");
				var sub5 = document.getElementById("sub5");
				var sub6 = document.getElementById("sub6");
				var sub7 = document.getElementById("sub7");
				var sub8 = document.getElementById("sub8");
				var sub9 = document.getElementById("sub9");
				var sub10 = document.getElementById("sub10");
				var sub11 = document.getElementById("sub11");
				var sub12 = document.getElementById("sub12");
				var sub13 = document.getElementById("sub13");
				var sub14 = document.getElementById("sub14");
				var sub15 = document.getElementById("sub15");

				if ((sub1.checked==true)||(sub2.checked==true)||(sub3.checked==true)||(sub4.checked==true)||(sub5.checked==true)||(sub6.checked==true)||(sub7.checked==true)||(sub8.checked==true)||(sub9.checked==true)||(sub10.checked==true)||(sub11.checked==true)||(sub12.checked==true)||(sub13.checked==true)||(sub14.checked==true)||(sub15.checked==true)) 
				{
					return true;
				}
				else
				{
					document.getElementById("errorbar").innerHTML=("*Please Select Atleast One Subject");
					return false;
				}
			}
			else if (groupi=="BSC")
			{
				var sub1 = document.getElementById("sub1");
				var sub2 = document.getElementById("sub2");
				var sub3 = document.getElementById("sub3");
				var sub4 = document.getElementById("sub4");
				var sub5 = document.getElementById("sub5");
				var sub6 = document.getElementById("sub6");
				var sub7 = document.getElementById("sub7");
				var sub8 = document.getElementById("sub8");
				var sub9 = document.getElementById("sub9");
				var sub10 = document.getElementById("sub10");
				var sub11 = document.getElementById("sub11");
				var sub12 = document.getElementById("sub12");
				var sub13 = document.getElementById("sub13");
				var sub14 = document.getElementById("sub14");
				var sub15 = document.getElementById("sub15");
				var sub16 = document.getElementById("sub16");
				var sub17 = document.getElementById("sub17");
				var sub18 = document.getElementById("sub18");
				var sub19 = document.getElementById("sub19");
				var sub20 = document.getElementById("sub20");
				var sub21 = document.getElementById("sub21");
				var sub22 = document.getElementById("sub22");
				var sub22 = document.getElementById("sub23");
				var sub24 = document.getElementById("sub24");
				var sub25 = document.getElementById("sub25");
				var sub26 = document.getElementById("sub26");
				var sub27 = document.getElementById("sub27");
				var sub28 = document.getElementById("sub28");
				var sub29 = document.getElementById("sub29");
				var sub30 = document.getElementById("sub30");
				var sub31 = document.getElementById("sub31");

				if ((sub1.checked==true)||(sub2.checked==true)||(sub3.checked==true)||(sub4.checked==true)||(sub5.checked==true)||(sub6.checked==true)||(sub7.checked==true)||(sub8.checked==true)||(sub9.checked==true)||(sub10.checked==true)||(sub11.checked==true)||(sub12.checked==true)||(sub13.checked==true)||(sub14.checked==true)||(sub15.checked==true)||(sub16.checked==true)||(sub17.checked==true)||(sub18.checked==true)||(sub19.checked==true)||(sub20.checked==true)||(sub21.checked==true)||(sub22.checked==true)||(sub23.checked==true)||(sub24.checked==true)||(sub25.checked==true)||(sub26.checked==true)||(sub27.checked==true)||(sub28.checked==true)||(sub29.checked==true)||(sub30.checked==true)||(sub31.checked==true)) 
				{
					return true;
				}
				else
				{
					document.getElementById("errorbar").innerHTML=("*Please Select Atleast One Subject");
					return false;
				}
			}
			else if ((groupi=="BCOM")||(groupi=="BA"))
			{
				var sub1 = document.getElementById("sub1");
				var sub2 = document.getElementById("sub2");
				var sub3 = document.getElementById("sub3");
				var sub4 = document.getElementById("sub4");
				var sub5 = document.getElementById("sub5");
				var sub6 = document.getElementById("sub6");
				var sub7 = document.getElementById("sub7");
				var sub8 = document.getElementById("sub8");
				var sub9 = document.getElementById("sub9");
				var sub10 = document.getElementById("sub10");
				var sub11 = document.getElementById("sub11");
				var sub12 = document.getElementById("sub12");
				var sub13 = document.getElementById("sub13");
				var sub14 = document.getElementById("sub14");
				var sub15 = document.getElementById("sub15");
				var sub16 = document.getElementById("sub16");

				if ((sub1.checked==true)||(sub2.checked==true)||(sub3.checked==true)||(sub4.checked==true)||(sub5.checked==true)||(sub6.checked==true)||(sub7.checked==true)||(sub8.checked==true)||(sub9.checked==true)||(sub10.checked==true)||(sub11.checked==true)||(sub12.checked==true)||(sub13.checked==true)||(sub14.checked==true)||(sub15.checked==true)||(sub16.checked==true)) 
				{
					return true;
				}
				else
				{
					document.getElementById("errorbar").innerHTML=("*Please Select Atleast One Subject");
					return false;
				}
			}

	 	}


	 </script>
	 

	 <!-- Form starts -->
	<form class="form-group form1 mb-5" name="forms" id="subj" method="post" action="Studentform3.php" onsubmit="return validation3()">

	 	<?php 

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
			$Test =$_POST['Test'];

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
			$sub = $_POST['sub'];
			$countersub=0;
		   
			// echo $class;
			foreach ($sub as $subs) 
			{
				$countersub+=1;
				// echo $countersub;
				
			}			
				
		
		 ?>
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
				<input type="hidden" name="subs" value="<?php foreach ($sub as $subs) 
															{
																echo $subs;echo " ";
															}
														?>">
				<input type="hidden" name="countersub" value="<?php echo ($countersub)?>">
				<!-- Third page data endss -->


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




			
		 		<!-- Pervious data -->
				<div class="text-uppercase mt-3 text-white h3 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Applying for 
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-1 text-white h4 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							discipline you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input  id="dis" disabled class="form-control mt-1 text-uppercase" type ="text" placeholder="<?php echo $majorsub ?>" style="border:3px inset lightgray;font-weight: 700">
						<input id="majorsubi" type="hidden" value="<?php echo $majorsub ?>">	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-1 text-white h4 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							Class you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input id="dis" disabled class="form-control mt-1 text-uppercase" type ="text" placeholder="<?php echo $class ?>" value="" style="border:3px inset lightgray;font-weight: 700">	
						<input id="classi" type="hidden" value="<?php echo $class ?>">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-1 text-white h4 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							Group you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input id="dis" disabled class="form-control mt-1 text-uppercase" type ="text" placeholder="<?php echo $group ?>" value="" style="border:3px inset lightgray;font-weight: 700">	
						<input id="groupi" type="hidden" value="<?php echo $group ?>">
					</div>
				</div>
				<div class="text-uppercase mt-3 text-white h3 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Select your Test Series Subjects 
				</div>
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-4 text-center">
						<span id="errorbar" style="color: red;font-size: 15px;font-family:italic;"></span>
					</div>	
					<div class="col-lg-4"></div>
				</div>


				<?php
				
				if($Test=="Yes")
				{
				// Matric Subjects Starts***********************************************************
// ******************************************************************************************************
					if (($majorsub=="Matric")&&($group=="Sci_Bio")) 
					{
						echo 
						'
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<hr>
							<div id="subline" style="display:;">
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub2" name="tsub[]" value="Bio-I">
										<label for="sub2">Biology-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub3" name="tsub[]" value="Bio-II">
										<label for="sub3">Biology-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
										<label for="sub4">English-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
										<label for="sub5">English-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub6" name="tsub[]" value="Chem-I">
										<label for="sub6">Chemistry-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub7" name="tsub[]" value="Chem-II">
										<label for="sub7">Chemistry-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub8" name="tsub[]" value="P.St-I">
										<label for="sub8">Pak Studies-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub9" name="tsub[]" value="P.St-II">
										<label for="sub9">Pak Studies-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub10" name="tsub[]" value="Phy-I">
										<label for="sub10">Physics-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub11" name="tsub[]" value="Phy-II">
										<label for="sub11">Physics-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
										<label for="sub12">Urdu-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
										<label for="sub13">Urdu-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub14" name="tsub[]" value="Math-I">
										<label for="sub14">Maths-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub15" name="tsub[]" value="Math-II">
										<label for="sub15">Maths-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub16" name="tsub[]" value="Isl-I">
										<label for="sub16">Islamiat-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub17" name="tsub[]" value="Isl-II">
										<label for="sub17">Islamiat-II</label>
									</div>
								</div>					
							</div>

						';
					}
					if (($majorsub=="Matric")&&($group=="Sci_Comp")) 
					{
						echo 
						'
							<div class="row">
								<div class="col-lg-12 mb-3">
									<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
									<label for="sub1">All Subjects</label>
								</div>
							</div>
							<hr>
							<div id="subline" style="display:;">
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub2" name="tsub[]" value="Computer-I">
										<label for="sub2">Computer-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub3" name="tsub[]" value="Computer-II">
										<label for="sub3">Computer-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
										<label for="sub4">English-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
										<label for="sub5">English-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub6" name="tsub[]" value="Chem-I">
										<label for="sub6">Chemistry-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub7" name="tsub[]" value="Chem-II">
										<label for="sub7">Chemistry-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub8" name="tsub[]" value="P.St-I">
										<label for="sub8">Pak Studies-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub9" name="tsub[]" value="P.St-II">
										<label for="sub9">Pak Studies-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub10" name="tsub[]" value="Phy-I">
										<label for="sub10">Physics-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub11" name="tsub[]" value="Phy-II">
										<label for="sub11">Physics-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
										<label for="sub12">Urdu-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
										<label for="sub13">Urdu-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub14" name="tsub[]" value="Math-I">
										<label for="sub14">Maths-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub15" name="tsub[]" value="Math-II">
										<label for="sub15">Maths-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub16" name="tsub[]" value="Isl-I">
										<label for="sub16">Islamiat-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub17" name="tsub[]" value="Isl-II">
										<label for="sub17">Islamiat-II</label>
									</div>
								</div>
							</div>					

						';
					}
					elseif(($majorsub=="Matric")&&($group=="Arts"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Civics-I">
											<label for="sub2">Civics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Civics-II">
											<label for="sub3">Civics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Phy-Edu-I">
											<label for="sub6">Phy-Edu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Phy-Edu-II">
											<label for="sub7">Phy-Edu-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="P.St-I">
											<label for="sub8">Pak Studies-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St-II">
											<label for="sub9">Pak Studies-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Eco-I">
											<label for="sub10">Economics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Eco-II">
											<label for="sub11">Economics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub14" name="tsub[]" value="G-Maths-I">
											<label for="sub14">General Maths-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub15" name="tsub[]" value="G-Maths-II">
											<label for="sub15">General Maths-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub16" name="tsub[]" value="Isl-I">
											<label for="sub16">Islamiat-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub17" name="tsub[]" value="Isl-II">
											<label for="sub17">Islamiat-II</label>
										</div>
									</div>
								</div>
								';
						}

					// Matric Subjects Ends***********************************************************
	//******************************************************************************************************




					// Intermediate subjects starts***********************************************************
						elseif(($majorsub=="Intermediate")&&($group=="FSC_Med"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Bio-I">
											<label for="sub2">Biology-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Bio-II">
											<label for="sub3">Biology-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Chem-I">
											<label for="sub6">Chemistry-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Chem-II">
											<label for="sub7">Chemistry-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Phy-I">
											<label for="sub10">Physics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Phy-II">
											<label for="sub11">Physics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Intermediate")&&($group=="FSC_Eng"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Math-I">
											<label for="sub2">Maths-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Math-II">
											<label for="sub3">Maths-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Chem-I">
											<label for="sub6">Chemistry-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Chem-II">
											<label for="sub7">Chemistry-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Phy-I">
											<label for="sub10">Physics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Phy-II">
											<label for="sub11">Physics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Intermediate")&&($group=="ICS_Phy"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Math-I">
											<label for="sub2">Maths-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Math-II">
											<label for="sub3">Maths-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Comp-I">
											<label for="sub6">Computer-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Comp-II">
											<label for="sub7">Computer-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Phy-I">
											<label for="sub10">Physics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Phy-II">
											<label for="sub11">Physics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Intermediate")&&($group=="ICS_Stats"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Math-I">
											<label for="sub2">Maths-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Math-II">
											<label for="sub3">Maths-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Comp-I">
											<label for="sub6">Computer-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Comp-II">
											<label for="sub7">Computer-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Stats-I">
											<label for="sub10">Statistics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Stats-II">
											<label for="sub11">Statistics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Intermediate")&&($group=="ICS_Eco"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Eco-I">
											<label for="sub2">Economics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Eco-II">
											<label for="sub3">Economics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Comp-I">
											<label for="sub6">Computer-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Comp-II">
											<label for="sub7">Computer-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Stats-I">
											<label for="sub10">Statistics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Stats-II">
											<label for="sub11">Statistics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Intermediate")&&($group=="ICOM"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Accounting-I">
											<label for="sub2">Accounting-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Accounting-II">
											<label for="sub3">Accounting-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="B_Math">
											<label for="sub6">Business Maths</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="B_Stats">
											<label for="sub7">Business Stats</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="POE">
											<label for="sub10">Principal of Eco</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="POC">
											<label for="sub11">Principal of Com</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub14" name="tsub[]" value="Banking">
											<label for="sub14">Banking</label>
										</div>
										<div class="col-lg-6">
											<input type="checkbox" id="sub15" name="tsub[]" value="Com_Geo">
											<label for="sub15">Commercial Geography</label>
										</div>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Intermediate")&&($group=="FA"))
						{
							echo ' 
								<div class="row">
									<div class="col-lg-12 mb-3">
										<input onclick="checkAll()" type="checkbox" id="sub1" name="tsub[]" value="All_Subject">
										<label for="sub1">All Subjects</label>
									</div>
								</div>
								<hr>
								<div id="subline" style="display:;">
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub2" name="tsub[]" value="Civics-I">
											<label for="sub2">Civics-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub3" name="tsub[]" value="Civics-II">
											<label for="sub3">Civics-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub4" name="tsub[]" value="English-I">
											<label for="sub4">English-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub5" name="tsub[]" value="English-II">
											<label for="sub5">English-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub6" name="tsub[]" value="Phy_Edu-I">
											<label for="sub6">Physical Edu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub7" name="tsub[]" value="Phy_Edu-II">
											<label for="sub7">Physical Edu-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub8" name="tsub[]" value="Isl">
											<label for="sub8">Islamiat</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub9" name="tsub[]" value="P.St">
											<label for="sub9">Pak Studies</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub10" name="tsub[]" value="Isl_Elt-I">
											<label for="sub10">Islamiat Elective-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub11" name="tsub[]" value="Isl_Elt-II">
											<label for="sub11">Islamiat Elective-II</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub12" name="tsub[]" value="Urdu-I">
											<label for="sub12">Urdu-I</label>
										</div>
										<div class="col-lg-3">
											<input type="checkbox" id="sub13" name="tsub[]" value="Urdu-II">
											<label for="sub13">Urdu-II</label>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3">
											<input type="checkbox" id="sub14" name="tsub[]" value="Eco-I">
											<label for="sub14">Economics-I</label>
										</div>
										<div class="col-lg-6">
											<input type="checkbox" id="sub15" name="tsub[]" value="Eco-II">
											<label for="sub15">Economics-II</label>
										</div>
									</div>
								</div>
								';
						}
					// Intermediate subjects ends***********************************************************
	// ******************************************************************************************************




					// Bachelors subjects starts***********************************************************	

						elseif(($majorsub=="Bachelors")&&($group=="BSC"))
						{
							echo ' 
								<div class="row mt-5">
									<div class="col-lg-3">
										<input type="checkbox" id="sub1" name="tsub[]" value="G_Math-I">
										<label for="sub1">General Maths-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub2" name="tsub[]" value="G_Math-II">
										<label for="sub2">General Maths-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub3" name="tsub[]" value="MathA-I">
										<label for="sub3">MathA-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub4" name="tsub[]" value="MathA-II">
										<label for="sub4">MathA-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub5" name="tsub[]" value="MathB-I">
										<label for="sub5">MathB-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub6" name="tsub[]" value="MathB-II">
										<label for="sub6">MathB-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub7" name="tsub[]" value="Eco-I">
										<label for="sub7">Economics-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub8" name="tsub[]" value="Eco-II">
										<label for="sub8">Economics-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub9" name="tsub[]" value="Stats-I">
										<label for="sub9">Statistics-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub10" name="tsub[]" value="Stats-II">
										<label for="sub10">Statistics-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub11" name="tsub[]" value="In_Chem-I">
										<label for="sub11">Inorganic Chem-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub12" name="tsub[]" value="In_Chem-II">
										<label for="sub12">Inorganic Chem-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub13" name="tsub[]" value="Phy-Chem-I">
										<label for="sub13">Physical Chem-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub14" name="tsub[]" value="Phy-Chem-II">
										<label for="sub14">Physical Chem-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub15" name="tsub[]" value="Psych-I">
										<label for="sub15">Psychology-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub16" name="tsub[]" value="Psych-II">
										<label for="sub16">Psychology-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub17" name="tsub[]" value="BioChem-I">
										<label for="sub17">BioChem-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub18" name="tsub[]" value="BioChem-II">
										<label for="sub18">BioChem-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub19" name="tsub[]" value="Chem-I">
										<label for="sub19">Chem-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub20" name="tsub[]" value="Chem-II">
										<label for="sub20">Chem-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub21" name="tsub[]" value="Zoology-I">
										<label for="sub21">Zoology-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub22" name="tsub[]" value="Zoology-II">
										<label for="sub22">Zoology-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub23" name="tsub[]" value="Botany-I">
										<label for="sub23">Botany-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub24" name="tsub[]" value="Botany-II">
										<label for="sub24">Botany-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub25" name="tsub[]" value="Phy-I">
										<label for="sub25">Physics-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub26" name="tsub[]" value="Phy-II">
										<label for="sub26">Physics-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub27" name="tsub[]" value="Comp-I">
										<label for="sub27">Computer-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub28" name="tsub[]" value="Comp-II">
										<label for="sub28">Computer-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub29" name="tsub[]" value="P.St">
										<label for="sub29">Pak-Studies</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub30" name="tsub[]" value="Eng">
										<label for="sub30">English</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub31" name="tsub[]" value="Isl">
										<label for="sub31">Islamiat</label>
									</div>
								</div>
								
								';	
						}
						elseif(($majorsub=="Bachelors")&&($group=="BCOM"))
						{
							echo ' 
								<div class="row mt-5">
									<div class="col-lg-3">
										<input type="checkbox" id="sub1" name="tsub[]" value="Fin_Acc">
										<label for="sub1">Fin Accounting</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub2" name="tsub[]" value="BSM">
										<label for="sub2">BSM</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub3" name="tsub[]" value="Eco">
										<label for="sub3">Economics</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub4" name="tsub[]" value="MBF">
										<label for="sub4">MBF</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub5" name="tsub[]" value="F_Eng">
										<label for="sub5">Functional Eng</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub6" name="tsub[]" value="Adv_Acc">
										<label for="sub6">Adv Accounting</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub7" name="tsub[]" value="Cost_Acc">
										<label for="sub7">Cost Accounting</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub8" name="tsub[]" value="B_Tax">
										<label for="sub8">Business Tax</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub9" name="tsub[]" value="EOP">
										<label for="sub9">EOP</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub10" name="tsub[]" value="B_Law">
										<label for="sub10">Business Law</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub11" name="tsub[]" value="Audit">
										<label for="sub11">Audit</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub12" name="tsub[]" value="BCRW">
										<label for="sub12">BCRW</label>
									</div>
								</div>
								<div class="row">
								<div class="col-lg-3">
										<input type="checkbox" id="sub13" name="tsub[]" value="Comp-I">
										<label for="sub13">Computer-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub14" name="tsub[]" value="Comp-II">
										<label for="sub14">Computer-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub15" name="tsub[]" value="Isl">
										<label for="sub15">Islamiat</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub16" name="tsub[]" value="P.St">
										<label for="sub16">Pak-Studies</label>
									</div>
								</div>
								';
						}
						elseif(($majorsub=="Bachelors")&&($group=="BA"))
						{
							echo ' 
								<div class="row mt-5">
									<div class="col-lg-3">
										<input type="checkbox" id="sub1" name="tsub[]" value="Eng-I">
										<label for="sub1">English-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub2" name="tsub[]" value="Eng-II">
										<label for="sub2">English-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub3" name="tsub[]" value="Civics-I">
										<label for="sub3">Civics-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub4" name="tsub[]" value="Civics-II">
										<label for="sub4">Civics-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub5" name="tsub[]" value="Phy_Edu-I">
										<label for="sub5">Physical Edu-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub6" name="tsub[]" value="Phy_Edu-II">
										<label for="sub6">Physical Edu-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub7" name="tsub[]" value="Eco/H_Eco-I">
										<label for="sub7">Eco/H-Eco-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub8" name="tsub[]" value="Eco/H_Eco-II">
										<label for="sub8">Eco/H-Eco-II</label>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<input type="checkbox" id="sub9" name="tsub[]" value="Isl-Elt-I">
										<label for="sub9">Islamiat Elective-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub10" name="tsub[]" value="Isl-Elt-II">
										<label for="sub10">Islamiat Elective-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub11" name="tsub[]" value="Persian-I">
										<label for="sub11">Persian-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub12" name="tsub[]" value="Persian-II">
										<label for="sub12">Persian-II</label>
									</div>
								</div>
								<div class="row">
								<div class="col-lg-3">
										<input type="checkbox" id="sub13" name="tsub[]" value="S_St-I">
										<label for="sub13">Social Studies-I</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub14" name="tsub[]" value="S_St-II">
										<label for="sub14">Social-Studies-II</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub15" name="tsub[]" value="Isl">
										<label for="sub15">Islamiat</label>
									</div>
									<div class="col-lg-3">
										<input type="checkbox" id="sub16" name="tsub[]" value="P.St">
										<label for="sub16">Pak-Studies</label>
									</div>
								</div>
								';
						}
				}
				else
				{

				}
				// Bachelors subjects ends***********************************************************	
				 ?>
			<?php 
				if($Test=="Yes")
				{		
				   	echo ' 	 
						<div class="row mt-5 mb-3">
							<div class="col-lg-2">
								<a href="Studentform.php" style="text-decoration: none" class="btn-outline-info form-control text-center mt-5">
									<span style="font-weight: 800;">BACK</span>
								</a>
							</div>
							<div class="col-lg-6"></div>
							<div class="col-lg-2 mt-5">
								<input style="font-weight: 800;" type="reset" class="form-control btn btn-outline-danger" value="RESET" name="reset">
							</div>
							<div class="col-lg-2 mt-5">
								<input style="font-weight: 800;" type="submit" class="next form-control btn btn-outline-success" value="NEXT" name="submit">
							</div>
								<input type="hidden" name="check3" value="true">
						</div>
					';
				}
				else
				{
					echo ' 	 
						<div class="row mt-4">
							<div class="col-lg-2">
								<a href="Studentform.php" style="text-decoration: none" class="btn-outline-info form-control text-center mt-5">
									<span style="font-weight: 800;">BACK</span>
								</a>
							</div>
							<div class="col-lg-6"></div>
							<div class="col-lg-4 mt-5 mb-5">
								<input style="font-weight: 800;" type="submit" class="next form-control btn btn-outline-danger" value="SKIP" name="submit">
							</div>
								<input type="hidden" name="check3" value="true">
						</div>
					';
				}
			?>

			</form>
			<!-- Form ends -->
		</div>
		<div class="col-lg-1"></div>


		




<script>
	
	function checkAll()
	{
		var allsub = document.getElementById('sub1');
		var label = document.getElementById('sub1');
		var input = document.getElementsByTagName('input');
		var subline  = document.getElementById("subline");

		if (allsub.checked==true) 
		{
			for(var i=0;i<input.length;i++)
			{
				if(input[i].type=="checkbox" && input[i].id!="sub1" && input[i].checked== false)
				{
					input[i].checked=true;
					subline.style.display="none";
				}
				else if(input[i].id!="sub1" && input[i].checked==true)
				{
					subline.style.display="none";

				}
			}
		}
		else if (allsub.checked==false) 
		{
			for(var i=0;i<input.length;i++)
			{
				if(input[i].type=="checkbox" && input.id!="sub1" &&  input[i].checked== true)
				{
					input[i].checked=false;
					subline.style.display="";
				}
			}
		}
	}

</script>

</body>
</html>