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
         background-color: white;
       }
       div.header button{
         background-color: #f0f0f0;
         font-size: 16px;
         font-weight: 550;
         padding: 7px 13px;
         border: 2px solid black;
       }

       .column {
    height: 100%;  /* allows both columns to span the full height of the browser window */
    display: flex;
    flex-direction: column;  /* stacks the left and right headers above the bottom content */
}

#left {
    flex-shrink: 0;  /* makes sure that content is not cut off in a smaller browser window */
}

.top-left {
    flex-shink: 0;
}

.top-right {
    flex-shrink: 0;
    display: flex;
}

ul {
    display: flex;
    list-style: none;
}

.bottom {
    flex-grow: 1;  /* ensures that the container will take up the full height of the parent container */
    overflow-y: auto;  /* adds scroll to this container */
}

     </style>
   </head>
   <body>

     <div id="left" class="column">
        <div class="top-left"></div>
        <div class="bottom"></div>
    </div>
    <div id="right" class="column">
        <div class="top-right">
          <div class="header">
            <h1>ADMIN PANEL</h1>
            <form class="btnclass" method="POST">
              <button type="submit" name="logout">LOG OUT</button>
            </form>

          </div>
        </div>
        <div class="bottom"></div>
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
