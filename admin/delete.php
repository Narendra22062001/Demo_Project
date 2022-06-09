<?php
require("connection.php");
$id = $_GET['id'];

$sql ="DELETE FROM packages WHERE pkg_id = {$id}";
$result = mysqli_query($con, $sql);

header("Location: adminpanel.php?page=mngpkg.php");
 ?>
