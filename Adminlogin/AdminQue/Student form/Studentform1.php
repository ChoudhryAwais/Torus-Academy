<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">


	<script>
		function validation1() 
		{
			var classi = document.getElementById('classi').value;
			var statusi = document.getElementById('statusi').value;
			var groupi = document.getElementById('groupi').value;
			var boardi = document.getElementById('boardi').value;
			if ((classi=="") || (statusi=="") || (groupi=="") || (boardi=="")) 
			{	
				if (classi=="") 
				{
					document.getElementById('classv').innerHTML="*This Field Must Be Selected";
				}
				else
				{
					document.getElementById('classv').innerHTML="";
				}
				if (statusi=="") 
				{
					document.getElementById('statusv').innerHTML="*This Field Must Be Selected";
				}
				else
				{
					document.getElementById('statusv').innerHTML="";
				}
				if (groupi=="") 
				{
					document.getElementById('groupv').innerHTML="*This Field Must Be Selected";
				}
				else
				{
					document.getElementById('groupv').innerHTML="";
				}
				if (boardi=="") 
				{
					document.getElementById('boardv').innerHTML="*This Field Must Be Selected";
				}
				else
				{
					document.getElementById('boardv').innerHTML="";
				}

			return false;
			}
			else
			{
				return true;
			}	
		}
	</script>
</head>
<body>
	<?php
		if (empty($_POST['check'])) 
		{	
			header('Location:Studentform.php');
		}
		// student data
		$majorsub = $_POST['majorsub'];
		$sname   = htmlspecialchars($_POST['sname']);
		$sfname   = htmlspecialchars($_POST['sfname']); 
		$gender  = $_POST['gender'];
		$dob  = $_POST['dob'];
		$sdomicile = htmlspecialchars($_POST['sdomicile']);
		$sreligion = htmlspecialchars($_POST['sreligion']);
		$scnic = htmlspecialchars($_POST['scnic']);
		$snationality = htmlspecialchars($_POST['snationality']);
		$sphone = htmlspecialchars($_POST['sphone']);
		$scell = htmlspecialchars($_POST['scell']);
		$semail = htmlspecialchars($_POST['semail']);
		$saddress = htmlspecialchars($_POST['saddress']);

		// guardian data
		$ginfo = $_POST['ginfo'];
		$relation = htmlspecialchars($_POST['relation']);
		$gname = htmlspecialchars($_POST['gname']);
		$gcnic = htmlspecialchars($_POST['gcnic']);
		$gemail = htmlspecialchars($_POST['gemail']);
		$gphone = htmlspecialchars($_POST['gphone']);
		$gcell = htmlspecialchars($_POST['gcell']);

		// echo $majorsub;
		// echo $sname;
		// echo $sfname;
		// echo $gender;
		// echo $dob;
		// echo $sdomicile;
		// echo $sreligion;
		// echo $scnic;
		// echo $snationality;
		// echo $saddress;
		// echo $sphone;
		// echo $scell;
		// echo $semail;

		// echo $ginfo;
		// echo $gname;
		// echo $gcnic;
		// echo $gemail;
		// echo $gphone;
		// echo $gcell;
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


