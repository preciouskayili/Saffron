<?php
  $conn = mysqli_connect('localhost', 'presh', '1234', 'saffron');


  error_reporting(0);
  $email = $password = "";
  $errors = array("email" => "", "password" => "");

  $email = $_POST['email'];
  $password = $_POST['password'];
   
  if(isset($_POST['submit'])){
    if ($email == "") {
      $errors["email"] = "Email cannot be empty";
    }else{

    }
  if($password == ""){
    $errors["password"] = "Password cannot be empty";
    }
  }
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
    <form class="form-signin" action="login.php" method="post">
      <div class="form-label-group">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>
        <p class="text-danger"><?php echo $errors["email"]; ?></p>
        <label for="inputEmail">Email address</label>
      </div>
      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password">
        <p class="text-danger"><?php echo $errors["password"]; ?></p>
        <label for="inputPassword">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name = "submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
  </body>
</script>
</html>
