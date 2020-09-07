<?php
    include("../config/db_connect.php");

    $sql = "SELECT * FROM flights ORDER BY created_at";
    $query = "SELECT * FROM one_way ORDER BY created_at";

    $result = mysqli_query($conn,$sql);
    $secondResult = mysqli_query($conn,$query);

  if (isset($_POST['save'])) {

    $flying_from = mysqli_real_escape_string($conn, $_POST['flying_from']);
    $flying_to = mysqli_real_escape_string($conn, $_POST['flying_to']);
    $departure_date = mysqli_real_escape_string($conn, $_POST['departure_date']);
    $arrival_date = mysqli_real_escape_string($conn, $_POST['arrival_date']);
    $adults = mysqli_real_escape_string($conn, $_POST['adults']);
    $children = mysqli_real_escape_string($conn, $_POST['children']);
    $travel_class = mysqli_real_escape_string($conn, $_POST['travel_class']);
    $departure_time = mysqli_real_escape_string($conn, $_POST['departure_time']);
    $arrival_time = mysqli_real_escape_string($conn, $_POST['arrival_time']);
    $flight_price = mysqli_real_escape_string($conn, $_POST['flight_price']);
    

    $insurance_price = 10/100 * $flight_price;
    $tax_price = 15/100 * $flight_price;
    $created_by = "Admin";
    $query3 = "INSERT INTO flights (created_by,flying_from,flying_to,departure_date,arrival_date,number_of_adults,number_of_children,flight_class,departure_time,arrival_time,flight_price,insurance_price,tax_price) VALUES('$created_by','$flying_from','$flying_to','$departure_date','$arrival_date','$adults','$children','$travel_class','$departure_time','$arrival_time','$flight_price','$insurance_price','$tax_price')";

    mysqli_query($conn,$query3);
    header('Location: flights.php');
  }

  if (isset($_POST['saveTwo'])) {

  $flying_from2 = mysqli_real_escape_string($conn, $_POST['flying_from2']);
  $flying_to2 = mysqli_real_escape_string($conn, $_POST['flying_to2']);
  $departure_date2 = mysqli_real_escape_string($conn, $_POST['departure_date2']);
  $adults2 = mysqli_real_escape_string($conn, $_POST['adults2']);
  $children2 = mysqli_real_escape_string($conn, $_POST['children2']);
  $travel_class2 = mysqli_real_escape_string($conn, $_POST['travel_class2']);
  $departure_time2 = mysqli_real_escape_string($conn, $_POST['departure_time2']);
  $flight_price2 = mysqli_real_escape_string($conn, $_POST['flight_price2']);
  
  $insurance_price2 = 10/100 * $flight_price2;
  $tax_price2 = 15/100 * $flight_price2;
  $created_by = "Admin";
  $query4 = "INSERT INTO one_way (created_by,flying_from,flying_to,departure_date,adults,children,travel_class,departure_time,flight_price,insurance_price,tax_price) VALUES ('$created_by','$flying_from2','$flying_to2','$departure_date2','$adults2','$children2','$travel_class2','$departure_time2','$flight_price2','$insurance_price2','$tax_price2')";

  mysqli_query($conn,$query4);
  header('Location: flights.php');
}

?>