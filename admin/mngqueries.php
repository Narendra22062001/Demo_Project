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
      margin-left: 40px;

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
      padding: 20px 30px;
      text-align: center;
    }

    .cont_table table, th, td {
      border: 1px solid black;
    }
    </style>
  </head>
  <body>

    <div class="bkings">
      <h1>MANAGE ENQUIRIES</h1>
      <br>
      <table class="cont_table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL/PHONE</th>
            <th>SUBJECT</th>
            <th>DESCRIPTION</th>
            <th>POSTING DATE</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require("connection.php");

          $sql = "SELECT * FROM `enquiry`";
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
                 <td><?php echo$row["fname"]; ?>  </td>
                 <td><?php echo$row["email"]; ?> / <?php echo$row["phone"]; ?>  </td>
                 <td><?php echo$row["subject"]; ?>  </td>
                 <td><?php echo$row["description"]; ?>  </td>
                 <td><?php echo$row["Post_date"]; ?>  </td>
                 </tr>
          <?php } ?>




        </tbody>
      </table>
    </div>


  </body>
</html>
