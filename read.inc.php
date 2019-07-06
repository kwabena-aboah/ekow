<?php
  if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    require_once "db.inc/connect.php";
    $sql = "SELECT * FROM members WHERE id = :id";
    if($stmt = $pdo->prepare($sql)){
      $stmt->bindParam(":id", $param_id);
      $param_id = trim($_GET["id"]);

      if($stmt->execute()){
        if($stmt->rowCount() == 1){
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
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
    // close function
    unset($stmt);
    // close connection
    unset($pdo);
  }else{
    header("location: error.php");
    exit();
  }
?>
