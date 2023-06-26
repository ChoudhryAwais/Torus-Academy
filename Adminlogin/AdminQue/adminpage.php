<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
</head>
<body style="background-image: url('pics/t4.png');background-repeat: no-repeat; background-size:900px 100vh;background-position:top;">
	<?php
		if (empty($_POST['adminlogincheck1'])) 
		{
			header('Location:../adminlogin.php');
		}
	?>
	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t1.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t2.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F;text-shadow: 2px 1px 2px">
			ADMIN PANEL
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
		<div class="col-lg-10 mt-4">
			<div class="row border" style="background-color: #C7C7C7;border-radius: 0px;">
				<div class="col-lg-2 h2 text-center text-dark" style="background-color: #DEDEDE;padding-top: 50px;padding-bottom:  50px;margin-top: 8px;border-radius: 0px;">Student</div>
				<div class="col-lg-10">
					<form action="Student form/Studentform.php" method="post">
						<button class="btn btn-lg btn-block btn-primary text-white p-2 mt-4 font-weight-bold" style="border-radius: 50px;">
							Student Data Entry
						</button>
						<input type="hidden" name="adminpagecheck1" value="true">
					</form>
					<form  action="Student data list/studentdatalist.php" method="post">
						<button class="btn btn-lg btn-block text-white p-2 mt-2 font-weight-bold" style="background-color: #323E6F;border-radius: 50px;">
							Student Data List
						</button>
						<input type="hidden" name="adminpagecheck1" value="true">
					</form>
				</div>
			</div>
			<div class="row mt-4 border" style="background-color: #C7C7C7;border-radius: 0px;">
				<div class="col-lg-2 h2 text-center text-dark" style="background-color: #DEDEDE;padding-top: 50px;padding-bottom:  50px;margin-top: 8px;border-radius: 0px;">Employee</div>
				<div class="col-lg-10">
					<form action="">
						<button class="btn btn-lg btn-block btn-primary p-2 mt-4 font-weight-bold"  style="border-radius: 50px;">
							Employee Data Entry
						</button>
						<input type="hidden" name="adminpagecheck1" value="true">
					</form>
					<form>
						<button class="btn btn-lg btn-block p-2 font-weight-bold mt-2 text-white" style="background-color: #323E6F;border-radius: 50px;">
							Employee Data List
						</button>
						<input type="hidden" name="adminpagecheck1" value="true">
					</form>
				</div>
			</div>
			<div class="row mt-3 form1">
				<div class="col-lg-2">
					<a href="../adminlogin.php" style="text-decoration: none" class="btn-danger form-control text-center mt-5">
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