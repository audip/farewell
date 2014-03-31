
<?php
require('connect.php');
if(!isset($_SESSION['admin']))
{
    header('location:index.php');
}
else{

}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>IT Farewell | Admin Panel </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body style="background-image:url(bg.jpg);background-size:cover;height:100%;width:100%; background-attachment:fixed; font-family:Merienda;">
    <div id="wrapper">
        <div id="header" class="header">
            <ul>
                <li><a href="adminhome.php">Home</a></li>

                <li><a href="pirates.php">Testimonial List</a></li>

                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

