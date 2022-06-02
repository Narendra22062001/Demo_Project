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
     <style media="screen">
        body{
          margin: 0;
        }
       div.header{
         font-family: poppins;
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 0px 60px;
         background-color: #204950;
       }
       div.header button{
         background-color: #f0f0f0;
         font-size: 16px;
         font-weight: 550;
         padding: 8px 12px;
         border: 2px solid black;
         border-right: 5px;
       }
       div.header button:hover {
         background-color: grey;
         transform: translateY(-2px);
       }
     </style>
   </head>
   <body>
     <div class="header">
       <h1>ADMIN PANEL</h1>
       <form  method="POST">
         <button type="submit" name="logout">LOG OUT</button>
       </form>
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

























/fdsf/
