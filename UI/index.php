<?php session_start(); 
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
	<title>PITSTOP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fair in consideration and classic in quality" />
	<meta property="og:title" content="PITSTOP"/>
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content="PITSTOP"/>
	<meta property="og:description" content="Quality and comfort thats what matters in the end!"/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
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

	     <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Want something new?! Upload your own idea</h4>
        </div>
        <div class="modal-body">

         <form method="post" action="upload.php"  enctype="multipart/form-data">
    <table class="table1">
    <tr>
        <td><label style="font-size:18px;">Name</label></td>
        <td width="30"></td>
        <td><input type="text" name="first_name" placeholder="Name" required /></td>
    </tr>
    <tr>
        <td><label style="font-size:18px; font-family: 'Tangerine';">Email</label></td>
        <td width="30"></td>
        <td><input type="email" name="last_name" placeholder="Email" required /></td>
    </tr>

    <tr>
        <td><label style="font-size:18px;">Select your Image</label></td>
        <td width="30"></td>
        <td><label class="btn btn-default btn-file">
    Browse <input type="file"  name="image"  style="display: none;">
</label></td>

    </tr>
    <tr>
    <td><a href="policy.html">Upload Policy</a></td>
    </tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button type="submit" name="Submit" class="btn btn-primary">Upload</button>
    </div>
</form>
        </div>
             </div>

    </div>
  </div> -->
  <!-- <script type="text/javascript">
   setTimeout(function() {
    $('#myModal').modal();
}, 10000);
</script> -->

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<style type="text/css">
				   .mobileShow { display: none;}
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
						<li>
							<a href="projects.php">Projects</a>
						</li>
						<li><a href="about.html">About us</a></li>
						<?php
						if (!isset($_SESSION['userId']) && empty($_SESSION['userId']))
						{ ?>
							<li><a href="login.php">Login</a></li>
							<li><a href="registration.php">Register</a></li>
						<?php } else{ ?>
							<li><a href="logout.php">Logout</a></li>
						<?php } ?>
					</ul>
				</div>

			</div>

		</div>
	</nav>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
				<li style="background-image: url(images/smile.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">
		   						<h2>PITSTOP</h2>
								   <p><a href="projects.php" class="btn btn-primary btn-outline btn-lg">Bring Smile to faces</a><br/>
									Some faces deserves happiness but they are deprived of that</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/environment.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">

		   						<h2>PITSTOP</h2>

								   <p><a href="projects.php" class="btn btn-primary btn-outline btn-lg">Help us save the environment</a><br/>
								Help us save the enviroment for our future generations</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   
		   	<li style="background-image: url(images/charity.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">

		   						<h2>PITSTOP</h2>

								   <p><a href="projects.php" class="btn btn-primary btn-outline btn-lg">Show an act of kindness</a><br/>
								Sometimes showing an act of kindness gives great blessing.</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/study.jpg);">
		   		<div class="container">
		   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<div class="desc">

		   						<h2>PITSTOP</h2>

								   <p><a href="projects.php" class="btn btn-primary btn-outline btn-lg">Help us to Educate people</a><br/>
								Many great minds goes unnoticed. Help us find and help them.</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
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




	<div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/poverty.jpg);">
		<div class="container">
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-users"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="3000" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Connected people</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-emoji-happy"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="450" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Happy People</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-lab-flask"></i>
								</span>
								<span class="counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">All Projects</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box">
							<div class="feature-center">
								<span class="icon">
									<i class="icon-clock"></i>
								</span>

								<span class="counter js-counter" data-from="0" data-to="83" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hours Spent</span>

							</div>
						</div>
					</div>
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
						<li><a href="project.php">Projects</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">

					<p>
						<ul class="fh5co-social-icons">
							<li><a href=""><i class="icon-twitter"></i></a></li>
							<li><a href=""><i class="icon-facebook"></i></a></li>
							<li><a href=""><i class="icon-instagram"></i></a></li>
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

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
