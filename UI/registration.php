<?php
include 'constants.php';
?>
<!DOCTYPE HTML>
<html>
		<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Abramo Nogcci</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Best in class shoes" />



	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
						<div id="fh5co-logo"><a href="index.html">Abramo</a></div>
						<div id="fh5co-logo"><a href="index.html">Nogcci</a></div>
					</div>
				</div>

					<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<div id="content-desktop">
					<li><div id="fh5co-logo"><a href="index.html"><h3><strong>Abramo Nogcci</strong></h3></a></div></li>
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
						<li><a href="contact.html">Contact us</a></li>
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
                    <h3>Register</h3>
					<form action="signup.php" method="post">
                    <div class="radio">
                    <div class="col-md-4">
                        <label><input type="radio" name="userType"  checked="checked">Fund a project</label>
                    </div>
                    <div class="col-md-4">
                        <label><input type="radio" name="userType">Get Funds</label>
                    </div>
                    </div>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" name="fname" class="form-control" placeholder="Your firstname" required>
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" name="lname" class="form-control" placeholder="Your lastname" required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control" placeholder="Your email address"  onfocusout="checkEmail()"required>
							</div>
                        </div>
                        <div id='errorDiv' class='col-xs-12 pull-right'><font color="red"></font> </div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Your password" required>
							</div>
                        </div>
                        
                        <div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Confirm Password</label>
								<input type="password" name="confirm_password"  id="confirm_password" class="form-control" placeholder="Confirm Your password" required>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" id="submitbutton" value="Register" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
    </div>	
		<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline" action="newsletter.php" method="post">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" >
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block" name="Submit">Subscribe</button>
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
					<h3>Abramo Nogcci</h3>
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
						<li><a href="product.php">Shop</a></li>
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
	<!-- Google Map -->



	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;



function checkEmail(){
var api_url = "<?php echo $apiUrl ?>"+"users/"+email.value;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
        var response = xhttp.responseText;
        console.log(api_url);
        document.getElementById('errorDiv').innerHTML = "User already registered";
            document.getElementById('email').focus();
            document.getElementById('submitbutton').disabled = false;
            return false;
    }
    else {
        document.getElementById('errorDiv').innerHTML = "";
  }
};
console.log(api_url);
xhttp.open("GET", api_url, true);
xhttp.send();
}

    </script>
