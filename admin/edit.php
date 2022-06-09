
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
        margin-top: 20px;
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

    $sql = "SELECT * FROM packages WHERE pkg_id = {$id2}";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result)>0){
      while ($row = mysqli_fetch_assoc($result)) {
        // code...
      ?>
      <div class="uppkg">
        <form class="uppkg" action="" method="POST" enctype="multipart/form-data">
          <p>Package Name <input type="text" name="pkgname1" value="<?php echo $row['pkg_name']; ?>"></p>
          <p>Package Location <input type="text" name="pkgloc1" value="<?php echo $row['pkg_loc']; ?>"></p>
          <p>Package Price(INR) <input type="text" name="pkgprice1" value="<?php echo $row['pkg_price']; ?>"></p>
          <p>Package Features <input type="text" name="pkgfea1" value="<?php echo $row['pkg_feature']; ?>"></p>
          <p>Package Details <textarea class="details" rows="5" cols="50" type="text" name="pkgdetails1" value=""><?php echo $row['pkg_det']; ?></textarea></p>
          <p>Package Image <input class="image1"type="file" name="image1" value="<?php echo $row['img_dir']; ?>"></p>
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



      $sql1 = "UPDATE packages SET pkg_name='$pkgnam2',pkg_loc='$pkglo2',pkg_det='$pkgde2',pkg_price='$pkgprice2',pkg_feature='$pkgfe2',img_dir='$file2' WHERE pkg_id = '$id2'";
      // "UPDATE `packages` SET `pkg_name`='{$pkgnam2}',`pkg_loc`='$pkglo2',`pkg_det`='$pkgfe2',`pkg_price`='$pkgde2',`pkg_feature`='$file2',`img_dir`='$pkgprice2' WHERE 'pkg_id' = '{$id2}'";



      mysqli_query($con, $sql1);

      header("Location: adminpanel.php?page=mngpkg.php");
      exit;


    }

    ?>

  </body>
</html>





















<!-- fdjslk -->
