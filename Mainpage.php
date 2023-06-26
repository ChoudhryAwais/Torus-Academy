<!DOCTYPE html>
<html>
<head>
	<title>Torus Academy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
</head>
</head>
<body style="background-image: url('pics/t4.png');background-repeat: no-repeat; background-size:700px 100vh;background-position:top;">
	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t1.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t2.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F;text-shadow: 2px 1px 2px">
			WELCOME
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10 form1">
			<hr>
			<form action="Adminlogin/adminlogin.php" method="post">
				<div class="row mt-5">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 text-center">
						<input type="hidden" name="maincheck1" value="true">
						<button type="submit" class="btn text-white btn-info btn-lg btn-block" style="font-family:Verdana;">ADMIN LOGIN</button>
					</div>
					<div class="col-lg-3"></div>
				</div>
			</form>
			<form action="SuperAdminlogin/superadminlogin.php" method="post">
				<div class="row mt-3">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 text-center">
						<button class="btn text-white btn-info btn-lg btn-block" style="font-family:Verdana;">SUPER ADMIN LOGIN</button>
					</div>
					<div class="col-lg-3"></div>
				</div>
				<input type="hidden" name="maincheck1" value="true">
			</form>
			<form action="Adminlogin/teacherlogin.php" method="post">
				<div class="row mt-3">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 text-center">
						<button class="btn text-white btn-info btn-lg btn-block" style="font-family:Verdana;">TEACHER LOGIN</button>
					</div>
					<div class="col-lg-3"></div>
				</div>
				<input type="hidden" name="maincheck1" value="true">
			</form>

		</div>
		<div class="col-lg-1"></div>
	</div>
</body>
</html>