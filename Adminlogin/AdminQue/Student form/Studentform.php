<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
</head>
<script>
	<?php
		if (empty($_POST['adminpagecheck1'])) 
		{
			header('Location:../adminpage.php');
		}
	?>
	function validation()
	{
		var majorsubi = document.getElementById('majorsubi').value;
		var snamei = document.getElementById('snamei').value;
		var sfnamei = document.getElementById('sfnamei').value;
		var sgender = document.forms.gender;
		alert(sgender[0].checked);
		var scelli = document.getElementById('scelli').value;
		var semaili = document.getElementById('semaili').value;
		var ginfo = document.forms.ginfo;
		var relationi = document.getElementById('relationi').value;
		var gemaili = document.getElementById('gemaili').value;
		var gcelli = document.getElementById('gcelli').value;
		var gnamei = document.getElementById('gnamei').value;
		if ((snamei=='') || (sfnamei=='') || (scelli=='') || (semaili=='') || (gemaili=='') || (gcelli=='') || (majorsubi=='') ||(gnamei=='') ||(relationi=='') || ((sgender[0].checked==false)&&(sgender[1].checked==false)) || ((ginfo[0].checked==false)&&(ginfo[1].checked==false))) 
		{  
			if (majorsubi=='') 
			{
				document.getElementById('majorsubv').innerHTML="*This Field Must Be Selected";
			}
			else
			{
				document.getElementById('majorsubv').innerHTML="";
			}
			if (snamei=='') 
			{
				document.getElementById('snamev').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('snamev').innerHTML="";
			}
			if (sfnamei=='') 
			{
				document.getElementById('sfnamev').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('sfnamev').innerHTML="";
			}
			if (semaili=='') 
			{
				document.getElementById('semailv').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('semailv').innerHTML="";
			}
			if (scelli=='') 
			{
				document.getElementById('scellv').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('scellv').innerHTML="";
			}
			if (relationi=='') 
			{
				document.getElementById('relationv').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('relationv').innerHTML="";
			}
			if (gemaili=='') 
			{
				document.getElementById('gemailv').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('gemailv').innerHTML="";
			}
			if (gcelli=='') 
			{
				document.getElementById('gcellv').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('gcellv').innerHTML="";
			}
			if (gnamei=='') 
			{
				document.getElementById('gnamev').innerHTML="*This Field is required";
			}
			else
			{
				document.getElementById('gnamev').innerHTML="";
			}
			if ((sgender[0].checked==true) || (sgender[1].checked==true)) 
			{
				document.getElementById('genderv').innerHTML=("");
			}
			else
			{
				document.getElementById('genderv').innerHTML=("*Select Your Gender");	
			}
			if ((ginfo[0].checked==true) || (ginfo[1].checked==true)) 
			{
				document.getElementById('ginfov').innerHTML=("");
			}
			else
			{
				document.getElementById('ginfov').innerHTML=("*Select One");	
			}
			return false;
		}
		// for(var i=0; i<sgender.length; i++)
		// {
		// 	if (sgender[i].checked==true) 
		// 	{
		// 		document.getElementById('genderv').innerHTML=("*Select Your Gender");
		// 		return true;
		// 	}
		// 	else
		// 	{
		// 		document.getElementById('genderv').innerHTML=("*Select Your Gender");
		// 		return false;
		// 	}
		// }
	}
