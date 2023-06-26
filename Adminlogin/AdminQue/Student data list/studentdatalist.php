<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t2.png">
</head>
	<?php
		if (empty($_POST['adminpagecheck1'])) 
		{
			header('Location:../adminpage.php');
		}
	?>
<body style="background-image: url('pics/t4.png');background-repeat: no-repeat; background-size:900px 100vh;background-position:top;">
	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t2.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t5.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F;text-shadow: 2px 1px 2px">
			STUDENT LIST
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
	<div class="row form1">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="text-uppercase text-white h3  font-weight-bold" style="background-color:#323E6F;text-align: center;">
					Student detail
			</div>
			<div class="row mt-4">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<form action="personal info/personalinfo.php" method="post">
						<button class="btn btn-lg btn-block btn-info text-uppercase">Personal Info</button>
						<input type="hidden" name="studentdatalistcheck1" value="true">
					</form>
				</div>
				<div class="col-lg-2"></div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<form action="Guardian info/guardianinfo.php" method="post">
						<button class="btn btn-lg btn-block btn-info text-uppercase">Guardian Info</button>
						<input type="hidden" name="studentdatalistcheck1" value="true">
					</form>
				</div>
				<div class="col-lg-2"></div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<form action="Academic info/academicinfo.php" method="post">
						<button class="btn btn-lg btn-block btn-info text-uppercase">Academic Info</button>
						<input type="hidden" name="studentdatalistcheck1" value="true">
					</form>
				</div>
				<div class="col-lg-2"></div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<form action="Fee detail/feedetail.php" method="post">
						<button class="btn btn-lg btn-block btn-info text-uppercase">Academic Info</button>
						<input type="hidden" name="studentdatalistcheck1" value="true">
					</form>
				</div>
				<div class="col-lg-2"></div>
			</div>
			<div class="row mt-3 form1">
				<div class="col-lg-2">
					<a href="../adminpage.php" style="text-decoration: none" class="btn-danger form-control text-center mt-5">
						<span style="font-weight: 800;">BACK</span>
					</a>
				</div>
				<div class="col-lg-6"></div>
			</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</body>
</html>