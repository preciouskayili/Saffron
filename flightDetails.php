<?php
 include 'middleware/flightDetailsController.php';
 include 'middleware/flightFormController.php';

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="css\bootstrap.min.css">
     <link rel="stylesheet" href="css\mdb.css">
     <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.css">
     <title>Flight details</title>
   </head>
   <body>
     <!--Navbar -->
     <nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color animated fadeInUp scrolling-navbar sticky-top">
        <button class="btn btn-primary btn-md btn-outline-white btn-shadow" onclick = "javascript:history.go(-1)"><i class="fa fa-angle-left"></i> Back</button>
     </nav>
     <?php if ($flight) : ?>
     <div class="container">
       <div class="col-md-6 py-5 mx-auto">
         <div class="card" style="padding: 15px;">
           <h4 class="text-primary text-center">Payment and Customer Details</h4>
           <!-- <hr class="mx-auto bg-primary" style="width: 60%;"> -->
           <h5 class="text-left text-primary">Flight id:</h5>
           <h5 class="text-left text-muted"><?php echo $id; ?></h5>
           <h4 class="text-primary text-center"><?php echo $flight['flying_from']; ?></h4>
           <i class="mx-auto fa fa-plane text-center text-white bg-primary" aria-hidden="true" style="width: 40px; height: 40px; font-size: 20px; border-radius: 50%; padding-top: 10px;"></i>
           <h4 class="text-primary text-center"><?php echo $flight['flying_to']; ?></h4>
           <p class="text-primary"><i class="fa fa-clock text-muted"></i> Departure date and Time:</p>
           <p class="text-muted"><?php echo $flight['departure_date'] . ' ' . $flight['departure_time']; ?></p>

           <p class="text-primary"><i class="fa fa-clock text-muted"></i> Arrival date and Time:</p>
           <p class="text-muted"><?php echo $flight['arrival_date'] . ' ' . $flight['arrival_time']; ?></p>
           <h4 class="text-primary">Price Breakdown</h4>
           <p class="text-muted">NGN <?php echo $flight['flight_price'] + $flight['tax_price'] + $flight['insurance_price']; ?></p>
           <p class="text-primary">Flight price:</p>
           <p class="text-muted">NGN <?php echo $flight['flight_price']; ?></p>
           <p class="text-primary">Insurance price:</p>
           <p class="text-muted">NGN <?php echo $flight['insurance_price']; ?></p>
           <p class="text-primary">Tax price:</p>
           <p class="text-muted">NGN <?php echo $flight['tax_price']; ?></p>
           <a class="btn btn-white btn-outline-dark waves-effect btn-sm" href="userFlightInfo.php?id=<?php echo $id; ?>">Proceed To Payment <i class="fa fa-credit-card"> </i></a>
         </div>
       </div>
     </div>
    
     <?php else : ?>
      <div class="container py-5 my-5" id="delete">
        <div class="card" style="padding: 15px;">
          <button type="button" class="close text-danger" aria-label="Close" style="display: flex;" onclick="deleteCard()">
            <span aria-hidden="true">&times;</span>
          </button>
          <h1 class="text-muted text-center">No such flight exists</h1>
        </div>
      </div>
     <?php endif; ?>

     <!-- JQuery -->
     <script type="text/javascript" src="js/script.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/popper.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/mdb.min.js"></script>
   </body>
 </html>
