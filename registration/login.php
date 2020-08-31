
<?php 
  include("validation.php");
  error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link rel = "stylesheet" href ="bootstrap-4.0.0\dist\css\bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="loginstyle.css" rel="stylesheet">
  </head>

  <body>
  <div class="container mx-auto">
    <div class="col-md-6 login-box">
      <div class="login-right">
            <h2>Login Here</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" required>
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                  <button type="submit" name="submit" class="btn btn-primary">Login <i class="fa fa-sign-in-alt"></i></button>
            </form>
        </div>
      </div>
    </div>
    <style>
    .login-box{
        float: none;
        margin: 150px auto;
    }
    .login-right{
        background: #fff;
        padding: 30px;
    }
    .form-control{
        background-color: transparent !important;
    }
    a{
        color: #fff !important;
    }
    h1{
        color: #fff !important;
        text-align: center;
        margin-top: 200px !important;
        text-transform: uppercase;
    }
    </style>
  </body>

</html>
