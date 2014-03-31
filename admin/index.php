<?php
require_once('solvemedialib.php');
require('connect.php');
ob_start();
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>IT Farewell | Admin Panel </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body style="background-image:url('bg2.jpg');background-size:cover;height:100%;width:100%; background-attachment:fixed; font-family:Merienda;">
    <div id="wrapper">
    	<h1 style="text-align:center">FAREWELL ADMINS' PAGE</h1>
        <div id="header" class="header">
            <ul>
                <li><a href="adminhome.php">Home</a></li>

                <li><a href="pirates.php">Testimonial List</a></li>

                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="content" class="content">
            <?php
if($_POST)
{
	
	//if (!$solvemedia_response->is_valid) {
		//handle incorrect answer
	//	print "Error: ".$solvemedia_response->error;
	//}
	//else {
		//process form here
		if(isset($_POST['username'])&&isset($_POST['password']))
		{
			$username=mysqli_real_escape_string($con, $_POST['username']);
			$password=mysqli_real_escape_string($con, $_POST['password']);

			if(!empty($username)&&!empty($password))
			{
				$password=md5($password);
				$str="SELECT username, password FROM admins WHERE username='$username'";
				$result = mysqli_query($con, $str);
				if (!$result) {
  					printf("Error: %s\n", mysqli_error($con));
    					exit();
				   }
				if(mysqli_num_rows($result)==1)
				{
					
					$row=mysqli_fetch_array($result);
					if($username===$row['username'] && $password===$row['password'])
					{
						$_SESSION['admin']=$row['username'];
						echo 'Logged In';
						header('location:pirates.php');
					}
				}
			}
		}
	//}
}?>

            <form action="index.php" method="post" name="signup">
                <table cellpadding="5" cellspacing="5" align="center" style="color:#CCC;">
                    
                    <tr>
                        <td><label for="username">*Username :</label></td>

                        <td><input type="text" name="username" id="username" pe="text" required="required" tabindex="1" accesskey="u"/></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><label for="password">*Password :</label></td>

                        <td><input type="password" name="password" id="password" required="required" tabindex="2" accesskey="up"/></td>

                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <script type="text/javascript">
	var ACPuzzleOptions = {
                tabindex:   3,
				lang:	    'en'
	};
  </script><?php //echo solvemedia_get_html("qjmGRXOO9Bq7AfRhBy22ue7pPkcBCGIH"); //outputs the widget
?></td>
                    </tr>

                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="LOGIN" tabindex="4"/></td>
                    </tr>
                </table>
            </form>

            <div id="footer" class="footer">
                <h5 style="color:white;">@TEAM IT | All Rights Are Reserved.</h5>
            </div>
        </div>
    </div>
</body>
</html>
