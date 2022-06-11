<?php
require("connection.php");
$bid = $_GET['bid'];
$status = $_GET['status'];


  $sqlca = "UPDATE tour_history SET status='$status' WHERE id = '$bid'";
  mysqli_query($con, $sqlca);



  
  echo "<script> window.location.replace('adminpanel.php?page=mngbooking.php');</script>";





 ?>
