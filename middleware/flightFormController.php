<?php
include('config/db_connect.php');

$flying_from = $flying_to = $departure_date = $arrival_date = $number_of_adults = $number_of_children = $flight_class = "";

$errors = array('flying_from' => '', 'flying_to' => '', 'departure_date' => '', 'arrival_date' => '', 'number_of_adults' => '', 'number_of_children' => '', 'flight_class' => '');

if(isset($_GET['submit'])) {
  if(!isset($_GET['arrival_date'])) {
    $flying_from = mysqli_real_escape_string($conn, $_GET['flying_from']);
    $flying_to = mysqli_real_escape_string($conn, $_GET['flying_to']);
    $departure_date = mysqli_real_escape_string($conn, $_GET['departure_date']);
    $number_of_adults = mysqli_real_escape_string($conn, $_GET['number_of_adults']);
    $number_of_children = mysqli_real_escape_string($conn, $_GET['number_of_children']);
    $flight_class = mysqli_real_escape_string($conn, $_GET['flight_class']);
    $sql = "SELECT * FROM 'flights' WHERE flying_from = '$flying_from' AND flying_to = '$flying_to' AND departure_date = '$departure_date' AND arrival_date = '$arrival_date' AND departure_date = '$departure_date' AND number_of_adults = '$number_of_adults' AND number_of_children = '$number_of_children' AND flight_class = '$flight_class'";

  } else {
    $flying_from = mysqli_real_escape_string($conn, $_GET['flying_from']);
    $flying_to = mysqli_real_escape_string($conn, $_GET['flying_to']);
    $departure_date = mysqli_real_escape_string($conn, $_GET['departure_date']);
    // $arrival_date = mysqli_real_escape_string($conn, $_GET['arrival_date']);
    $number_of_adults = mysqli_real_escape_string($conn, $_GET['number_of_adults']);
    $number_of_children = mysqli_real_escape_string($conn, $_GET['number_of_children']);
    $flight_class = mysqli_real_escape_string($conn, $_GET['flight_class']);

    $sql = "SELECT * FROM 'one-way' ";

  }
  $result = mysqli_query($conn, $sql);
}

?>
