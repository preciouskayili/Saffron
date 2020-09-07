<?php include 'middleware/flightFormController.php'; ?>
<?php include 'middleware/searchController.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Saffron</title>
  <!--Font & Stylesheet-->

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="css\mdb.css">
  <link rel="stylesheet" href="fontawesome-free-5.10.2-web/fontawesome-free-5.10.2-web/css/all.css">
  <link rel="shortcut icon" href="imgs\fav.png" type="image">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
  <!-- Bootstrap core CSS -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Material Design Bootstrap -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet"> -->
  <!-- Bootstrap Core css and Font-Awesome-->
  <!-- <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet"> -->
</head>
<script>
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("dark").style.backgroundColor = "black";
      document.getElementById("dark").classList.remove("navbar-transparent");
      // document.getElementById("dark").classList.style.boxShadow = "none";
      // document.getElementById("logo").style.fontSize = "25px";
      document.getElementById("dark").style.boxShadow = "1px 1px 3px 4px #83808079";
    } else {
      document.getElementById("dark").style.backgroundColor = "#779add";
      document.getElementById("dark").style.boxShadow = "none";
      // document.getElementById("logo").style.fontSize = "35px";
    }
  }
</script>
<body onload="populateSelect()" id="body">
      <nav class="navbar navbar-dark sticky-top scrolling-navbar" id="dark" style="background-color: #779add; box-shadow: none;">
        <a href="index.php" class="navbar-brand">Saffron</a>
        <div class="d-flex mx-auto">
          <i class="fab fa-facebook text-white" style="font-size: 20px; margin-right: 20px;"></i>
          <i class="fab fa-instagram text-white" style="font-size: 20px; margin-right: 20px;"></i>
          <i class="fab fa-twitter text-white" style="font-size: 20px; margin-right: 20px;"></i>
          <i class="fab fa-whatsapp text-white" style="font-size: 20px; margin-right: 20px;"></i>
          <i class="fab fa-linkedin text-white" style="font-size: 20px; margin-right: 20px;"></i>
          <i class="fa fa-envelope text-white" style="font-size: 20px;"></i>
        </div>
      </nav>
      <div class="mask">
        <div class="bg-img" id="bgImg" style="padding-top: 120px;">
          <div class="container" style="display: block;">
            <div class="row">
              <div class="col-md-5">
                <h1 id="makeWhite2">Make Your Reservation</h1>
                <h4 class="text-white">The home of the most affordable <b style="border: 1px solid white; padding: 5px; background-color: black; font-size:20px;">Flights</b></h4>
                <p class="text-bright">Lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet recrtum lactum Cupiditate laboriosam numquam at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptatum ea a fugiat libero, dignissimos cumque veniam qui ratione dolor odit nobis. Accusantium delectus velit soluta quibusdam dolore alias vel.</p>
                <a hewf="#" class="btn btn-md btn-outline-white btn-dark">Get started</a>
                <a hewf="#" class="btn btn-md btn-outline-white btn-dark">Need help ?</a>
              </div>
              <div class="col-md-7 col-md-offset-1">
                <div class="card" style="border-radius: 0px; padding: 15px 15px 15px 15px;">
                  <form action="index.php" method="post">
                    <div class="form-group">
                      <div class="form-checkbox">
                        <input type="radio" id="roundtrip" name="flight-type" checked onclick="deleteInput()"> One Way
                        <label for="one-way">
                          <input type="radio" id="one-way" name="flight-type" onclick="restoreInput()"> Round trip
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span class="form-label text-muted">Flying from</span>
                          <select class="form-control" name="flying_from" placeholder="City or airport" id="from" onchange="populateSecond()" style="border-radius: 0px;">
                            <!-- <option disabled selected>-- Choose country --</option> -->
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <span class="form-label text-muted">Flying to</span>
                          <select class="form-control" name="flying_to" placeholder="City or airport" id="to" style="border-radius: 0px;">
                            <!-- <option disabled selected>-- Choose country --</option> -->
                          </select>
                        </div>
                      </div>
                    <!-- </div> -->
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label text-muted">Departing</span>
                        <input class="form-control" id="departureDate" name="departure_date" type="date">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <span class="form-label text-muted">Returning</span>
                        <input class="form-control" name="arrival_date" type="date" id="deleteItem" disabled>
                      </div>
                    </div>
                  </div>		
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <span class="form-label text-muted">Adults (18+)</span>
                        <select class="form-control" id="numberOfAdults" name="number_of_adults" style="border-radius: 0px;">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <span class="form-label text-muted">Children</span>
                        <select class="form-control" id="numberOfChildren" name="number_of_children" style="border-radius: 0px;">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <span class="form-label text-muted">Travel class</span>
                        <select class="form-control" id="flightClass" name="flight_class" style="border-radius: 0px;">
                          <option>Economy class</option>
                          <option>Business class</option>
                          <option>Premium class</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <button class="btn peach-gradient" style="border-radius: 0px;" type="submit" name="submit">Show flights</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <br>
      <div class="container">
        <div class="row">
          <?php if(isset($_POST['submit'])) : ?>
          <?php
            if($result == TRUE) :
              while ($row = mysqli_fetch_array($result)) :
          ?>
          <div class="col-md-3">
            <div class="card mx-auto">
              <div class="card-body">
                <div class="text-center">
                  <h5><?php echo $row['departure_time'];?></h5>
                  <p class="text-muted"><?php echo $row['flying_from'];?></p>
                  <p class="text-muted"><?php echo $row['departure_date'];?></p>
                </div>
                <div class="text-center text-white">
                  <i class="fa fa-plane bg-primary" aria-hidden="true" style="width: 40px; height: 40px; font-size: 20px; border-radius: 50%; padding-top: 10px;"></i>
                </div>
                <div class="text-center">
                  <h5><?php echo $row['arrival_time'];?></h5>
                  <p class="text-muted"><?php echo $row['flying_to'];?></p>
                  <?php if (isset($_POST['arrival_date'])) : ?>
                  <p class="text-muted"><?php echo $row['arrival_date'];?></p>
                  <?php else : //Do nothing ?>
                  <?php endif; ?>
                </div>
                <div class="text-center">
                  <p class="text-primary"><?php echo $row['flight_class'];?></p>
                  <p class="text-muted" style="font-size: 15px;"><?php echo $row['number_of_adults']; ?> Adults, <?php echo $row['number_of_children']; ?> Children</p>
                </div>
                
                <a class="btn btn-white btn-outline-dark waves-effect btn-sm d-block mx-auto" href="flightDetails.php?id=<?php echo $row['id']; ?>">
                  Book Flight  <i class="fa fa-plane-departure"></i>
                </a>
              </div>
            </div>
            <br>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
      <?php if (isset($_POST['submit'])) : ?>
      <?php if (mysqli_num_rows($result) == 0) : ?>
      <div class="container" id="deleteEmptyResult">
        <div class="col-md-6 mx-auto">
          <div class="card" style="padding: 15px;">
            <button type="button" class="close text-danger" id="deleteThis" aria-label="Close" style="display: flex;">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="text-center text-primary"><?php echo "No search results"; ?></h4>
            <p class="text-center text-muted">Try checking your keywords and searching again</p>
          </div>
        </div>
        <br><br><br>
      </div>
      </div>
    </div>
  </div>   
  <?php endif; ?>
  <?php endif; ?>
  <div class="container-fluid bg-light py-5 px-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="border-radius: 0px; padding: 20px; margin-bottom: 10px;">
            <h1 class="text-muted text-center">Card</h1>
            <p class="text-muted text-center">Text subtitltle rectrum lactum for the text lorem ipsum dolor sit amet rectrum lactum 
            </p>
            <button class="btn btn-md btn-grey waves-effect">Book</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="border-radius: 0px; padding: 20px; margin-bottom: 10px;">
            <h1 class="text-muted text-center">Card</h1>
            <p class="text-muted text-center">Text subtitltle rectrum lactum for the text lorem ipsum dolor sit amet rectrum lactum 
            </p>
            <button class="btn btn-md btn-grey waves-effect">Book</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="border-radius: 0px; padding: 20px;">
            <h1 class="text-muted text-center">Card</h1>
            <p class="text-muted text-center">Text subtitltle rectrum lactum for the text lorem ipsum dolor sit amet rectrum lactum 
            </p>
            <button class="btn btn-md btn-grey waves-effect">Book</button>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container" style="margin: 15px;">
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control" style="border-right: 0px;" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" style="box-shadow: none;">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
  <?php include('templates/footer.php') ?>
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- Bootstrap tooltips -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
  <!-- MDB core JavaScript -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script> -->
  <script type="text/javascript" src="js/script.js"></script> 
</body>
</html>