<?php session_start();
if (isset($_SESSION['userId']) && !empty($_SESSION['userId']))
{ 
	header('location: index.php');
}
?>

<style>
	 html, body, .container-table {
    height: 100%;
}
.container-table {
    width:100vw;
  height:150px;
  border:1px solid black;
}
.vertical-center-row {
   margin:auto;
  width:30%;
  padding:63px;
  text-align:center;

}
</style>
<!DOCTYPE HTML>
<html>
		<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PITSTOP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<style type="text/css">
					   .mobileShow { display: none;}
					   /* Smartphone Portrait and Landscape */
					   @media only screen
					   and (min-device-width : 320px)
					   and (max-device-width : 480px){ .mobileShow { display: inline;}}
					</style>

					<div class="col-md-3 col-xs-2">
						<div class="mobileShow">
						<div id="fh5co-logo"><a href="index.php">Projects</a></div>
					</div>
				</div>

					<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<div id="content-desktop">
					<li><div id="fh5co-logo"><a href="index.php"><h3><strong>PITSTOP</strong></h3></a></div></li>
	</div>
					</ul>
					<hr>
						<ul>
						<li> <!--class="has-dropdown"-->
							<a href="projects.php">Projects</a>
							<!--<ul class="dropdown">
								<li><a href="single.html">Single Shop</a></li>
							</ul>-->
						</li>
						<li><a href="about.html">About us</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="registration.php">Register</a></li>
						</ul>
					</div>

				</div>

			</div>
		</nav>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-5 col-md-push-1 animate-box">

					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="email"><a href="mailto:precious@abramonogcci.com">admin@abramonogcci.com</a></li>

						</ul>
					</div>

				</div> -->
				<div class="col-md-6 animate-box">
					<h3>Login</h3>
					<form action="signIn.php" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Your password">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>PITSTOP</h3>
					<p>Best in its type!</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="projects.php">Projects</a></li>
						<li><a href="policy.html">Policy</a></li>

					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">

					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>


	<script src="js/jquery.min.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/owl.carousel.min.js"></script>
	
	<script src="js/jquery.countTo.js"></script>
	
	<script src="js/jquery.flexslider-min.js"></script>
	
	<script src="js/main.js"></script>

	</body>
</html>
