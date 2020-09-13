<!-- 
  ????????????? READ THIS!!!! ?????????
  DONT NOT DELETE ANY CODE SOME OF THEM WORK AND I DONT KNOW HOW
  ALSO THE SELECT IS BEING POPULATED FROM THE JAVASCRIPT SO
  IF YOU REALLY ARE A FOOL DELETE THIS. THANKS FOR READING.
 -->
<?php include("middleware/flightsDataController.php"); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed" onload="populateSelect()">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <div class="dropdown-divider"></div>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <div class="image">
        <div class="text-white">
          <i class="text-center fa fa-plane bg-primary" aria-hidden="true" style="width: 40px; height: 40px; font-size: 20px; border-radius: 50%; padding-top: 10px;"></i>
          <span class="brand-text font-weight-light">Saffron</span>
        </div>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="flights.php" class="nav-link active">
              <i class="nav-icon fa fa-plane"></i>
              <p>
                Flights
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="bookings.php" class="nav-link">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Bookings
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
        </ul>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Flights</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Flights</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
	</div>
	<!-- Edit Modal -->
	<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Round trip</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="flights.php" method="post" id="saveForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Flying from</label>
                    <select class="form-control select2" name="flying_from" style="width: 100%;" id="from" onchange="populateSecond()">
                          
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Flying to</label>
                    <select class="form-control select2" name="flying_to" style="width: 100%;" id="to">
                          
                    </select>
                  </div>
                </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Departure date</label>
                        <input type="date" class="form-control" name="departure_date" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Arrival date</label>
                        <input type="date" class="form-control" name="arrival_date" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                          <label>Adults(18+)</label>
                          <select class="form-control select2" name="adults" style="width: 100%;">
                              <option selected="selected">1</option>
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
                            <label>Children</label>
                            <select class="form-control select2" name="children" style="width: 100%;">
                                <option selected="selected">1</option>
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
                            <label>Travel class</label>
                            <select class="form-control select2" name="travel_class" style="width: 100%;">
                                <option selected="selected">Economy class</option>
                                <option>Business class</option>
                                <option>Premium class</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Departure time</label>
                        <input type="text" class="form-control" name="departure_time" id="exampleInputPassword1" placeholder="e.g 8:00 pm">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Arrival time</label>
                        <input type="text" class="form-control" name="arrival_time" id="exampleInputPassword1" placeholder="e.g 8:00 am">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Flight price</label>
                        <input type="text" class="form-control" name="flight_price" id="exampleInputPassword1" placeholder="Flight price">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-primary" name="save" form="saveForm">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <!-- /.content-header -->
    <script>
      var countries = [
        "Ghana",
        "USA",
        "London",
        "UK",
        "Cameron",
        "Dubai",
        "Nigeria",
        "Turkey",
        "Canada",
      ];
      function populateSelect() {
        var html = "";
        html += "<option disabled>-- Choose country --</option>";
        for (let index = 0; index < countries.length; index++) {
          const element = countries[index];
          html += "<option value='" + element + "'>" + element + "</option>";
        }

        $("#from").html(html);
        $("#fromTwo").html(html);
      }

      function populateSecond() {
        var fromValue = document.getElementById("from").value;
        var fromValueTwo = document.getElementById("fromTwo").value;
        var html = "";
        html += "<option disabled>-- Choose country --</option>";
        for (let index = 0; index < countries.length; index++) {
          const element = countries[index];
          if (fromValue != element && fromValueTwo != element) {
            html += "<option value='" + element + "'>" + element + "</option>";
          }
        }
        $("#to").html(html);
        $("#toTwo").html(html);
      }
    </script>
    <div class="container">
      <!-- /.row -->
		  <button class="btn btn-primary btn-md d-block ml-auto" data-toggle="modal" data-target="#modal-default" style="margin-bottom: 22px;"><i class="fas fa-plus"></i> Add Flight</button>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Round trips</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Flying from</th>
                      <th>Flying to</th>
                      <th>Departing</th>
                      <th>Returning</th>
                      <th>Adults</th>
                      <th>Children</th>
                      <th>Travel class</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <?php $id = $row['id']; ?>
                    <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $row['flying_from']; ?></td>
                      <td><?php echo $row['flying_to']; ?></td>
                      <td><?php echo $row['departure_date']; ?></td>
                      <td><?php echo $row['arrival_date']; ?></td>
                      <td><?php echo $row['number_of_adults']; ?></td>
                      <td><?php echo $row['number_of_children']; ?></td>
                      <td><?php echo $row['flight_class']; ?></td>
                      <td>
                        <form action="flights.php" method="post" id="deleteRow">
                          <input type="hidden" name="id_to_delete" value="<?php echo $row['id']; ?>"></input>
                        </form>
                        <button class="btn btn-sm btn-secondary"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete_<?php echo $id; ?>" name="deleteTableRow"><i class="fas fa-trash"></i></button>
                      </td>
                      <div class="modal fade" id="delete_<?php echo $id; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content bg-danger">
                            <div class="modal-header">
                              <h4 class="modal-title">Delete</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Are you sure you want to delete this!!</p>
                              <form action="flights.php" method="post" id="formDelete">
                                
                              </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                              <button type="submit" class="btn btn-outline-light" name="deleteButton" form="formDelete">Yes</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                    </tr>
                  <?php endwhile; ?>
                    <?php
                      if (isset($_POST['deleteButton'])) {
                        $queryDelete = "DELETE FROM flights WHERE id = $id";
                        mysqli_query($conn,$queryDelete);
                        // header('Location: flights.php');
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- /.row -->
    <div class="modal fade" id="modal-sm">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="flights.php" method="post" id="secondSaveForm">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Flying from</label>
                        <select class="form-control select2" name="flying_from2" style="width: 100%;" id="fromTwo" onchange="populateSecond()">
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Flying to</label>
                        <select class="form-control select2" name="flying_to2" style="width: 100%;" id="toTwo">
                            
                        </select>
                    </div>
                </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Departure date</label>
                        <input type="date" class="form-control" name="departure_date2" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Adults(18+)</label>
                          <select class="form-control select2" name="adults2" style="width: 100%;">
                              <option selected="selected">1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Children</label>
                            <select class="form-control select2" name="children2" style="width: 100%;">
                                <option selected="selected">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Travel class</label>
                            <select class="form-control select2" name="travel_class2" style="width: 100%;">
                                <option selected="selected">Economy class</option>
                                <option>Business class</option>
                                <option>Premium class</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Departure time</label>
                        <input type="text" class="form-control" name="departure_time2" id="exampleInputPassword1" placeholder="e.g 8:00 pm">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Flight price</label>
                        <input type="text" class="form-control" name="flight_price2" id="exampleInputPassword1" placeholder="Flight price">
                      </div>
                    </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" name="saveTwo" form="secondSaveForm">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
	<div class="container">
		<button class="btn btn-primary btn-md d-block ml-auto" data-toggle="modal" data-target="#modal-sm" style="margin-bottom: 22px;"><i class="fas fa-plus"></i> Add Flight</button>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">One Way</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Flying from</th>
                      <th>Flying to</th>
                      <th>Departing</th>
                      <th>Returning</th>
                      <th>Children</th>
                      <th>Travel class</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while ($secondRow = mysqli_fetch_assoc($secondResult)) : ?>
                    <tr>
                      <td><?php echo $secondRow['id']; ?></td>
                      <td><?php echo $secondRow['flying_from']; ?></td>
                      <td><?php echo $secondRow['flying_to']; ?></td>
                      <td><?php echo $secondRow['departure_date']; ?></td>
                      <td><?php echo $secondRow['adults']; ?></td>
                      <td><?php echo $secondRow['children']; ?></td>
                      <td><?php echo $secondRow['travel_class']; ?></td>
                      <td>
                        <button class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></button>
                        <button class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" data-dismiss="modal" aria-label="Close"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
	</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
