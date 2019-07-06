<?php
include_once 'read.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/master.css">
    <style media="screen">
      lable{
        float: left;
      }
      p{
        float: right;
      }
    </style>
  </head>
  <body>
<div class="wrapper" style="width:500px; margin: 0 auto;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>View Member Detail</h1>
        </div>
        <div class="form-group">
          <label>Surname</label>
          <p class="form-control-static"><?php echo $row["surname"];?></p>
        </div>
        <div class="form-group">
          <label>First name</label>
          <p class="form-control-static"><?php echo $row["firstname"];?></p>
        </div>
        <div class="form-group">
          <label>Other name</label>
          <p class="form-control-static"><?php echo $row["other_name"];?></p>
        </div>
        <div class="form-group">
          <label>Date of Birth</label>
          <p class="form-control-static"><?php echo $row["dob"];?></p>
        </div>
        <div class="form-group">
          <label>Gender</label>
          <p class="form-control-static"><?php echo $row["gender"];?></p>
        </div>
        <div class="form-group">
          <label>Marital Status</label>
          <p class="form-control-static"><?php echo $row["marital_status"];?></p>
        </div>
        <div class="form-group">
          <label>Education</label>
          <p class="form-control-static"><?php echo $row["education"];?></p>
        </div>
        <div class="form-group">
          <label>Occupation</label>
          <p class="form-control-static"><?php echo $row["occupation"];?></p>
        </div>
        <div class="form-group">
          <label>Employment Status</label>
          <p class="form-control-static"><?php echo $row["employment"];?></p>
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <p class="form-control-static"><?php echo $row["phone"];?></p>
        </div>
        <div class="form-group">
          <label>Residence Address</label>
          <p class="form-control-static"><?php echo $row["residence"];?></p>
        </div>
        <div class="form-group">
          <label>Department</label>
          <p class="form-control-static"><?php echo $row["dept"];?></p>
        </div>
        <div class="form-group">
          <label>Baptism</label>
          <p class="form-control-static"><?php echo $row["baptism"];?></p>
        </div>
        <div class="form-group">
          <label>Tither</label>
          <p class="form-control-static"><?php echo $row["tither"];?></p>
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <p class="form-control-static"><?php echo $row["email"];?></p>
        </div>
        <a href="index.php" class="btn btn-default">Back</a>
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
