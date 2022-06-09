<?php
  session_start();
  if(!isset($_SESSION['AdminLoginId'])){
    header("location: admin.php");
  }
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Admin Panel</title>
     <!-- <style media="screen">
     body {
 height: 100%;
 overflow: hidden;
 margin: 0px;  /* removes default style */
 display: flex;  /* enables flex content for its children */
 box-sizing: border-box;
}

       div.header{
         font-family: 'Poppins', sans-serif;
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 0px 60px;
         background-color: #696969;
         position: relative;
         width: inherit;
       }
       div.header button{
         background-color: #f0f0f0;
         font-size: 12px;
         font-weight: 550;
         padding: 4px 8px;
         border: 2px solid black;
         position: relative;

       }



     </style> -->
     <link rel="stylesheet" href="adminpanel.css">
	   <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
   </head>
   <body>
     <div class="wrapper">
    <div class="sidebar">
        <h2>ADMIN PANEL</h2>
        <ul>
            <li><a href="adminpanel.php?page=dashboard.php"><i class="fas fa-user"></i>Dashboard</a></li>
            <li class="dropdown"><a href="#"><i class="fas fa-user"></i>Tour Packages</a>
              <ul>
                <li><a href="adminpanel.php?page=crtpkg.php">Create</a></li>
                <li><a href="adminpanel.php?page=mngpkg.php">Manage</a></li>
              </ul>
            </li>
            <li><a href="adminpanel.php?page=mngusers.php"><i class="fas fa-address-card"></i>Manage Users</a></li>
            <li><a href="adminpanel.php?page=mngbooking.php"><i class="fas fa-project-diagram"></i>Manage Bookings</a></li>
            <li><a href="adminpanel.php?page=mngqueries.php"><i class="fas fa-blog"></i>Manage Enquiries</a></li>
            <li><form class="btnclass" method="POST">
              <button type="submit" name="logout">LOG OUT</button>
            </form></li>


        </ul>

    </div>
    <div class="main_content">
        <div class="header">TOURS AND TRAVELS</div>

    </div>
    <div class="content">
      <?php

             if(!empty($_GET['page']))
             {
                $page = $_GET['page'];
             }
             // else {
             //
             // }
	           if (!empty($page)) {
		         include($page);
	           }
	           else {
	           include('dashboard.php');
	           }
      ?>
      <!-- <?php include('dashboard.php'); ?> -->
    </div>
</div>






     <?php
     if(isset($_POST['logout']))
     {
       session_destroy();
       header("location: admin.php");
     }
      ?>
   </body>
 </html>
