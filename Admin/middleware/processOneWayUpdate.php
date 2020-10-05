<?php
    include("../../config/db_connect.php");
    if (isset($_POST['update_second'])){
        if (isset($_GET['secondId'])) {

            $secondId = $_GET['secondId'];
            $flyingFrom = mysqli_real_escape_string($conn, $_POST['flying_from_update_two']);
            $flyingTo = mysqli_real_escape_string($conn, $_POST['flying_to_update_two']);
            $departureDate = mysqli_real_escape_string($conn, $_POST['departure_date_update_two']);
            $numberOfAdults = mysqli_real_escape_string($conn, $_POST['adults_update_two']);
            $numberOfChildren = mysqli_real_escape_string($conn, $_POST['children_update_two']);
            $flightClass = mysqli_real_escape_string($conn, $_POST['travel_class_update_two']);
            $departureTime = mysqli_real_escape_string($conn, $_POST['departure_time_update_two']);
            $flightPrice = mysqli_real_escape_string($conn, $_POST['flight_price_update_two']);
    
            $sql = "UPDATE `one_way` SET flying_from = '$flyingFrom', flying_to = '$flyingTo' WHERE id = $secondId";
    
            if ($conn -> query($sql)) {
                header('Location: ../flights.php');
            }
        }
    }
?>