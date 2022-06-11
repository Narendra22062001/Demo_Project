
<?php
  require("connection.php");


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      .uppkg{
        width: 500px;
        top: 50%;
        left: 5%;
        position: relative;
      }
      .uppkg form{
        margin: 35px;
      }
      .uppkg input{
        width: 900px;
        height: 40px;
        margin-top: 5px;
        padding-left: 10px;
        border: 1px solid #000000;
        padding-right: 10px;
        outline: none;

      }
      .uppkg textarea{
        width: 900px;
        margin-top: 5px;
        padding-top: 5px;
        padding-left: 4px;
        border: 1px solid #000000;
        adding-right: 10px;
        outline: none;
      }
      .uppkg p{
        margin-top: 15px;
        font-size: 20px
      }
      .uppkg button{
        font-size: 17px;
        margin-top: 20px;
      }

      .uppkg .image{
        font-size: 26px;
      }
    </style>
  </head>
  <body>
    <?php

    $id2 = $_GET['id'];

    $sql = "SELECT * FROM tbltourpackages WHERE PackageId = {$id2}";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0){
      while ($row = mysqli_fetch_assoc($result)) {
        // code...
      ?>
      <div class="uppkg">
        <form class="uppkg" action="" method="POST" enctype="multipart/form-data">
          <p>Package Name <input type="text" name="pkgname1" value="<?php echo $row['PackageName']; ?>"></p>
          <p>type <input type="text" name="pkgtype2" value="<?php echo $row['PackageType']; ?>"></p>
          <p>Package Location <input type="text" name="pkgloc1" value="<?php echo $row['PackageLocation']; ?>"></p>
          <p>Package Price(INR) <input type="text" name="pkgprice1" value="<?php echo $row['PackagePrice']; ?>"></p>
          <p>Package Features <input type="text" name="pkgfea1" value="<?php echo $row['PackageFetures']; ?>"></p>
          <p>Package Details <textarea class="details" rows="5" cols="50" type="text" name="pkgdetails1" value=""><?php echo $row['PackageDetails']; ?></textarea></p>
          <p>Package Image <input class="image1"type="file" name="image1" value="<?php echo $row['PackageImage']; ?>"></p>
          <button type="submit" name="save" value="">SAVE</button>
        </form>
      </div>
    <?php }
      }
    ?>

    <?php
    if(isset($_POST['save'])){
      $pkgnam2 = $_POST['pkgname1'];
      $pkglo2 = $_POST['pkgloc1'];
      $pkgfe2 = $_POST['pkgfea1'];
      $pkgde2 = $_POST['pkgdetails1'];
      $file2 = $_FILES['image1']['name'];
      $pkgprice2 = $_POST['pkgprice1'];
      $ptype = $_POST['pkgtype2'];

      $uploads_dir = "pkg_imgs";

      if (!empty($_POST['pkgname1'] && $_POST['pkgloc1'] && $_POST['pkgfea1'] && $_POST['pkgdetails1'])) {
        if(!empty($_FILES['image1']['name'])){
          $sql3 = "UPDATE tbltourpackages SET PackageName='$pkgnam2',PackageLocation='$pkglo2',PackageDetails='$pkgde2',	PackagePrice='$pkgprice2',PackageFetures='$pkgfe2',PackageImage='$file2',PackageType='$ptype' WHERE PackageId = '$id2'";

          $res = mysqli_query($con, $sql3);

          if($res){
            move_uploaded_file($_FILES['image1']['tmp_name'],"$uploads_dir/$file2");
          }

        }
        else{
          $sql1 = "UPDATE tbltourpackages SET PackageName='$pkgnam2',PackageLocation='$pkglo2',PackageDetails='$pkgde2',	PackagePrice='$pkgprice2',PackageFetures='$pkgfe2', PackageType='$ptype' WHERE PackageId = '$id2'";
          mysqli_query($con, $sql1);


        }


      }


       echo "<script> window.location.replace('adminpanel.php?page=mngpkg.php');</script>";


    }

    ?>

  </body>
</html>





















<!-- fdjslk -->
