<?php include 'middleware/userFlightInfoController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\mdb.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.css">
    <title>Booking Information</title>
</head>
<body>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color animated fadeInUp scrolling-navbar sticky-top">
        <button class="btn btn-primary btn-md btn-outline-white btn-shadow" onclick = "javascript:history.go(-1)"><i class="fa fa-angle-left"></i> Back</button>
    </nav>
    <?php if (isset($_GET['id'])) : ?>
    <div class="col-md-offset-1 py-5">
        <div class="container">
            <div class="card mx-auto col-md-6" style="padding: 15px 15px 15px 15px;">
                <h2 class="text-center">Passenger and Contact Information</h2>
                <form action="userFlightInfo.php" method="get">
                    <div class="col-md-12 col-sm-12">
                        <label>Gender <code>*</code></label>
                        <div class="input-group">
                            <select class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Date of birth <code>*</code></label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="date_of_birth" value="<?php echo $date_of_birth; ?>">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Name <code>*</code></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Surname <code>*</code></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="surname" value="<?php echo $surname; ?>">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Phone number <code>*</code></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number; ?>">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Email <code>*</code></label>
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-md btn-outline-dark d-block mx-auto" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php else : ?>
    <div class="container py-5" id="delete">
        <div class="card" style="padding: 15px;">
            <button type="button" class="close text-danger" aria-label="Close" style="display: flex;" onclick="deleteCard()">
                <span aria-hidden="true">&times;</span>
            </button>
            <h1 class="text-muted text-center">Invalid id cannot process request</h1>
            <h6 class="text-muted text-center">Try going back to book a valid flight</h6>
            <a class="btn btn-sm btn-white col-md-4 d-block mx-auto btn-outline-dark" href="index.php">Go and book a flight</a>
        </div>
    </div>
    <?php endif; ?>
    <br><br>
    <script src="js/script.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
