
<!DOCTYPE html>
<?php
require("connection.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS only -->
    <style media="screen">

    .mngp .mngptl{
      margin-top: 30px;
      text-align: center;
    }

    .cont_table{
      /* border-collapse: collapse; */
      margin: 25px 0;
      font-size: 1.2em;
      min-width: 1100px;
      margin-left: 100px;
    }
    .cont_table thead tr{
      background-color: #009870;
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }
    .cont_table tbody tr{
      text-align: left;
    }

    .cont_table th{
      padding: 30px 55px;
      text-align: center;
    }
    .cont_table td{
      padding: 30px 55px;
      text-align: center;
    }

    .cont_table table, th, td {
      border: 1px solid black;
    }
    .button {
      background-color: #ADD8E6;
      color: black;
      border: 2px solid black; /* Green */
      border-radius: 3px;
      padding: 6px;
      margin-left : 5px;
      margin-right: 5px;
    }

    </style>

  </head>
  <body class="mngp">
    <div class="mngptl">
      <h1>MANAGE PACKAGES</h1>
      <br>
      <table class="cont_table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>PRICE</th>
            <th>CREATION DATE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = "SELECT * FROM `packages`";
          $result = mysqli_query($con, $sql);

          if(!$result){
            die("Invalid query: " . $connection->error);
          }

           ?>
           <?php
          while ($row = $result->fetch_assoc()) {
            ?>

            <tr>
                 <td><?php echo$row["pkg_id"]; ?>  </td>
                 <td><?php echo$row["pkg_name"]; ?>  </td>
                 <td><?php echo$row["pkg_loc"]; ?>  </td>
                 <td><?php echo$row["pkg_price"]; ?>  </td>
                 <td><?php echo$row["date"]; ?>  </td>
                 <td>
                   <a class='button' href='adminpanel.php?page=edit.php&id=<?php echo$row["pkg_id"]; ?>'>Update</a>
                   <a class='button' href='delete.php?id=<?php echo$row["pkg_id"]; ?>'>Delete</a>
                 </td>

                 </tr>
          <?php } ?>




        </tbody>
      </table>
    </div>

  </body>
</html>
