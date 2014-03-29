<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<title>Farewell 2014 | Goodbye Seniors</title>
	
    <!-- CSS-->
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/icons.css" />
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" />

    <!-- GOOGLE WEBFONT-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- FAVICON-->
	<link rel="shortcut icon" href="images/favicon.ico">

    <!-- //SCRIPTS -->
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.foundation.reveal.js"></script>
	<script type="text/javascript" src="js/rotate.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script>
	$(function(){
		$('.flexslider').flexslider({
		animation: "fade",
		start: function(slider){
		$('body').removeClass('loading');
		}
		});
	});
	</script>

</head>
<body>

<!-- Modal Section -Login -->
<div id="loginform" class="reveal-modal">
	<h3>Seniors Login</h3>
	<p>Sign in Using Facebook. Please grant Permission when asked for.</p>
	<div class="space20"></div>
	<form>
		<fieldset>
			<label><strong>Username</strong></label>
			<input type="text"/>
			<label><strong>Password</strong></label>
			<input type="text" />
			<div class="space10"></div>
			<a class="radius button" href="#">Login</a>
			<div class="space10"></div>
		</fieldset>
</form>

<a class="close-reveal-modal"><i class="foundicon1-remove"></i></a>
</div>
<!-- Modal Section -Login -->

<!-- Modal Section -Register
<div id="signupform" class="reveal-modal">
	<h3>Sign up. It's free</h3>
	<p>Register and get premium services for free.</p>
	<div class="space20"></div>
	<form>
		<fieldset>
			<label><strong>Username</strong></label>
			<input type="text"/>
			<label><strong>Password</strong></label>
			<input type="text" />
			<label><strong>Email</strong></label>
			<input type="email" />
			<div class="space10"></div>
			<a class="radius button" href="#">Register me</a>
		</fieldset>
	</form>

<a class="close-reveal-modal"><i class="foundicon1-remove"></i></a>
</div>
Modal Section -Register -->

<!-- Header Section -->
<div id="header">
	<div class="header-wrap row">
		<div class="twelve columns">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt=""/></a></h1>
			</div>

			<div class="login"><a href="#" data-reveal-id="loginform"><i class="foundicon1-unlock login-ico"></i>Logout</a></div>
			<div class="register"><a href="index.html" data-reveal-id="signupform"><i class="foundicon1-people register-ico"></i>Home</a></div>
		</div>
	</div>
</div>
<!-- Header Section -->

<div class="clear"></div>

<!-- Slider section-->
<div class="slider-wrap">
	<div class="row">
	<!-- Slider content-->
		<div class="flexslider eight columns">
			<ul class="slides">
				<li><img src="demo/slides/slide1.png" alt=""/></li>
				<li><img src="demo/slides/slide2.png" alt=""/></li>
			</ul>
		</div>
		<!-- Slider content-->
		<div class="four columns">
			<div class="rsp-caption" >
					<h2>Time to Bid Goodbye to All!</h2>
					<p class="bolder">Curtains being Drawn on the College Life at NIT Raipur, it's time to cherish the Best Senior-Junior relationship for the best 4 years of our life.</p>
		
			</div>
		</div>
	</div>
</div>
<!-- Slider section-->
<center>
<p class="bold" style="color:red;">
Developed by IT 6th Sem Students for our Beloved Seniors!
</p>
</center>
</body>
</html>