<?php
session_start();
ob_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Farewell 2014 | Goodbye Seniors</title><!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/foundation-icons.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" /><!-- GOOGLE WEBFONT-->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' /><!-- FAVICON-->
    <link rel="shortcut icon" href="images/favicon.ico" /><!-- //SCRIPTS -->

    <script type="text/javascript" src="js/jquery-1.7.2.min.js">
</script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js">
</script>
    <script type="text/javascript" src="js/jquery.foundation.reveal.js">
</script>
    <script type="text/javascript" src="js/rotate.js">
</script>
    <script type="text/javascript" src="js/jquery.flexslider.js">
</script>
    <script type="text/javascript">
//<![CDATA[
    $(function(){
        $('.flexslider').flexslider({
        animation: "fade",
        start: function(slider){
        $('body').removeClass('loading');
        }
        });
    });
    //]]>
    </script>
</head>

<body>
    <!-- Modal Section -Login -->

    <div id="loginform" class="reveal-modal">
        <h3>Seniors Login</h3>

        <p>Sign in Using Facebook. Please grant Permission when asked for.</p><!--    <div class="space20"></div>
     -->

        <form action="login.php" method="post">
            <fieldset>
                

                <div class="fb-login-button" data-max-rows="3" data-size="xlarge" data-show-faces="true" data-auto-logout-link="true" ></div>
            </fieldset>
        </form><a class="close-reveal-modal"></a>
    </div><!-- Modal Section -Login -->
    
    <!-- Header Section -->

    <div id="header">
        <div class="header-wrap row">
            <div class="twelve columns">
                <div class="logo">
                    <h1><a href="index.php"><img src="images/logo.png" alt="" /></a></h1>
                </div>
                <div class="register">
                    <a href="test.php">Testimonials</a>
                </div>

                <div class="login">
                	   <i class="ft-home"></i>
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>
    </div><!-- Header Section -->

    <div class="clear"></div>
<!-- Slider section-->
<div class="slider-wrap">
	<div class="row">
	<!-- Slider content-->
		<!--
<div class="flexslider eight columns">
			<ul class="slides" style="vertical-align: center">
				<li><img src="demo/slides/slide1.png" alt="Aditya Purandare Farewell 1"/></li>
				<li><img src="demo/slides/slide2.png" alt="Aditya Purandare Farewell 2"/></li>
				<!-- <li><img src="demo/slides/slide3.png" alt="Aditya Purandare Farewell 3" style="margin: auto"/></li> 
			</ul>
		</div>
-->
		<!-- Slider content-->
		<div class="four columns">
			<div class="rsp-caption" style="background-color:rgba(0,0,0,0.4);color:#555">
					<h2>We will Miss You All!</h2>
					<p style="font-weight:bold;padding-left:20px;">The time is near, tears will fall-off everybody's face, it will soon be the very last day of college but we want to make every moment special for you have been with us for 3 years and shared a bonding with each one of us.</p>
										<p style="font-weight:bold;padding-left:20px;"> 
						 <a href="test.php" class="link">Testimonials</a>
					</p>
			</div>
		</div>
	</div>
</div>
<!-- Slider section-->
<?php
include('footer.php');
ob_flush();
?>
