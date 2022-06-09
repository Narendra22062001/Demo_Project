
<?php
  require("connection.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      .crtpkg{
        width: 500px;
        top: 50%;
        left: 5%;
        position: relative;
      }
      .crtpkg form{
        margin: 35px;
      }
      .crtpkg input{
        width: 900px;
        height: 40px;
        margin-top: 5px;
        padding-left: 10px;
        border: 1px solid #000000;
        padding-right: 10px;
        outline: none;

      }
      .crtpkg textarea{
        width: 900px;
        margin-top: 5px;
        padding-top: 5px;
        padding-left: 4px;
        border: 1px solid #000000;
        adding-right: 10px;
        outline: none;
      }
      .crtpkg p{
        margin-top: 20px;
        font-size: 20px
      }
      .crtpkg button{
        font-size: 17px;
        margin-top: 20px;
      }

      .crtpkg .image{
        font-size: 26px;
      }
    </style>
  </head>
  <body>

    <div class="crtpkg">
      <form class="create" action="" method="POST" enctype="multipart/form-data">
        <p>Package Name <input type="text" name="pkgname" value=""></p>
        <p>Package Location <input type="text" name="pkgloc" value=""></p>
        <p>Package Price(INR) <input type="text" name="pkgprice" value=""></p>
        <p>Package Features <input type="text" name="pkgfea" value=""></p>
        <p>Package Details <textarea class="details" rows="5" cols="50" type="text" name="pkgdetails" value=""></textarea></p>
        <p>Package Image <input class="image"type="file" name="image" value=""></p>
        <button type="submit" name="create" value="CREATE">Create</button>
      </form>
    </div>
    <?php
    if(isset($_POST['create'])){
      if(!empty($_POST['pkgname'] && $_POST['pkgloc'] && $_POST['pkgfea'] && $_POST['pkgdetails'] &&$_FILES['image']['name'])){
        $pkgnam = $_POST['pkgname'];
        $pkglo = $_POST['pkgloc'];
        $pkgfe = $_POST['pkgfea'];
        $pkgde = $_POST['pkgdetails'];
        $file = $_FILES['image']['name'];
        $pkgprice = $_POST['pkgprice'];

        $uploads_dir = "pkg_imgs";

        $query ="INSERT INTO `packages`(`pkg_name`, `pkg_loc`, `pkg_price`, `pkg_det`, `pkg_feature`, `img_dir`) VALUES ('$pkgnam','$pkglo','$pkgprice','$pkgde','$pkgfe','$file')";

        $res = mysqli_query($con, $query);

        if($res){
          move_uploaded_file($_FILES['image']['tmp_name'],"$uploads_dir/$file");
        }
      }
      else {
        echo "empty field";
      }

    }
     ?>
  </body>
</html>





















<!-- fdjslk -->
