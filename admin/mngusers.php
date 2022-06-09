<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    require("connection.php");
     ?>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .usdata{
      margin-top: 30px;
      text-align: center;
    }

    .usdata .cont_table{
      /* border-collapse: collapse; */
      margin: 25px 0;
      font-size: 1.2em;
      min-width: 1100px;
      margin-left: 150px;
    }
    .usdata .cont_table thead tr{
      background-color: #009870;
      color: #ffffff;
      text-align: left;
      font-weight: bold;
    }
    .usdata .cont_table tbody tr{
      text-align: left;
    }

    .usdata .cont_table th{
      padding: 30px 55px;
      text-align: center;
    }
    .usdata .cont_table td{
      padding: 30px 55px;
      text-align: center;
    }

    .usdata .cont_table table, th, td {
      border: 1px solid black;
    }
    </style>
  </head>
  <body>
    <div class="usdata">
      <table class="cont_table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>REG DATE</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $sql = "SELECT * FROM `user`";
          $result = mysqli_query($con, $sql);

          if(!$result){
            die("Invalid query: " . $connection->error);
          }

           ?>
           <?php
          while ($row2 = $result->fetch_assoc()) {
            ?>

            <tr>
                 <td><?php echo$row2["user_id"]; ?>  </td>
                 <td><?php echo$row2["user_name"]; ?>  </td>
                 <td><?php echo$row2["user_email"]; ?>  </td>
                 <td><?php echo$row2["user_phone"]; ?>  </td>
                 <td><?php echo$row2["user_date"]; ?>  </td>
                 <!-- <td>
                   <a class='button' href='adminpanel.php?page=edit.php&id=<?php echo$row["pkg_id"]; ?>'>Update</a>
                   <a class='button' href='delete.php?id=<?php echo$row["pkg_id"]; ?>'>Delete</a>
                 </td> -->

                 </tr>
          <?php } ?>




        </tbody>
      </table>
    </div>


  </body>
</html>
