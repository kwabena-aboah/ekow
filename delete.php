<?php
  // process delete confirmation
  if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "db.inc/connect.php";
    $sql = "DELETE FROM members WHERE id =:id";

    if($stmt = $pdo->prepare($sql)){
      $stmt->bindParam(":id", $param_id);
      $param_id = trim($_POST["id"]);
      if($stmt->execute()){
        header("location: index.php");
        exit();
      } else{
        echo "Oops! Something went wrong. Please try again later.";
      }
    }
    // close statement.
    unset($stmt);
    // close connection
    unset($pdo);
  }else{
    if(empty(trim($_GET["id"]))){
      header("location: error.php");
      exit();
    }
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Delete record</title>
   <link rel="stylesheet" href="assests/css/bootstrap.min.css">
   <link rel="stylesheet" href="assests/css/master.css">
 </head>
 <body>
   <div class="wrapper" style="width:500px; margin: 0 auto;">
       <div class="container-fluid">
         <div class="row">
           <div class="col-md-12">
             <div class="page-header">
               <h1>Delete Record</h1>
             </div>
             <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               <div class="alert alert-danger fade in">
                 <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>">
                 <p>Are you sure you want to delete this record?</p><br>
                 <p>
                   <input type="submit" name="submit" value="Yes" class="btn btn-danger">
                   <a href="index.php" class="btn btn-default">No</a>
                 </p>
               </div>
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
