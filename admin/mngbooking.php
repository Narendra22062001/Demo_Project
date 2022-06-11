<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .bkings{
      margin-top: 30px;
      text-align: center;
    }

    .cont_table{
      /* border-collapse: collapse; */
      margin: 25px 0;
      font-size: 1.2em;
      min-width: 1100px;
      margin-left: 15px;

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
      padding: 20px 30px;
      text-align: center;
    }
    .cont_table td{
      padding: 30px 40px;
      text-align: center;
    }

    .cont_table table, th, td {
      border: 1px solid black;
    }
    </style>
  </head>
  <body>

    <div class="bkings">
      <h1>MANAGE BOOKINGS</h1>
      <br>
      <table class="cont_table">
        <thead>
          <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>FROM/TO</th>
            <th>COMMENT</th>
            <th>STATUS</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require("connection.php");

          $sql = "SELECT * FROM `tour_history`";
          $result = mysqli_query($con, $sql);

          if(!$result){
            die("Invalid query: " . $connection->error);
          }

           ?>
           <?php
          while ($row = $result->fetch_assoc()) {
            ?>

            <tr>
                 <td><?php echo$row["id"]; ?>  </td>
                 <td><?php echo$row["email"]; ?>  </td>
                 <td><?php echo$row["todate"]; ?> To <?php echo$row["fromdate"]; ?>  </td>
                 <td><?php echo$row["comment"]; ?>  </td>
                 <td><?php echo$row["status"]; ?>  </td>
                 <td>
                     <a class='' href='cancelconfirm.php?status=canceled&bid=<?php echo$row["id"];?>' name='cancel'>Cancel/</a>
                     <a class='' href='cancelconfirm.php?status=confirmed&bid=<?php echo$row["id"];?>'  name='confirm'>Confirm</a>
                 </td>


                 </tr>
          <?php } ?>




        </tbody>
      </table>
    </div>


  </body>
</html>
