<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel = "stylesheet" href ="bootstrap-4.0.0\dist\css\bootstrap.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

    

    <title>Document</title>
</head>
<body class="bg-light">
<div class="container-fluid" style="margin-top: 100px;">
    <div class="row" style="display: flex; align-items: center; justify-content: center;">
        <div class="col-md-5">
        <h1 class="text-primary">Who are we?</h1>
        <p class="text-justify text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Quidem explicabo iusto cupiditate repudiandae beatae ullam quasi magnam ipsa, exercitationem, 
        sed nostrum tempore? Facere suscipit eius a quis magnam minus recusandae?Lorem ipsum dolor sit 
        amet consectetur adipisicing elit. Autem corrupti nostrum nam, ratione tempora modi quasi soluta, 
        esse blanditiis perspiciatis qui ipsum magni sequi facere laboriosam rerum dolorem aut! Autem.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe soluta labore commodi. 
        Ab impedit veniam at quibusdam quisquam porro eaque, 
        amet labore, natus a in exercitationem, esse quas consectetur praesentium.</p>
        </div>
        <div class="col-md-5">
                <div class="card card-body">
                    <h3 class="text-center text-primary mb-4">Sign-up</h3>
                    <form method="post" action="register.php">

                        <div class="form-group">
                            <p class="text-danger"><?php echo $errors['username']; ?></p>
                            <input class="form-control input-lg" placeholder="Username" name="username" type="text" value="<?php echo $username; ?>">
                        </div>

                        <div class="form-group">
                            <p class="text-danger"><?php echo $errors['email']; ?></p>
                            <input class="form-control input-lg" placeholder="Email" name="email" type="email" value="<?php echo $email; ?>">
                        </div>

                        <div class="form-group">
                            <p class="text-danger"><?php echo $errors['password']; ?></p>
                            <input class="form-control input-lg" placeholder="Password" name="password_1" type="password">
                        </div>

                        <div class="form-group">
                            <p class="text-danger"><?php echo $errors['password_confirm']; ?></p>
                            <input class="form-control input-lg" placeholder="Confirm password" name="password_2" value="" type="password">
                        </div>

                        <input class="btn btn-lg btn-primary btn-block" value="Sign Up" type="submit" name="register">

                    </form>
                    <br>
                    <p class="text-muted">Already a member? <a href="login.php">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
<style>
</style>
</body>
</html>