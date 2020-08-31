<?php
 
  session_start();

  $name = $_SESSION['name'];

?>
<!doctype html>
<html>
    <head>
        <title>Phoenix Airlines</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="hotelstyle.css">
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  		  <link rel = "stylesheet" href ="bootstrap-4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css\mdb.css">
  		  <link rel="stylesheet" href ="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    </head>
    <body>
        <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color scrolling-navbar fixed-top" style="box-shadow: 0;">
      <a class="navbar-brand" href="#">Saffron</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hotel.php">Hotel</a>
          </li>
          
          
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"> </i> <?php echo htmlspecialchars($_SESSION['username']) ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
              aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="#"> <i class="fas fa-sign-in-alt"> </i> Login</a>
              <a class="dropdown-item" href="#"> <i class="fas fa-user-plus"> </i> Register</a>
              <a class="dropdown-item" href="#"> <i class="fas fa-sign-out-alt"> </i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
<br><br>
	<div class="size-px-wide">
		<section class="banner_part">
      <div class="banner_text text-center">
        <div class="text-white">
          <h1 style="margin-top: 100px;">Saffron</h1>
          <p class="text-white">Find and book hotels around the world</p>
          <a href="#" class="btn btn-outline-light my-2">Discover Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
    </section>
</div>
		<br>
        <section class="tour section-wrapper container">
		<h2 class="section-title text-center" style="color: #5667ff;">
			Find a Hotel
		</h2>
		<br>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<form role="form" class="form-dropdown">
					<div class="form-group">
						<br>
						<label id="country">Destination</label>
						<select class="form-control border-radius" id="sel1">
							<option>America</option>
							<option>Bangladesh</option>
							<option>Canada</option>
							<option>India</option>
						</select>
					</div>
				</form>
			</div>

			<div class="col-md-4 col-sm-6">
				<label>Check-in</label>
				<div class="input-group">
					<input type="date" class="form-control border-radius border-right"/>


				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<label>Check-out</label>
				<div class="input-group">
					<input type="date" class="form-control border-radius border-right"/>

				</div>
			</div>

			<div class="col-md-4 col-sm-6">
			  <label>Room(s)</label>
			    <input class="form-group form-control border-radius" id="sel1" placeholder = "Rooms" type = "number" min="1" max="6">
			</div>
      <br>
      <div class="form-group form-control z-depth-0" style="border: none; margin-top: 16px;">
				
				<div class="btn btn-primary z-depth-0">
          Search
          <i class="fa fa-search"> </i>
				</div>
			</div>
    </div>
    <br><br>
</section>
  <br><br><br>
<div class="text-center">
    <h1 style="color: #5667ff;">Top Hotels To Visit</h1>
    <p class="formText">The trending travel hotels recommended by most of our customers.</p>
</div>
<div class="container-fluid">
  <div class="row" style="margin-bottom: 40px;">
  <div class="col-md-3" style="margin-bottom: 40px;">
    <div class="card">
      <img class="card-img-top" src="australia-beautiful-places-sydney-harbour.jpg">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example</p>
        <a href="#" class="btn btn-outline-success">Go somewhere</a>
      </div>
      </div>
    </div>
    <div class="col-md-3" style="margin-bottom: 40px;">
      <div class="card">
        <img class="card-img-top" src="australia-beautiful-places-sydney-harbour.jpg">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example</p>
          <a href="#" class="btn btn-outline-success">Go somewhere</a>
        </div>
        </div>
      </div>
      <div class="col-md-3" style="margin-bottom: 40px;">
        <div class="card">
          <img class="card-img-top" src="australia-beautiful-places-sydney-harbour.jpg">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example</p>
            <a href="#" class="btn btn-outline-success">Go somewhere</a>
          </div>
          </div>
        </div>
        <div class="col-md-3" style="margin-bottom: 40px;">
          <div class="card">
            <img class="card-img-top" src="australia-beautiful-places-sydney-harbour.jpg">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example</p>
              <a href="#" class="btn btn-outline-success">Go somewhere</a>
            </div>
            </div>
          </div>
    </div>
  </div>
    <footer class="page-footer font-small unique-color-dark">

      <div style="background-color: #4c35cc;">
        <div class="container">


          <div class="row py-4 d-flex align-items-center">


            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
              <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
            </div>



            <div class="col-md-6 col-lg-7 text-center text-md-right text-white">


              <a class="fb-ic">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g white-text mr-4"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram white-text"> </i>
              </a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row-->

        </div>
      </div>

      <!-- Footer Links -->
      <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">SAFFRON</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
              consectetur
              adipisicing elit.</p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Our Services</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a href="#!">Flight</a>
            </p>
            <p>
              <a href="#!">Hotel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a href="#!">Your Account</a>
            </p>
            <p>
              <a href="#!">Book Hotel</a>
            </p>
            <p>
              <a href="#!"></a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p>
              <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3" style="background-color: #e1e1e6;">&copy; 2020 Copyright |
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!--Bootstrap Script src-->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    	<script src="materialize/js/materialize.min.js"></script>
      <script src="bootstrap-4.0.0/assets/js/vendor/popper.min.js"></script>
      <script src="bootstrap-4.0.0/assets/js/vendor/jquery-slim.min.js"></script>
    	<script src="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
