<!DOCTYPE html>
<html>
<head>
	<title>Super Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/responsive.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="shortcut icon" type="image/x-icon" href="pics/t1.png">
	<script type="text/javascript" src="javascript/uplogin.js" ></script>
	<!-- <script type="text/javascript" src="javascript/uplogin.min.js" ></script> -->
</head>

	<?php
		if (empty($_POST['maincheck1'])) 
		{
			header('Location:../Mainpage.php');
		}
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
		$userpas = "SELECT * 
					FROM Logininfo
					WHERE post='Super_Admin'
					";
		$result = mysqli_query($conn,$userpas);
		$userpasinfo = mysqli_fetch_array($result);
		$username=  $userpasinfo['Username'];
		$password=  $userpasinfo['password'];
	?>
	
<body style="background-image: url('pics/t4.png');background-repeat: no-repeat; background-size:700px 100vh;background-position:top;">
	<div class="row" style="height: 9vh;">
		<div class="col-lg-12"></div>
	</div>
	<form class="row form1 form-group" action="" method="post" onsubmit="return logincheck()">
		<input type="hidden" id="ausername" value="<?php echo $username?>">
		<input type="hidden" id="apassword" value="<?php echo $password?>">
		<div class="col-lg-4"></div>
		<div class="col-lg-4 bg-white">
			<div class="row p-4 text-white font-weight-bold text-uppercase h4" style="background-color: #DEDEDE">
				<div class="col-lg-12">
					<div class="text-center"><img src="pics/t3.png" width="60%"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div id="invalidup" class="alert alert-danger" style="display: none;border-radius: 0px;"></div>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-12">
					<div id="usernamec">
						<input type="text" id="username" name="username" class="form-control p-4" placeholder="User Name">
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-lg-12">
					<div id="passwordc">
						<input type="Password" id="password" name="username" class="form-control p-4" placeholder="Password">
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-lg-12 text-right">
					<a href="../mainpage.php"> <div class="btn btn-primary">BACK</div></a>
					<input class="btn btn-success" type="submit" name="submit" value="LOGIN">
				</div>
			</div>
			<div style="height: 5vh"></div>
			<div class="row" style="background-color: #DEDEDE;height: 8vh;border-radius: 0px;"></div>
		</div>
		<div class="col-lg-4"></div>
	</form>
</body>
</html>