<!-- Form starts here -->
			<form class="form-group form1" action="Studentform2.php" method="post" onsubmit="return  validation1()">



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



				<div class="row">
					<div class="col-lg-6">
						<div class="text-uppercase mt-4 text-white h3 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
							discipline you have selected
						</div>
					</div>
					<div class="col-lg-6">
						<input id="dis" disabled class="form-control mt-4 p-3 text-uppercase" type ="text" id="snamei" name="sname" placeholder="<?php echo $majorsub ?>" value="" style="border:3px inset lightgray;font-weight: 700">	
					</div>
				</div>
				<div class="text-uppercase mt-5 text-white h3 p-1 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Academic information
				</div>
				<div class="row">
					<!-- Class starts -->
					<div class="col-lg-6">
						<?php 
							if($majorsub=="Junior") 
							{
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">CLASS</option>
								<option value="Class_1">Class 1</option>
								<option value="Class_2">Class 2</option>
								<option value="Class_3">Class 3</option>
								<option value="Class_4">Class 4</option>
								<option value="Class_5">Class 5</option>
								<option value="Class_6">Class 6</option>
								<option value="Class_7">Class 7</option>
								<option value="Class_7">Class 7</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Matric") 
							{
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">Class</option>
								<option value="Ninth">Ninth (9th)</option>
								<option value="Tenth">Tenth (10th)</option>
								<option value="Composite_Matric">Composite</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Intermediate") 
							{
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">Class</option>
								<option value="First_year">First year</option>
								<option value="Second_year">Second Year</option>
								<option value="Composite_Inter">Composite</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Bachelors") 
							{
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">Class</option>
								<option value="Third_year">Third year</option>
								<option value="Fourth_year">Fourth Year</option>
								<option value="Composite_Bachelors">Composite</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Masters") 
							{
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">SEMESTER</option>
								<option value="Semester_1">Semester 1</option>
								<option value="Semester_2">Semester 2</option>
								<option value="Semester_3">Semester 3</option>
								<option value="Semester_4">Semester 4</option>
								<option value="Semester_5">Semester 5</option>
								<option value="Semester_6">Semester 6</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Entry_Test") 
							{	
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">ENTRY TEST SUBJECT</option>
								<option value="Medical">Medical</option>
								<option value="Engineering">Engineering</option>
								<option value="Commerce">Commerce</option>
								<option value="Comp_Sci">Computer Science</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Courses") 
							{
								echo '<select id="classi" name="class" class="form-control mt-3">
								<option value="">COURSES</option>
								<option value="Language">Language</option>
								<option value="Computer">Computer</option>
								</select>
								<span id="classv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							else
							{

							}
						?>
					</div>
					<!-- class ends -->
					<!-- Batch starts -->
					<div class="col-lg-6">
						<select name="batch" class="form-control mt-3">
							<option value="">Batch</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>							
						</select>
					</div>
					<!-- Batch ends -->
				</div>
				<div class="row">
					<!-- status starts -->
					<div class="col-lg-6">
						<?php 
							if ($majorsub=="Courses") 
							{
								echo '<input id="dis" disabled type="text" placeholder="Status" class="form-control mt-3">
									  <input type="hidden" id="statusi" name="status" value="none" >
									  <span id="statusv"><span>';
							}
							elseif ($majorsub=="Junior") 
							{
								echo '
								<select id="statusi" name="status" class="form-control mt-3">
									<option value="">Status</option>
									<option value="Regular">Regular</option>
									<option value="Special">Special</option>
								</select>
								<span id="statusv"  style="color: red;font-size: 15px;font-family:italic"></span>
							';
							}
							else 
							{
								echo '
								<select id="statusi" name="status" class="form-control mt-3">
									<option value="">Status</option>
									<option value="Regular">Regular</option>
									<option value="Supply">Supply</option>
									<option value="Special">Special</option>
								</select>
								<span id="statusv"  style="color: red;font-size: 15px;font-family:italic"></span>
							';
							}
						 ?>
					</div>
					<!-- status ends -->
					<!-- groups starts -->
					<div class="col-lg-6">
						<?php 
							if($majorsub=="Junior") 
							{
								echo '<input id="dis" disabled type="text" placeholder="Group" class="form-control mt-3">
									<input type="hidden" id="groupi" name="group" value="none" >
									<span id="groupv"></span>	
									';	
							}
							elseif ($majorsub=="Matric") 
							{
								echo '<select id="groupi" name="group" class="form-control mt-3">
								<option value="">Group</option>
								<option value="Sci_Bio">Sci Bio</option>
								<option value="Sci_Comp">Sci Comp</option>
								<option value="Arts">Arts</option>
								</select>
								<span id="groupv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Intermediate") 
							{
								echo '<select id="groupi" name="group" class="form-control mt-3">
								<option value="">Group</option>
								<option value="FSC_Med">FSC_Medical</option>
								<option value="FSC_Eng">FSC_Engineering</option>
								<option value="ICS_Phy">ICS_Physics</option>
								<option value="ICS_Stats">ICS_Stats</option>
								<option value="ICS_Eco">ICS_Economics</option>
								<option value="ICOM">ICOM</option>
								<option value="FA">FA</option>
								</select>
								<span id="groupv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Bachelors") 
							{
								echo '<select id="groupi" name="group" class="form-control mt-3">
								<option value="">Group</option>
								<option value="BSC">BSC</option>
								<option value="BCOM">BCOM</option>
								<option value="BA">BA</option>
								</select>
								<span id="groupv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Masters") 
							{
								echo '<select id="groupi" name="group" class="form-control mt-3">
								<option value="">Group</option>
								<option value="MSC">MSC</option>
								<option value="MCOM">MCOM</option>
								<option value="MA">MA</option>
								</select>
								<span id="groupv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Entry_Test") 
							{	
								echo '<input id="dis" disabled type="text" placeholder="Group" class="form-control mt-3">
									<input type="hidden" name="group" id="groupi" value="none" >
									<span id="groupv"></span>';	
							}
							elseif ($majorsub=="Courses") 
							{	
								echo '<input id="dis" disabled type="text" placeholder="Group" class="form-control mt-3">
									<input type="hidden" name="group" id="groupi" value="none" >
									<span id="groupv"></span>';	
							}
							else
							{

							}
						 ?>
					</div>
					<!-- groups ends -->
				</div>
				<div class="row">
					<div class="col-lg-3"></div>
					<!-- Boards starts -->
					<div class="col-lg-6">
						<?php
							if($majorsub=="Junior") 
							{
								echo '<input id="boardi" class="form-control mt-3 p-3" type ="text" name="board" placeholder="School">
									<span id="boardv" style="color: red;font-size: 15px;font-family:italic"></span>';	
							}	
							elseif ($majorsub=="Matric" || $majorsub=="Intermediate") 
							{
								echo '<select id="boardi" name="board" class="form-control mt-3">
								<option value="">Board</option>
								<option value="PUNJAB_BISE">PUNJAB_BISE</option>
								<option value="FEDERA_BISE">FEDERA_BISE</option>
								<option value="KPK_BISE">KPK_BISE</option>
								<option value="BALOCH_BISE">BALOCH_BISE</option>
								<option value="G&B_BISE">G&B_BISE</option>
								<option value="AJK_BISE">AJK_BISE</option>
								<option value="AIOU_BISE">AIOU_BISE</option>
								<option value="AIOU_BISE">AIOU_BISE</option>
								<option value="PVT._B">PVT._B</option>
								</select>
								<span id="boardv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							elseif ($majorsub=="Bachelors" || $majorsub=="Masters") 
							{
								echo '<select id="boardi" name="board" class="form-control mt-3">
								<option value="">University</option>
								<option value="Punjab_Uni">Punjab Uni</option>
								<option value="Sarghoda_Uni">Sarghoda Uni</option>
								<option value="Quaid-e-Azam_Uni">Quaid-e-Azam Uni</option>
								<option value="AIOU_Uni">AIOU Uni</option>
								</select>
								<span id="boardv" style="color: red;font-size: 15px;font-family:italic"></span>
								';	
							}
							else
							{
								echo '<input id="dis" disabled type="text" placeholder="Board/Uni/School" class="form-control mt-3">
									<input type="hidden" name="board" id="boardi" value="none">
									<span id="boardv"></span>';
							}
						?>
					</div>
					<!-- Boards ends -->
					<div class="col-lg-3"></div>
				</div>
				<div style="margin-bottom: 60px;"></div>
				<div class="row">
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
					<input type="hidden" name="check1" value="true">
				</div>
			</form>

<!-- form ends here -->
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div style="margin-bottom: 100px;"></div>
</body>
</html>