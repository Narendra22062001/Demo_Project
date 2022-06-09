<!DOCTYPE html>
<?php
  require("connection.php");
 ?>
<html>
<head>
<link rel="stylesheet" href="admin_design.css">
<title></title>
</head>
<body>
  
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>ADMIN</h3>
            <p>Please enter admin details.</p>
          </div>
        </div>
        <form class="login-form" method="POST">
          <input type="text" placeholder="username" name="AdminName">
          <input type="password" placeholder="password" name="AdminPassword">
          <button type="submit" name="Signin">login</button>

        </form>
      </div>
    </div>

    <?php
       if(isset($_POST['Signin'])){
         $query="SELECT * FROM `admin_log` WHERE admin_name = '$_POST[AdminName]' AND admin_password = '$_POST[AdminPassword]'";



         $result = mysqli_query($con, $query);

         if (mysqli_num_rows($result)==1) {
           session_start();
           $_SESSION['AdminLoginId'] = $_POST['AdminName'];
           header("location: adminPanel.php");
         }
         else {
           echo "<script>alert('incorrect password');</script>";
         }
       }
     ?>

</body>
</html>
