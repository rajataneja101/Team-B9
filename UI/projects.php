<?php
session_start();
include 'constants.php';
require './vendor/autoload.php';

use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();
$url = $apiUrl;
$res = $client->request('GET', $apiUrl."projects/getAllProjects");
$var=json_decode($res->getBody(), true);
?>
<!DOCTYPE HTML>
<html>
		<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PISTOP</title>
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
  					<div id="fh5co-logo"><a href="index.php">PITSTOP</a></div>
  					
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
						<?php
						if (!isset($_SESSION['userId']) && empty($_SESSION['userId']))
						{ ?>
							<li><a href="login.php">Login</a></li>
							<li><a href="registration.php">Register</a></li>
						<?php } else{ 
							if($_SESSION['userType'] == 'owner'){
							?>
							<li><a href="owner_project.php">My projects</a></li>
							<li><a href="registerProject.php">Register a project</a></li>
							<?php } else {?>
							<li><a href="userFundedProjects.php">My projects</a></li>
						<?php } ?>
						<li><a href="logout.php">Logout</a></li>
						<?php } ?>
  					</ul>
  				</div>

  			</div>

  		</div>
  	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/thumb/4/1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Projects</h1>
							<h2>You will be proud to have them!</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Ongoing</span>
					<h2>Projects</h2>

				</div>
			</div>

			 <?php
  for($j=0;$j<count($var, COUNT_NORMAL);$j++)
{
		?>
							<div class="col-md-4 text-center animate-box">
					<div class="product">
						<!-- <div class="product-grid" style="background-image:url(images<?php //print $var[$j]['projectName']?>);"> -->
						<div class="product-grid" style="background-image:url(images/person1.jpg);">
							<div class="inner">
								<p>
									<?php
									echo "<a class='icon' href=project_detail.php?projectId=".$var[$j]['project']."><i class='icon-eye'></i></a>";
									?>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><?php
						echo "<h3><a class='icon' href=project_detail.php?projectId=".$var[$j]['project'].">".$var[$j]['projectName']."</a></h3>";
						$fundingCompleted = ($var[$j]['fundingDone']/$var[$j]['fundingRequired'])*100;
						echo "<h3>Funded ".$fundingCompleted."%</h3>";
						if($var[$j]['government'] != null)
						echo "Government Project";
							?></a></h3>

						</div>
					</div>
				</div>


				<?php

				}
?>


<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">


				</div>
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">


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