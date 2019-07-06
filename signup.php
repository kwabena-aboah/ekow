<?php
if (isset($_POST["submit"])) {
    require_once 'db.inc/config.php';

    $email = $_POST['email'];
    $pswd = md5($_POST['pswd']);

    $database = new dbConnect();

    $db = $database->openConnection();
    $sql1 = "select email from user_details where email='$email'";

    $user = $db->query($sql1);
    $result = $user->fetchAll();
    $_SESSION['email'] = $result[0]['email'];

    if (empty($result)) {
        $sql = "insert into user_details (email, pswd) values('$email','$pswd')";

        $db->exec($sql);

        $database->closeConnection();
        $response = array(
            "type" => "success",
            "message" => "You have registered successfully.<br/><a href='login.php'>Now Login</a>."
        );
    } else {
        $response = array(
            "type" => "error",
            "message" => "Email already in use."
        );
    }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Signup Page</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/master.css">
	</head>
	<body>
		<br />
		<div class="container">
			<h2 align="center">Register Page</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Register Page</div>
				<div class="panel-body">
          <?php
        if (! empty($response)) {
            ?>
        <div id="response" class="<?php echo $response["type"]; ?>"><?php echo $response["message"]; ?></div>
        <?php
        }
        ?>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return signupvalidation()">
						<div class="form-group">
							<label>User Email</label> <span id="email_error"></span>
							<input type="email" name="email" class="form-control" required id="email"/>
						</div>
						<div class="form-group">
							<label>Password</label> <span id="password_error"></span>
							<input type="password" name="pswd" class="form-control" required id="password"/>
						</div>
            <div class="form-group">
							<label>Confirm Password</label> <span id="confirm_password_error"></span>
							<input type="password" name="cpswd" class="form-control" required placeholder="Re-enter your password" id="confirm_pasword"/>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn btn-info" />
						</div>
					</form>
					<div class="row" style="padding-left: 15px; padding-right: 15px;">
						Already registered? Please <a href="login.php">Login</a> now!
					</div>
				</div>
			</div>
		</div>
    <script type="text/javascript" src="assests/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
    <script>
    function signupvalidation(){
      var email = document.getElementById('email').value;
      var pswd = document.getElementById('password').value;
      var cpswd = document.getElementById('confirm_pasword').value;
      var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

      var valid=true;

      if(name == ""){
          valid = false;
          document.getElementById('name_error').innerHTML = "required.";
      }

      if(email == ""){
          valid = false;
          document.getElementById('email_error').innerHTML = "required.";
      } else {
          if(!emailRegex.test(email)){
              valid = false;
              document.getElementById('email_error').innerHTML = "invalid.";
          }
      }

      if(pswd == "" ){
          valid = false;
          document.getElementById('password_error').innerHTML = "required.";
      }
      if(cpswd == "" ){
          valid = false;
          document.getElementById('confirm_password_error').innerHTML = "required.";
      }

      if(pswd != cpswd){
          valid = false;
          document.getElementById('confirm_password_error').innerHTML = "Both passwords must be same.";
      }

      return valid;
  }
    </script>
  </body>
  </html>
