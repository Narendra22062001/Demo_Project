<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .object_Container{
        width: 100%;
        height: auto;
        display: flex;
        margin-top: 30px;
        margin-left: 15px;
      }
      .box{
        width: 300px;
        height: 180px;
        text-align: center;
        line-height: 200px;
        margin: 15px;
        font-size: 13px;
        color: white;
      }
      .object_Container .num{
        margin-top: -30px;
        margin-bottom: 40px;
      }
      .object_Container .text{
        margin-top: -200px;
      }
    </style>
  </head>
  <body>
    <?php
      require("connection.php");
      $qUsers="SELECT COUNT(*) AS numu FROM user";
      $qPackages= "SELECT COUNT(*) AS nump FROM tbltourpackages";

      $usersData= mysqli_query($con, $qUsers);
      $packagesData =mysqli_query($con, $qPackages);

      $rowU= mysqli_fetch_assoc($usersData);
      $rowP= mysqli_fetch_assoc($packagesData);

      $Npackages = $rowP['nump'];
      $Nusers = $rowU['numu'];



     ?>
    <div class="object_Container">
      <div class="box" style="background: red;">
        <h1 class="num"><?php echo "$Nusers"; ?></h1>
        <h1 class="text">Users</h1>
      </div>
      <div class="box" style="background: blue;">
        <h1 class="num">4</h1>
        <h1 class="text">Bookings</h1>
      </div>
      <div class="box" style="background: purple;">
        <h1 class="num">3</h1>
        <h1 class="text">Enquiries</h1>
      </div>
      <div class="box" style="background: green;">
        <h1 class="num"><?php echo "$Npackages"; ?></h1>
        <h1 class="text">Total Packages</h1>
      </div>

    </div>
  </body>
</html>
