<?php
$con = mysql_connect("localhost","root","root");
$db=mysql_select_db("abramo");
// Check connection
  $q="SELECT * FROM shoes";
$results=mysql_query($q);
  ?>
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
	    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
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
  </div>
  <script type="text/javascript">
   setTimeout(function() {
    $('#myModal').modal();
}, 10000);
</script>
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
						<li><a href="about.php">About us</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="registration.php">Register</a></li>
						<li><a href="contact.php">Contact us</a></li>
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
					<span>Cool Stuff</span>
					<h2>Projects</h2>

				</div>
			</div>

			 <?php
			 $array=array();
 while($row = mysql_fetch_assoc($results,MYSQL_ASSOC)) {
  $array[]=$row;
  }
  for($j=0;$j<9;$j++)
{
	/*if($j%3==1)
	{

			echo '<div class="row">';

		}*/
		?>
							<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images<?php print $array[$j]['path']?>);">
							<div class="inner">
								<p>
									<?
									echo "<a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."><i class='icon-eye'></i></a>";
									?>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><?php
							echo "<h3><a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."></a>".$array[$j]['name']."</h3>";


							?></a></h3>

						</div>
					</div>
				</div>


				<?

				}


mysql_close();
?>


				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">


				</div>

			 <?php

  for($j=9;$j<18;$j++)
{

		?>
							<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images<?php print $array[$j]['path']?>);">
							<div class="inner">
								<p>
									<?
									echo "<a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."><i class='icon-eye'></i></a>";
									?>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><?php
							echo "<h3><a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."></a>".$array[$j]['name']."</h3>";


							?></a></h3>

						</div>
					</div>
				</div>


				<?

				}
?>
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">


				</div>
			 <?php

  for($j=18;$j<24;$j++)
{

		?>
							<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images<?php print $array[$j]['path']?>);">
							<div class="inner">
								<p>
									<?
									echo "<a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."><i class='icon-eye'></i></a>";
									?>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><?php
							echo "<h3><a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."></a>".$array[$j]['name']."</h3>";


							?></a></h3>

						</div>
					</div>
				</div>


				<?

				}
?>
<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">


				</div>
			 <?php

  for($j=24;$j<25;$j++)
{

		?>
							<div class="col-md-4 text-center animate-box">
					<div class="product">
						<div class="product-grid" style="background-image:url(images<?php print $array[$j]['path']?>);">
							<div class="inner">
								<p>
									<?
									echo "<a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."><i class='icon-eye'></i></a>";
									?>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><?php
							echo "<h3><a class='icon' href=single.php?rajat=".$array[$j]['id']."&pro_name=".urlencode($array[$j]['name'])."></a>".$array[$j]['name']."</h3>";


							?></a></h3>

						</div>
					</div>
				</div>


				<?

				}
?>
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
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
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
