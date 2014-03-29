<?php
  ob_start();
  session_start();
  
  session_destroy();
  
  $session=array();
  
  header('location:index.php');
  ob_flush();
?>