<?php
require_once "db.inc/connect.php";
$surname = $firstname = $other_name = $dob = $gender = $marital_status = $education =
$occupation = $employment = $phone = $residence = $dept = $baptism = $tither = $email = "";

$surname_err = $firstname_err = $other_name_err = $dob = $gender_err = $marital_status_err =
$education_err = $occupation_err  = $employment_err = $employment_err = $phone_err = $residence_error =
$dept_err = $baptism_err = $tither_err = $email_err = "";

// processing form data
if(isset($_POST["id"]) && !empty($_POST["id"])){
  // get hidden input value
  $id = $_POST["id"];
  // validate surname
  $input_surname = trim($_POST['surname']);
  if(empty($input_surname)){
    $surname_err = "Please enter surname";
  } elseif(!filter_var($input_surname, FILTER_VALIDATE_REGEXP,
    array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
      $surname_err = "Please enter a valid name.";
    } else{
      $surname = $input_surname;
    }

  // validate firstname
  $input_firstname = trim($_POST['firstname']);
  if(empty($input_firstname)){
    $firstname_err = "Please enter firstname";
  } elseif(!filter_var($input_firstname, FILTER_VALIDATE_REGEXP,
    array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
      $firstname_err = "Please enter a valid name.";
    } else{
      $firstname = $input_firstname;
    }
  // validate other_name
  $input_other_name = trim($_POST['other_name']);
  if(empty($input_other_name)){
    $other_name_err = "Please enter other name.";
  } elseif(!filter_var($input_other_name, FILTER_VALIDATE_REGEXP,
    array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
      $other_name_err = "Please enter a valid name.";
    } else{
      $other_name = $input_other_name;
    }

    // validate date of birth
    $input_dob = trim($_POST["dob"]);
    if(empty($input_dob)){
      $dob_error = "Please Type Date of Birth: Must be in the format = 1000-01-01.";
    }else{
      $dob = $input_dob;
    }

    // validate gender
    $input_gender = trim($_POST["gender"]);
    if(empty($input_gender)){
      $gender_error = "Please select gender status. E.g Male, Female, Other";
    }else{
      $gender = $input_gender;
    }

    // validate marital_status
    $input_marital_status = trim($_POST["marital_status"]);
    if(empty($input_marital_status)){
      $marital_status_error = "Please select marital status. E.g Single, Married, divorced";
    }else{
      $marital_status = $input_marital_status;
    }

    // validate Educational status.
    $input_education = trim($_POST["education"]);
    if(empty($input_education)){
      $education_error = "Please select educational status. E.g JHS, SHS etc.";
    }else{
      $education = $input_education;
    }

    // validate Occupation
    $input_occupation = trim($_POST["occupation"]);
    if(empty($input_occupation)){
      $occupation_error = "Please select occupation.E.g Teacher etcS";
    }else{
      $occupation = $input_occupation;
    }

    // validate employment status.
    $input_employment = trim($_POST["employment"]);
    if(empty($input_employment)){
      $employment_error = "Please select employment status.";
    }else{
      $employment = $input_employment;
    }

  // validate phone number
  $input_phone = trim($_POST["phone"]);
  if(empty($input_phone)){
    $phone_err = "Please enter phone number.E.g. 020-xxx-xxxx";
  } elseif (!ctype_digit($input_phone)) {
    // code...
    $phone_err = "Please enter a valid phone number.";
  } else{
    $phone = $input_phone;
  }

  // validate resident address
  $input_residence = trim($_POST["residence"]);
  if(empty($input_residence)){
    $residence_error = "Please enter residence/House number address";
  }else{
    $residence = $input_residence;
  }

  // validate department
  $input_department = trim($_POST["dept"]);
  if(empty($input_department)){
    $department_error = "Please enter department. E.g. Youth Ministry";
  }else{
    $dept = $input_department;
  }

  // validate baptism
  $input_baptism = trim($_POST["baptism"]);
  if(empty($input_baptism)){
    $baptism_error = "Please select baptsim type. E.g Water, Holy Ghost";
  }else{
    $baptism = $input_baptism;
  }

  // validate tither.
  $input_tither = trim($_POST["tither"]);
  if(empty($input_tither)){
    $tither_error = "Please select tither type. E.g Tither, Non-tither";
  }else{
    $tither = $input_tither;
  }

  // validate email address
  $input_email = trim($_POST["email"]);
  if(empty($input_email)){
    $email_error = "Please enter email address. E.g me@someone.com";
  }else{
    $email = $input_email;
  }
  // check input errors before inserting into db
  if(empty($surname_err) && empty($firstname_err) && empty($other_name_err) && empty($phone_err)
  && empty($dob_err) && empty($gender_err) && empty($marital_status_err) && empty($education_err)
  && empty($occupation_err) && empty($employment_err) && empty($dept_err) && empty($baptism_err)
  && empty($tither_err)&& empty($residence_error) && empty($email_err)){
    // update statement
    $sql = "UPDATE members SET surname=:surname, firstname=:firstname, other_name=:other_name,
    dob=:dob, gender=:gender, marital_status=:marital_status, education=:education, occupation=:occupation,
    employment=:employment, phone=:phone, email=:email, dept=:dept, baptism=:baptism, tither=:tither,
    residence=:residence WHERE id=:id";
    if($stmt = $pdo->prepare($sql)){
      $stmt->bindParam(":surname", $param_surname);
      $stmt->bindParam(":firstname", $param_firstname);
      $stmt->bindParam(":other_name", $param_other_name);
      $stmt->bindParam(":dob", $param_dob);
      $stmt->bindParam(":gender", $param_gender);
      $stmt->bindParam(":marital_status", $param_marital_status);
      $stmt->bindParam(":education", $param_education);
      $stmt->bindParam(":occupation", $param_occupation);
      $stmt->bindParam(":employment", $param_employment);
      $stmt->bindParam(":phone", $param_phone);
      $stmt->bindParam(":residence", $param_residence);
      $stmt->bindParam(":dept", $param_dept);
      $stmt->bindParam(":baptism", $param_baptism);
      $stmt->bindParam(":tither", $param_tither);
      $stmt->bindParam(":email", $param_email);
      $stmt->bindParam(":id", $param_id);

      // setting parameters
      $param_surname = $surname;
      $param_firstname = $firstname;
      $param_other_name = $other_name;
      $param_dob = $dob;
      $param_gender = $gender;
      $param_marital_status = $marital_status;
      $param_education = $education;
      $param_occupation = $occupation;
      $param_employment = $employment;
      $param_phone = $phone;
      $param_residence = $residence;
      $param_dept = $dept;
      $param_baptism = $baptism;
      $param_tither = $tither;
      $param_email = $email;
      $param_id = $id;

      if($stmt->execute()){
        header("location: index.php");
        exit();
      } else{
        echo "Something went wrong. Please try again later.";
      }
    }
    // close function
    unset($stmt);
  }
  // close connection
  unset($pdo);
} else{
  // check id existence
  if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    $id = trim($_GET["id"]);
    $sql = "SELECT * FROM members WHERE id =:id";
    if($stmt = $pdo->prepare($sql)){
      $stmt->bindParam(":id", $param_id);
      $param_id = $id;
      if($stmt->execute()){
        if($stmt->rowCount() == 1){
          // fetch results
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          // retrieve individual fields
          $surname = $row['surname'];
          $firstname = $row['firstname'];
          $other_name = $row['other_name'];
          $dob = $row['dob'];
          $gender =  $row['gender'];
          $marital_status =  $row['marital_status'];
          $education = $row['education'];
          $occupation = $row['occupation'];
          $employment = $row['employment'];
          $phone = $row['phone'];
          $residence = $row['residence'];
          $dept = $row['dept'];
          $baptism = $row['baptism'];
          $tither = $row['tither'];
          $email = $row['email'];
        } else{
          header("location: error.php");
          exit();
        }
      } else{
        echo "Oops! Something went wrong. Please try again later.";
      }
    }
    // close statement
    unset($stmt);
    // close connection
    unset($pdo);
  } else{
    header("location: error.php");
    exit();
  }
}
 ?>
