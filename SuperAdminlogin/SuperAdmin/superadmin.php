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
		$adminque = "
					SELECT COUNT(Id) as lastid 
					from New_Student_Admin
					";

		$result = mysqli_query($conn, $adminque);
		$numofdata = mysqli_fetch_array($result);
		$numofdata=$numofdata['lastid']-1;
	?>







	<div class="row mt-3">
		<div class="col-lg-1"></div>
		<div class="col-lg-1 logo1"> <img src="pics/t1.png" width="100%"></div>
		<div class="col-lg-3 logo2 border border-dark border-right-0 border-top-0 border-bottom-0"><img src="pics/t2.png" width="50%"></div>
		<div class="col-lg-6 adform mt-3 font-weight-bold text-md-right" style="color:#323E6F">
			SUPER ADMIN
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<hr>
			<div class="form-group form1">
				<div class="row">
					<div class="col-lg-12">
						<div class="text-uppercase mt-3 text-white h3  font-weight-bold" style="background-color:#323E6F;text-align: center;">
							Super Admin Portal
						</div>
						<div class="row mt-4">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<form action="adminquedata.php" method="post">
									<button class="btn-lg btn btn-block btn-dark font-weight-bold text-left" style="box-shadow: 2px 2px 10px black;">
										Admin Que <span class="badge badge-light" style="float: right;line-height: 20px;padding: 8px 15px 8px 15px;border-radius: 20px;border-radius: 20px;box-shadow: 1px 1px 10px white;"><?php echo $numofdata; ?></span>
									</button>
									<input type="hidden" name="numofdata" value="<?php echo $numofdata; ?>">
									<input type="hidden" name="supercheck1" value="true">
								</form>
							</div>
							<div class="col-lg-1"></div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<button class="btn-lg btn btn-block btn-white font-weight-bold text-left" style="box-shadow: 2px 2px 10px black;">
									Student Que <span class="badge badge-dark text-white" style="float: right;line-height: 20px;padding: 8px 15px 8px 15px;border-radius: 20px;box-shadow: 1px 1px 10px black;">3</span>
								</button>
							</div>
							<div class="col-lg-1"></div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</body>
</html>