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
	<marquee direction: left;><h1 style="text-shadow: 5px 5px 3px #999; font-family: algerian">PHP WEDNESDAY CAT</h1></marquee>
	<center>
		<form class="well form-horizontal" id="form" action="Grade.php">
			UserName: <span class="glyphicon glyphicon-user"></span><br> <input type="text" name="UserName"><br><br>
			<?php 
			$sylver=$_GET['UserName'];
			if (!isset($sylver) or empty($sylver)) {
				# code...
				echo "Fill in your Username";
			} 
			
			?>
			<br><br>
			Password: <br><input type="password" name="Passwords" value="password" placeholder="******" required="This field is required!" class="glyphicon glyphicon-asterisk">
			<br><br>
			<?php 
			$dany=$_GET['Passwords'];
			if (!is_string($dany)) {
				# code...
				echo "strings only required!";
			} else {
				# code...
				echo "Correct Password!";
			}

			?><br><br> 
			<button type="reset" name="RESET" value="RESET" >RESET</button><span class="glyphicon glyphicon-refresh"></span>
			<button type="Submit" name="SUBMIT" value="SUBMIT" class="btn btn-success">SUBMIT</button><span class="glyphicon glyphicon-ok"></span>  
		</form>
	</center>
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