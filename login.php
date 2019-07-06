<?php
//login.php
session_start();
if (isset($_POST["submit"])) {
    include_once 'db.inc/config.php';

    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $database = new dbConnect();

    $db = $database->openConnection();

    $sql = "select * from user_details where email = '$email' and pswd= '$pswd'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);

    $id = $result[0]['id'];
    $email = $result[0]['email'];
    $_SESSION['id'] = $id;

    $database->closeConnection();
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/master.css">
	</head>
	<body>
		<br />
		<div class="container">
			<h2 align="center">Login Page</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return loginvalidation();">
						<div class="form-group">
							<label>User Email</label> <span id="email_error"></span>
							<input type="email" name="email" class="form-control" required id="email"/>
						</div>
						<div class="form-group">
							<label>Password</label> <span id="password_error"></span>
							<input type="password" name="pswd" class="form-control" required id="pswd"/>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn btn-info" />
						</div>
					</form>
					<div class="row" style="padding-left: 15px; padding-right: 15px;">
						Not registered yet? Please <a href="signup.php">Signup</a> now!
					</div>
				</div>
			</div>
		</div>
    <script type="text/javascript" src="assests/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assests/js/bootstrap.min.js"></script>
    <script>
        // $(document).ready(function(){
        //   $['data-toggle="tooltip"'].tooltip();
        // });

				function loginvalidation(){
        var email = document.getElementById('email').value;
        var pswd = document.getElementById('pswd').value;

        var valid = true;

        if(email == ""){
        	   valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        }

        if(pswd == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }
    </script>
  </body>
  </html>
