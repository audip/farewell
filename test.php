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
				
                <div class="login" style="padding-right:25px;">
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

    <div class="clear"></div>

<div class="slider-wrap">
	<div class="row" style="margin: auto;">
		<div class="16 columns">
		<br/><br/><br/>
			<div class="testimonials" >
					<h2>Testimonials</h2>
					<p class="bolder">
					<div width="50%" style="float:left">
								<fieldset >
									<legend><h3>Submit a Testimonial</h3></legend>
									
									<form action="testimonial.php" method="POST" style="margin: 20px 10px;">
											<label for="name">Name</label>
											<select name="name" id="name">
													<?php
require_once('connect.php');
$s1="SELECT * FROM seniors";
$r1=mysqli_query($con, $s1);
if (!$r1) {
  					printf("Error: %s\n", mysqli_error($con));
    					exit();
				}
while($row=mysqli_fetch_array($r1))
{
	$sname=$row['name'];
	if($row['test10']!='0')
		continue;
		
	echo '<option value="'.$sname.'" size="20">'.$sname.'</option>';
}
										echo '</select>
													';
										
										?>	
										<input type="submit" name="submit" value="Write A Testimonial"/>
										<h6>For a Detailed Testimonial Scoresheet, <a href="scoresheet.php" target="_blank">CLICK HERE</a></h6>
									</form>
</div>
<div width="40%" style="float:left">
<h3>Testimonial Target (Out of 10)</h3>
<table style="width:100%;">
		<tr>
			<th>Name</th>
			<th>Score</th>
		</tr>
		<tr>
			<?php
					$s6="SELECT * FROM seniors ORDER BY score DESC";
					$r6=mysqli_query($con, $s6);
					$count=1;
					while(($row=mysqli_fetch_array($r6)) && ($count<=20))
					{
						echo '<tr>
										<td>'.$row['name'].'</td>
						        			<td>'.$row['score'].'</td>
						        		</tr>';
						        		$count++;
					}
			?>
		</tr>
</table>
</div>

								</fieldset>
					</p>

			</div>
		</div>
	</div>
</div>

<center>
<?php
include('footer.php');
ob_flush();
?>