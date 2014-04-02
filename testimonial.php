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
                <!-- <label><strong>Username</strong></label>
            <input type="text"/>
            <label><strong>Password</strong></label>
            <input type="text" />
            <div class="space10"></div>
            <input type="submit" class="radius button" value="Login">
            <div class="space10"></div> -->

                <div class="fb-login-button" data-max-rows="3" data-size="xlarge" data-show-faces="true" data-auto-logout-link="true" ></div>
            </fieldset>
        </form><a class="close-reveal-modal"></a>
    </div><!-- Modal Section -Login -->
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
                    <h1><a href="index.php"><img src="images/logo.png" alt="" /></a></h1>
                </div><?php
                /*
                if($_SESSION['username'])
                                    echo '<div class="login"><a href="logout.php">Logout</a></div>';
                                else
                */
                //echo '<div class="login"><a href="#" data-reveal-id="loginform"><i class="foundicon1-unlock login-ico"></i>Login</a></div>';
                ?>

                <div class="login">
                    <a href="test.php" style="
    border-right-width: 10px;
    height: 30px;
    width: 100px;
    padding-right: 0px;
    padding-left: 0px;
">Testimonials</a>
                </div>

                <div class="register">
                    <a href="index.php">Home</a>
                </div>
            </div>
        </div>
    </div><!-- Header Section -->

    <div class="clear"></div><?php
require_once('connect.php');
if(isset($_POST['name'])&&isset($_POST['test']) &&isset($_POST['username']) && ($_POST['submit']=='Submit Testimonial'))
	{ 
		$name=$_POST['name'];
		$message=mysqli_real_escape_string($con, $_POST['test']);
		//$username=$_POST['username'];
		$username=$_POST['username'];
		//echo $name.'<br/>'.$message.'<br/>'.$username;die();
		$s3="SELECT * FROM seniors WHERE name='$name'";
		$r3=mysqli_query($con, $s3);
		$row=mysqli_fetch_array($r3);
		$i=1;
		while($i<=10)
		{
			$check='test'.$i;
			if($row[$check]=='0')
				break;
			$i++;
		}
		$score = $row['score']+1;
		$s4="UPDATE seniors SET test$i='$message', s$i='$username', score='$score' WHERE name='$name'";
		//echo $s4;die();
		//mysqli_query($con, $s4);
		header('location:test.php');
}

//include('header.php');
?>
<div class="slider-wrap">
	<div class="row">
		<div class="wrapper">
			<div class="testimonials" >
					<h2>Testimonials</h2>
					<p class="bolder">
									<form action="testimonial.php" method="POST" style="margin-top: 0px;padding-top:5px">
											<label for="name">Our Very Own</label>
											<?php
												require_once('connect.php');
												if(!empty($_POST['name']) && isset($_POST['name']))
												{
													$name=$_POST['name'];
													echo '<input type="text" readonly="readonly" size="10" value="'.$name.'" name="name"/>';
													$s2="SELECT * FROM seniors WHERE name='$name'";
													$r2=mysqli_query($con, $s2);
													$row=mysqli_fetch_array($r2);
													if($row['place'])
														echo '
																	<label for="place">Belonging To</label>
																	<input type="text" readonly="readonly" size="10" value="'.$row['place'].'" />';
													if($row['dob'])																	
														echo '
																	<label for="dob">Born On</label>
																	<input type="text" readonly="readonly" size="30" value="'.$row['dob'].'" />';
													if($row['company'])																	
														echo '
																	<label for="company">Placed In</label>
																	<input type="text" readonly="readonly" size="30" value="'.$row['company'].'" />';
												}
												else{
													header('location:test.php');
												}
											?>	
											<label for="test">Testimonial Message (Please don't exceed 3000 Characters OR Mail to us the Testimonial at aditya.purandare@outlook.com)</label>
											<textarea rows="15" cols="30" required="required" name="test" id="test" maxlength="5000"  style="color:black;" tabindex="1" autofocus="autofocus">
											</textarea>
											<label for="username">Submitted by (We need your name for a surprise we are planning! Please Cooperate.)</label>
											<input type="text" maxlength="30" size="20" required="required" tabindex="2" name="username" id="username"/>
										<input type="submit" name="submit" value="Submit Testimonial"tabindex="3" />
									</form>
					</p>

			</div>
		</div>
	</div>
</div>

<center>
<p class="bold" style="color:red;">
Developed by IT 6th Sem Students for our Beloved Seniors!
</p>
</center>
<script>
alert("Nice try Hacking your way to this page!! SORRY, I have Disabled the Database Connection!!");
</script>
</body>
</html>