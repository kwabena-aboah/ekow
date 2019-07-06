<?php
include_once 'add.php';
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
<div class="wrapper" style="width:500px; margin:0 auto;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h2>Create Member</h2>
        </div>
        <p>Please fill this form and submit to add member's record to the database</p>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group <?php echo (!empty($surname_err)) ? 'has-error' : '';?>">
            <label>Surname</label>
            <input type="text" name="surname" class="form-control" value="<?php echo $surname; ?>">
            <span class="help-block"><?php echo $surname_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : '';?>">
            <label>Firstname</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
            <span class="help-block"><?php echo $firstname_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($other_name_err)) ? 'has-error' : '';?>">
            <label>Other name</label>
            <input type="text" name="other_name" class="form-control" value="<?php echo $other_name;?>">
            <span class="help-block"><?php echo $other_name_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($dob_err)) ? 'has-error' : '';?>">
            <label>Date of Birth</label>
            <input type="text" name="dob" class="form-control" value="<?php echo $dob;?>">
            <span class="help-block"><?php echo $dob_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($gender_err)) ? 'has-error' : '';?>">
            <label>Gender</label>
            <input type="text" name="gender" value="<?php echo $gender; ?>" class="form-control">
            <span class="help-block"><?php echo $gender_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($marital_status_err)) ? 'has-error' : '';?>">
            <label>Marital Status</label>
            <input type="text" name="marital_status" value="<?php echo $marital_status; ?>" class="form-control">
            <span class="help-block"><?php echo $marital_status_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($education_err)) ? 'has-error' : '';?>">
            <label>Educational Background</label>
            <input type="text" name="education" value="<?php echo $education; ?>" class="form-control">
            <span class="help-block"><?php echo $education_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($occupation_err)) ? 'has-error' : '';?>">
            <label>Occupation</label>
            <input type="text" name="occupation" class="form-control" value="<?php echo $occupation;?>">
          </div>
          <div class="form-group <?php echo (!empty($employment_err)) ? 'has-error' : '';?>">
            <label>Employment Status</label>
            <input type="text" name="employment" value="<?php echo $employment; ?>" class="form-control">
            <span class="help-block"><?php echo $employment_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : '';?>">
            <label>Phone Number</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
            <span class="help-block"><?php echo $phone_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($residence_err)) ? 'has-error' : '';?>">
            <label>Residence address</label>
            <input type="text" name="residence" class="form-control" value="<?php echo $residence; ?>">
            <span class="help-block"><?php echo $residence_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($dept_err)) ? 'has-error' : '';?>">
            <label>Departments</label>
            <input type="text" name="dept" class="form-control" value="<?php echo $dept; ?>">
            <span class="help-block"><?php echo $dept_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($baptism_err)) ? 'has-error' : '';?>">
            <label>Baptism</label>
            <input type="text" name="baptism" value="<?php echo $baptism; ?>" class="form-control">
            <span class="help-block"><?php echo $baptism_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($tither_err)) ? 'has-error' : '';?>">
            <label>Tither</label>
            <input type="text" name="tither" value="<?php echo $tither; ?>" class="form-control">
            <span class="help-block"><?php echo $tither_err; ?></span>
          </div>
          <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : '';?>">
            <label>Email address</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
            <span class="help-block"><?php echo $email_err; ?></span>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          <a href="index.php" class="btn btn-default">Cancel</a>
        </form>
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
