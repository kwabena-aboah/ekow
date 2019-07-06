<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error Page</title>
     <link rel="stylesheet" href="assests/css/bootstrap.min.css">
     <style media="screen">
       .wrapper{
         width: 750px;
         margin: 0 auto;
       }
     </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h1>Invalid Request</h1>
            </div>
            <div class="alert alert-danger fadein">
              <p>Sorry, you've made an invalid request. Please
                <a href="index.php" class="alert-link">go back</a> and try again.
              </p>
            </div>
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
