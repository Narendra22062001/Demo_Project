<?php
require("connection.php");
$id = $_GET['id'];

$sql ="DELETE FROM tbltourpackages WHERE PackageId = {$id}";
$result = mysqli_query($con, $sql);

// header("Location: adminpanel.php?page=mngpkg.php");
echo "<script> window.location.replace('adminpanel.php?page=mngpkg.php');</script>";

 ?>
