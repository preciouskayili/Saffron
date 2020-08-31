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

<body onload="populateSelect()" id="body">
  <nav class="navbar navbar-dark sticky-top scrolling-navbar" id="dark" style="background-color: #779add; box-shadow: none;">
    <a href="index.php" class="navbar-brand">Saffron</a>
    <button class="btn color-unique btn-outline-dark btn-sm" title="High" onclick="darkMode()" id="darkButton"><i class="fas fa-moon"></i></button>
    <button class="btn color-unique btn-outline-white btn-sm display" onclick="lightMode()" id="lightButton" style="display: none;"><i class="fas fa-sun text-warning"></i></button>
    <form action="index.php" method="post" class="form-inline ml-auto">
      <div class="md-form input-group my-0">
        <input type="text" name="q" id="searchDb" placeholder="Quick flight search" class="form-control" style="font-size: 13px;">
        <div class="input-group-prepend">
          <button class="input-group-text text-white" name="instantSearch" id="basic-addon11" style="background-color: transparent; border: 0px; margin-left: -25px; font-size: 13px;" title="Search"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </form>
  </nav>
  <?php if (isset($_POST['instantSearch'])) : ?>
  <?php if ($result == TRUE) : ?>
  <div class="col-md-3 d-block ml-auto fixed-top" id="deleteThisItem">
    <div class="card" style="z-index: 99999; padding: 15px; border-radius: 0px; border: 1px solid black;">
    <button type="button" id="delete" class="close text-danger d-block ml-auto" aria-label="Close" style="display: flex;">
      <span aria-hidden="true">&times;</span>
  </button>
    <?php while ($resultArray  = mysqli_fetch_assoc($result)) : ?>
    <div class="myHover">
      <p><?php echo $resultArray['flying_from']; ?> <?php echo $resultArray['flying_to']; ?></p>
      <p class="text-muted" style="font-size: 12px;"><i><?php echo $resultArray['departure_date']; ?></i> <i><?php echo $resultArray['arrival_date']; ?></i></p>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
  <?php //else : ?>
  <?php if (mysqli_num_rows($result) == 0) : ?>
    <div class="col-md-3 d-block ml-auto fixed-top" id="deleteItemTwo">
      <div class="card"  style="z-index: 99999; padding: 15px; border-radius: 0px; border: 1px solid black;">
        <button type="button" class="close text-danger d-block ml-auto" title="Exit" aria-label="Close" style="display: flex;" onclick="remove()">
          <span aria-hidden="true">&times;</span>
        </button>
        <p>No search result</p>
      </div>
    </div>
  <?php endif; ?>
  <?php endif; ?>
  <div class="mask">
    <div class="bg-img" id="bgImg" style="margin-top: -200px; padding-top: 300px;">
      <div class="container" style="display: block;">
        <div class="row">
          <div class="col-md-5">
            <h1 id="makeWhite2">Make Your Reservation</h1>
            <p class="text-bright">Lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet recrtum lactum Cupiditate laboriosam numquam at. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam voluptatum ea a fugiat libero, dignissimos cumque veniam qui ratione dolor odit nobis. Accusantium delectus velit soluta quibusdam dolore alias vel.</p>
          </div>
          <div class="col-md-7 col-md-offset-1">
            <div class="card" style="border-radius: 0px; padding: 15px 15px 15px 15px;">
              <form action="index.php" method="get">
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
                    <input class="form-control" name="departure_date" type="date">
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
                    <select class="form-control" name="number_of_adults" style="border-radius: 0px;">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <span class="form-label text-muted">Children</span>
                    <select class="form-control" name="number_of_children" style="border-radius: 0px;">
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
                    <select class="form-control" name="flight_class" style="border-radius: 0px;">
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
        <?php if(isset($_GET['submit'])) : ?>
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
                  <?php if(empty($arrival_date)) : ?>
                  <p class="text-muted"><?php echo $row['arrival_date'];?></p>
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
            <?php if (mysqli_num_rows($result) == 0) : ?>
              <div class="container" id="delete">
                <div class="col-md-6 mx-auto">
                  <div class="card" style="padding: 15px;">
                    <button type="button" class="close text-danger" aria-label="Close" style="display: flex;" onclick="deleteItem()">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="text-center text-primary"><?php echo "No search results"; ?></h4>
                    <p class="text-center text-muted">Try checking your keywords and searching again</p>
                  </div>
                </div>
              <br><br><br>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>          
    <?php endif; ?>
    <div class="container flex-center">
        <div class="card text-center">
            <div class="card-body" id="card">
              <h1 class="card-title">Card</h1>
              <button class="btn btn-unique" id="delete">Delete</button>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusamus eius quisquam architecto mollitia magni numquam veritatis ea dignissimos.</p>
            </div>
        </div>
    </div>
    <div class="container">
    <br>
      <h1 class="text-center" id="makeWhite">Top Locations</h1>
      <div class="row">
        <div class="col-md-4">
          <br><br>
          <div class="card">
            <img src="imgs/top_place1.jpg" alt="" class="top-pic" style="height: 350px;">
            <h3 class="text-center text-primary display-hover" style="margin-top: -175px; z-index:1;">North east London</h3>
          </div>
        </div>
        <div class="col-md-4">
          <br><br>
          <div class="card">
            <img src="imgs/top_place2.jpg" alt="" class="top-pic" style="height: 350px;">
          </div>
        </div>
        <div class="col-md-4">
          <br><br>
          <div class="card">
            <img src="imgs/top_place3.jpg" alt="" class="top-pic" style="height: 350px;">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <br><br>
          <div class="card">
            <img src="imgs/top_place2.jpg" alt="" class="top-pic" style="height: 350px;">
          </div>
        </div>
        <div class="col-md-4">
          <br><br>
          <div class="card">
            <img src="imgs/top_place3.jpg" alt="" class="top-pic" style="height: 350px;">
          </div>
        </div>
        <div class="col-md-4">
          <br><br>
          <div class="card">
            <img src="imgs/top_place1.jpg" alt="" class="top-pic" style="height: 350px;">
          </div>
        </div>
      </div>
    </div>
  <div class="container">
    <section class="text-center my-5 p-1">
      <h2 class="h1-responsive font-weight-bold my-5" id="makeWhite1">Our Customers Say...</h2>
      <p class="dark-grey-text w-responsive mx-auto mb-5" id="makeWhite">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
        eum porro a pariatur veniam.</p>
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
          <div class="card testimonial-card">
            <div class="card-up info-color"></div>
            <div class="avatar mx-auto white">
              <img src="imgs/user2-160x160.jpg" class="rounded-circle img-fluid">
            </div>
            <div class="card-body">
              <!--Name-->
              <h4 class="font-weight-bold mb-4">John Doe</h4>
              <hr>
              <!--Quotation-->
              <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet eos
                adipisci, consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
          <div class="card testimonial-card">
            <div class="avatar mx-auto white">
              <img src="imgs/user2-160x160.jpg" class="rounded-circle img-fluid">
            </div>
            <div class="card-body">
              <h4 class="font-weight-bold mb-4">Anna Aston</h4>
              <hr>
              <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
                maiores repudiandae mollitia.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card testimonial-card">
            <div class="avatar mx-auto white">
              <img src="imgs/user2-160x160.jpg" class="rounded-circle img-fluid">
            </div>
            <div class="card-body">
              <h4 class="font-weight-bold mb-4">Maria Kate</h4>
              <hr>
              <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe officiis
                ab aliquam repellat rem unde ducimus.</p>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
</div>
  </section>
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