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
<body onload="populateSelect()" id="body" data-spy="scroll" data-target=".navbar">
  <nav class="navbar navbar-dark sticky-top" style="background-color: rgb(119, 154, 221);">
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
  <div class="bg-img">
    <div class="container">
      <div class="row">
        <div class="col-md-5 marginal">
          <h1 id="makeWhite2" class="h1 responsive">Make Your Reservation</h1>
          <h4 class="text-white" class="h4 responsive">The home of the most affordable <strong>Flights</strong></h4>
          <p class="text-bright">Lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet recrtum lactum Cupiditate laboriosam numquam at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptatum ea a fugiat libero, dignissimos cumque veniam qui ratione dolor odit nobis. Accusantium delectus velit soluta quibusdam dolore alias vel.</p>
          <a href="#" class="btn btn-md btn-white btn-dark">Need help ?</a>
          <a href="#" class="btn btn-md btn-outline-white btn-dark">Get started</a>
        </div>
        <div class="col-md-7 col-md-offset-1 marginal">
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
  <?php if(isset($_POST['submit'])) : ?>
  <div class="container">
    <div class="row">
      <a href="#result" class="text-white d-flex mx-auto"><i class="fa fa-arrow-down" style="font-size: 20px; padding-top: 60px;" aria-hidden="true"></i></a>
    </div>
    <p class="text-center text-white" style="font-size: 20px;">See search result</p>
  </div>
  <?php endif; ?>
</div>
  <br>
  <div id="result">
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
                <?php if(isset($row['arrival_date'])) : ?>
                <h5><?php echo $row['arrival_time'];?></h5>
                <?php else : //Display nothing ?>
                <?php endif; ?>
                <p class="text-muted"><?php echo $row['flying_to'];?></p>
                <?php if (isset($row['arrival_date'])) : ?>
                <p class="text-muted"><?php echo $row['arrival_date'];?></p>
                <?php else : //Do nothing ?>
                <?php endif; ?>
              </div>
              <div class="text-center">
                <?php if(isset($row['arrival_date'])) : ?>
                <p class="text-primary"><?php echo $row['flight_class'];?></p>
                <?php else : ?>
                <p class="text-primary"><?php echo $row['travel_class'];?></p>
                <?php endif; ?>
                <?php if(isset($row['arrival_date'])) : ?>
                <p class="text-muted" style="font-size: 15px;"><?php echo $row['number_of_adults']; ?> Adults, <?php echo $row['number_of_children']; ?> Children</p>
                <?php else : ?>
                <p class="text-muted" style="font-size: 15px;"><?php echo $row['adults']; ?> Adults, <?php echo $row['children']; ?> Children</p>
                <?php endif; ?>
              </div>
              <?php if (isset($row['arrival_date'])) : ?> 
              <a class="btn btn-white btn-outline-dark waves-effect btn-sm d-block mx-auto" href="flightDetails.php?id=<?php echo $row['id']; ?>">
                Book Flight  <i class="fa fa-plane-departure"></i>
              </a>
              <?php else : ?>
              <a class="btn btn-white btn-outline-dark waves-effect btn-sm d-block mx-auto" href="oneWayDetails.php?id=<?php echo $row['id']; ?>">
                Book Flight  <i class="fa fa-plane-departure"></i>
              </a>
              <?php endif; ?>

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
            <div class="card-body">
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
  </div>
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