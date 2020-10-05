<?php
    session_start();
    include("../../config/db_connect.php");
    if (isset($_POST['update_data'])){
        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $flyingFrom = mysqli_real_escape_string($conn, $_POST['update_flying_from']);
            $flyingTo = mysqli_real_escape_string($conn, $_POST['update_flying_to']);
            $departureDate = mysqli_real_escape_string($conn, $_POST['update_departure_date']);
            $arrivalDate = mysqli_real_escape_string($conn, $_POST['update_arrival_date']);
            $numberOfAdults = mysqli_real_escape_string($conn, $_POST['update_adults']);
            $numberOfChildren = mysqli_real_escape_string($conn, $_POST['update_children']);
            $flightClass = mysqli_real_escape_string($conn, $_POST['update_travel_class']);
            $departureTime = mysqli_real_escape_string($conn, $_POST['update_departure_time']);
            $arrivalTime = mysqli_real_escape_string($conn, $_POST['update_arrival_time']); 
            $flightPrice = mysqli_real_escape_string($conn, $_POST['update_flight_price']);
    
            $sql = "UPDATE `flights` SET `flying_from`  = '$flyingFrom', `flying_to` = '$flyingTo',
            `departure_date` = '$departureDate', `arrival_date` ='$arrivalDate', `number_of_adults` = '$numberOfAdults', `number_of_children` = '$numberOfChildren',  
            `flight_class` = '$flightClass', `departure_time` = '$departureTime',
            `arrival_time` = '$arrivalTime', `flight_price` = '$flightPrice' WHERE `id` = $id";
    
            if ($conn -> query($sql)) {
                header('Location: ../flights.php');
            }
        }
    }
?>