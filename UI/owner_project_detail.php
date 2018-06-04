<?php
$projectId=$_GET["projectId"];
session_start();
include 'constants.php';
require './vendor/autoload.php';

use GuzzleHttp\Client;

$client = new GuzzleHttp\Client();
$url = $apiUrl;
$res = $client->request('GET', $apiUrl."projects/getProjectDetails/".$projectId);
$project=json_decode($res->getBody(), true);

$stepsResponse = $client->request('GET', $apiUrl."projects/steps/".$projectId);
$steps =json_decode($stepsResponse->getBody(), true);

?>

<!DOCTYPE HTML>
<style>
	/* hide up/down arrows ("spinners") on input fields marked type=number */
.no-spinners [type='number'] {
  -moz-appearance:textfield;
}

.no-spinners::-webkit-outer-spin-button,
.no-spinners::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
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
						<?php } else{ ?>
							<li><a href="logout.php">Logout</a></li>
						<?php } ?>
						</ul>
					</div>

				</div>

			</div>
		</nav>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/thumb/<?php echo $r ?>/1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Project Details</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="owl-carousel owl-carousel-fullwidth product-carousel slides">
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/product-1.jpg" alt="image1">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/product-2.jpg" alt="image2">
								</figure>
							</div>
						</div>
						<div class="item">
							<div class="active text-center">
								<figure>
									<img src="images/product-3.jpg" alt="image3">
								</figure>
							</div>
						</div>


					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" >
							<h2><?php echo $project['projectName']?></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav">
							<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Project Details</span></a></li>
							<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Fundings</span></a></li>
							<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-star"></i></span><span class="hidden-xs">Timeline</span></a></li>
						</ul>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<h2><?php echo $project['projectName']?></h2>
									<p><?php echo $project['description']?></p>
									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>

										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>

										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h4>Fundings recieved : <?php echo $project['fundingDone']?></h4>
									<h4>Fundings required : <?php echo $project['fundingRequired']?></h4>
									<h4>Percentage of project completed : <?php echo ($project['fundingDone']/$project['fundingRequired'])*100?> %</h4>
								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="3">
								<div class="col-md-10 col-md-offset-1">
									<form action="step_completed.php" method="post">
									<?php 
									for($i=0;$i<count($steps,COUNT_NORMAL);$i++){
									echo "<p>".$steps[$i]['projectSteps']."-".$steps[$i]['status'];
									if($steps[$i]['status'] != 'Completed')
									echo "- <input type='checkbox' name='stepsCompleted[]' value=".$steps[$i]['id']." />Completed?</p>";
                                    }
									?>
									<br/>
									<input type="submit" class="btn" value="Completed?"><br/>
									</form>
                                    <form action="add_project_steps.php" method="post">
                                        <input type="hidden" name="projectId" value=<?php echo $project['project'] ?> />
                                        <input class="btn" type="submit" value="Add more" />
                                    </form>
								</div>
							</div>


						</div>
				</div>
			</div>
		</div>
	</div>
	<br/><br/>
	<div id="fh5co-product">
						<div class="container">
						<div class="row">
						<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" >
							<p>
							<form action ="donate.php" method="post">
							 <input name="fund" type="number" class="no-spinners"><br/>
							 <input name="projectId" type="hidden" class="no-spinners" value="<?php echo $project['project']?>"><br/>
							 <br/>
    <button class="btn btn-primary btn-outline btn-lg" type="submit">Donate</button>			
    </form>					
							</p>
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