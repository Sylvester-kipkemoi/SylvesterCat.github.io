<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<meta name="viewport" content="width=device-device,intial-scale=1.0">
	<style type="text/css">
	#wrapper{
		width: 1000px;
		min-height:500px;
		border: 2px solid grey;
		border-bottom: 5px solid #999
		margin:0px auto;
		margin-top: 40px;
		margin-left: 100px;
		margin-right:100px; 
		padding: 10px;
		background-color: #bbc1ec;
	}

	body{
		background-color: #fff;

	}


</style>
</head>
<body>
			<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand">PHP WEDNESDAY CAT</a>

			</div>
			<ul class="nav navbar-nav">
				<a href="#"><img src="pic/emobilis.jpg" width="100" height="100"></a>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#" >Aboutus</a></li>
				<li><a href="#" >Contactus</a></li>
				<li><a href="#" >Blog</a></li>
				<li><a href="#">Sign-in</a></li>
				<li><a href="#">Sign-up</a></li>
			</ul>
		</div>
	</nav>
	<div id="wrapper">
	<div class="avrcalc" class="well well-lg">
		<center>
			<form method="GET" >
				Math:<br><input type="text" name="Maths" placeholder="Enter Maths mark"><br>
				English:<br><input type="text" name="English" placeholder="Enter English mark"><br>
				Swahili:<br><input type="text" name="Swahili" placeholder="Enter Swahili mark"><br>
				Physics:<br><input type="text" name="Physics" placeholder="Enter Physics mark"><br>
				Chemistry:<br><input type="text" name="Chemistry" placeholder="Enter Chemistry mark"><br>
				Computer:<br><input type="text" name="Computer" placeholder="Enter Computer mark"><br>
				Geography:<br><input type="text" name="Geography" placeholder="Enter Geography mark"><br>
				<button type="reset" name="Reset">RESET</button>
				<button type="submit" name="Submit">SUBMIT</button><br>
				<?php 
				$Maths=$_GET['Maths'];
				$English=$_GET['English'];
				$Swahili=$_GET['Swahili'];
				$Physics=$_GET['Physics'];
				$Computer=$_GET['Computer'];
				$Chemistry=$_GET['Chemistry'];
				$Geography=$_GET['Geography'];

				$total=$Maths+$English+$Swahili+$Physics+$Computer+$Geography+$Chemistry;
				$mode=$total/7;
				echo  "Your Average Mark is ".$mode;
				echo "<br>";
				if (isset($_GET['Submit'])) {
					$submit=$_GET['Submit'];
				}
				if ($mode>=80) {
					echo "Aim higher";
				} elseif ($mode>=60) {
					echo "Good trial";
				} elseif ($mode<=40) {
					echo "Pull-up your socks";
				} 
				

				?>
			</form>

		
	</center>
</div>
<div class="footer">
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col_1">
							<h2>Get In Touch With Emobilis.</h2>
							<p>Join our mailing list and get up to date with latest on news, and events</p>
							<form class="form-inline">
								<div class="form-group">
									<input class="form-control" id="email" placeholder="Email Address" type="email">
								</div>
								<button type="submit" class="btn btn-default btn-register">REGISTER</button>
							</form>

							<div class="socialize">
								<span class="follow_us">Follow Us</span>
								<a href="#"> <i class="fa fa-facebook"></i></a>
								<a href="#"> <i class="fa fa-twitter"></i></a>
								<a href="#"> <i class="fa fa-instagram"></i></a>
							</div>
						</div>
						<div class="col-sm-4 support">
							<h2>Resources and Info</h2>
							<p><a href="#">About Us</a></p>
							<p><a href="#">Contact Us</a></p>
							<p><a href="#">News</a></p>
							<p><a href="#">Services</a></p>
						</div>
						<div class="col-sm-4 support">
							<h2>SUPPORT US</h2>
							<p><a href="tel:+254715628126"><i class="fa fa-phone"></i> +254 (0)715 - 628 - 126</a></p>
							<p><a href="tel:+254733615456"><i class="fa fa-phone"></i> +254 (0)733 - 615 - 456</a></p>
							<p><a href="mailto:info@emobilis18.org.ke?Subject=Inquiry" target="_top"><i class="fa fa-envelope"></i>
							info@emolilis18.org.ke</a></p>
						</div>
					</div>
					<div class="row text-center copy-right">
						<p>&copy; 2018 Copyright EMobilis Student Portal</p>
					</div>
				</div>
			</footer>
			</div>
			</div>

</body>
</html>