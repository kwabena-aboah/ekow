<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/master.css">
  </head>
  <body>
    <head>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav pull-right">
            <li> <a href="index.php">Home</a></li>
            <li> <a href="logout.php">Logout</a> </li>
          </ul>
        </div>
      </nav>
    </head>
    <div class="wrapper" style="width:500px; margin: 0 auto;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header clearfix">
              <h2 class="pull-left">Member Details</h2>
              <a href="create.php" class="btn btn-success pull-right">Add New Member</a>
            </div>
            <?php
              // db.inc/connect.php file
              require_once "db.inc/connect.php";
              $sql = "SELECT * FROM members";
              if($result = $pdo->query($sql)){
                if($result->rowCount() > 0){
                  echo "<table class='table table-bordered table-striped'>";
                  echo "<thead>";
                    echo "<tr>";
                      echo "<th>#</th>";
                      echo "<th>Surname</th>";
                      echo "<th>Firstname</th>";
                      echo "<th>Other Name</th>";
                      echo "<th>Birth date</th>";
                      echo "<th>Gender</th>";
                      echo "<th>Marital Stats</th>";
                      echo "<th>Education</th>";
                      echo "<th>Occupation</th>";
                      echo "<th>Employment</th>";
                      echo "<th>Phone</th>";
                      // echo "<th>Residence</th>";
                      // echo "<th>Department</th>";
                      // echo "<th>Baptism</th>";
                      // echo "<th>Tither</th>";
                      echo "<th>Email</th>";
                      echo "<th>Action</th>";
                    echo "</tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while($row = $result->fetch()){
                    echo "<tr>";
                      echo "<td>" . $row['id'] . "</td>";
                      echo "<td>" . $row['surname'] . "</td>";
                      echo "<td>" . $row['firstname'] . "</td>";
                      echo "<td>" . $row['other_name'] . "</td>";
                      echo "<td>" . $row['dob'] . "</td>";
                      echo "<td>" . $row['gender'] . "</td>";
                      echo "<td>" . $row['marital_status'] . "</td>";
                      echo "<td>" . $row['education'] . "</td>";
                      echo "<td>" . $row['occupation'] . "</td>";
                      echo "<td>" . $row['employment'] . "</td>";
                      echo "<td>" . $row['phone'] . "</td>";
                      // echo "<td>" . $row['residence'] . "</td>";
                      // echo "<td>" . $row['dept'] . "</td>";
                      // echo "<td>" . $row['baptism'] . "</td>";
                      // echo "<td>" . $row['tither'] . "</td>";
                      echo "<td>" . $row['email'] . "</td>";
                      echo "<td><a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'>
                        <span class='glyphicon glyphicon-eye-open'></span></a>";
                      echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>
                        <span class='glyphicon glyphicon-pencil'></span></a>";
                      echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>
                        <span class='glyphicon glyphicon-trash'></span></a>";
                      echo "</td>";
                    echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    unset($result);
                  } else{
                    echo "<p class='lead'><em>No records were found.</em></p>";
                  }
                    } else{
                        echo "ERROR: Could not execute $sql. " . $mysqli->error;
                  }
                  // close connection
                  unset($pdo);
             ?>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="assests/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
          $['data-toggle="tooltip"'].tooltip();
        });
    </script>
  </body>
</html>
