<?php include("middleware/oneWayDetailsController.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <title>Flight Details</title>
</head>
<body>
  <div class="container py-5 flex-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary">
          <h2 class="text-center text-white">Flight and Payment details</h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <p>Flying from: <?php echo $flight['flying_from'] ?></p>
            </div>

            <div class="col-md-6">
              <p>Flying to: <?php echo $flight['flying_to'] ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>Departure date: <?php echo $flight['departure_date'] ?></p>
            </div>

            <div class="col-md-6">
              <p>Children: <?php echo $flight['children'] ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>Travel class: <?php echo $flight['travel_class'] ?></p>
            </div>

            <div class="col-md-6">
              <p>Departure time: <?php echo $flight['departure_time'] ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <p>Flight price: <?php echo $flight['flight_price'] ?></p>
            </div>

            <div class="col-md-6">
              <p>Insurance price: <?php echo $flight['insurance_price'] ?></p>
            </div>
          </div>

          <button class="btn btn-primary btn-md d-flex mx-auto mt-5">Proceed to checkout <i class="fab fa-debit-card"></i></button>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>