</script>
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
	<div class="row mt-4">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 border border-dark border-left-0 border-right-0">
			<form class="form-group form1" name="forms" action="Studentform1.php" method="post" onsubmit="return validation()">
				<div class="text-uppercase mt-3 text-white h3  font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Applying for discipline
				</div>
				<div>
					<select id="majorsubi" name="majorsub" class="form-control mt-3">
						<option value="">Major Discipline</option>
						<option value="Junior">Junior</option>
						<option value="Matric">Matric</option>
						<option value="Intermediate">Intermediate</option>
						<option value="Bachelors">Bachelors</option>
						<option value="Masters">Masters</option>
						<option value="Entry_Test">Entry Test</option>
						<option value="Courses">Courses</option>
					</select>					
					<span id="majorsubv" style="color: red;font-size: 15px;font-family:italic"></span>		
				</div>
				<div class="text-uppercase mt-5 text-white h3  font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Student's Information
				</div>
				<div class="row">
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-capitalize" type ="text" id="snamei" name="sname" placeholder="First Name" value="">
						<span id="snamev" style="color: red;font-size: 15px;font-family:italic"></span>	
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-capitalize" type ="text" id="sfnamei" name="sfname" placeholder="Last Name">
						<span id="sfnamev" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
					<div class="col-lg-4 mt-3">
						<label class="radio">
							<input type="radio" name="gender" value="Male">
							Male
							<span></span>
						</label>
						<label class="radio">
							<input type="radio" name="gender" value="Female">
							Female
							<span></span>
						</label>
						<div>
							<p id="genderv" style="color: red;font-size: 15px;font-family:italic"></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4" type ="date" name="dob">	
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-capitalize" type ="text" name="sdomicile" placeholder="Domicile">
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-capitalize" type ="text" name="sreligion" placeholder="Religion">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<input class="form-control mt-3 p-4" type ="text" name="scnic" placeholder="CNIC">	
					</div>
					<div class="col-lg-6">
						<input class="form-control mt-3 p-4 text-capitalize" type ="text" name="snationality" placeholder="Nationality">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4" type ="text" name="sphone" placeholder="Phone # (Res)">	
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4" type ="text" id="scelli" name="scell" placeholder="Cell No">
						<span id="scellv" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-lowercase" type ="text" id="semaili" name="semail" placeholder="E-mail">
						<span id="semailv" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<textarea class="form-control mt-3 text-center text-capitalize" rows="2" cols="10" name="saddress" placeholder="Address" style="text-align: left;"></textarea>
					</div>
				</div>
				<div class="text-uppercase mt-5 text-white h3 font-weight-bold" style="background-color:#323E6F;text-align: center;">
					guardian's Information
				</div>
				<div class="row">
					<div class="col-lg-6 mt-3">
						<div>
							<label class="radio">
								<input type="radio" name="ginfo" value="Parents">
								Parents
								<span></span>
							</label>
							<label class="radio">
								<input type="radio" name="ginfo" value="Guardian">
								Guardian
								<span></span>
							</label>
							<div><p id="ginfov" style="color: red;font-size: 15px;font-family:italic"></p></div>
						</div>
					</div>
					<div class="col-lg-6">
					 	<input class="form-control mt-3 p-4 text-capitalize" type ="text" id="relationi" name="relation" placeholder="Relation">
					 	<span id="relationv" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-capitalize" type ="text" id="gnamei" name="gname" placeholder="Name">
					 	<span id="gnamev" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4" type ="text" name="gcnic" placeholder="CNIC">
					</div>
					<div class="col-lg-4">
						<input class="form-control mt-3 p-4 text-lowercase" type ="text" id="gemaili" name="gemail" placeholder="Email">
						<span id="gemailv" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<input class="form-control mt-3 p-4" type ="text" name="gphone" placeholder="Contact # (Res)">	
					</div>
					<div class="col-lg-6">
						<input class="form-control mt-3 p-4" type ="text" id="gcelli" name="gcell" placeholder="Cell No">
						<span id="gcellv" style="color: red;font-size: 15px;font-family:italic"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2 mt-5">
						<a href="../adminpage.php" style="text-decoration: none;">
							<div style="font-weight: 800;" class="btn btn-block btn-outline-info">BACK</div>
						</a>
					</div>
					<div class="col-lg-6"></div>
					<div class="col-lg-2 mt-5">
						<input style="font-weight: 800;" type="reset" class="form-control btn btn-outline-danger" value="RESET" name="reset">
					</div>
					<div class="col-lg-2 mt-5">
						<input style="font-weight: 800;" type="submit" class="next form-control btn btn-outline-success" value="NEXT" name="submit">
					</div>
				</div>
				<input type="hidden" name="check" value="true">
			</form>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<footer class="mt-5" style="height: 20px"></footer>
</body>
</html>