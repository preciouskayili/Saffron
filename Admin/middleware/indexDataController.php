<?php 
    include('../config/db_connect.php');
    $sql = "SELECT * FROM contact_information";
    $result = $conn -> query($sql);

    $sql2 = "SELECT * FROM flights";
    $result2 = $conn -> query($sql2);

    $sql3 = "SELECT * FROM one_way";
    $result3 = $conn -> query($sql3);

    $numberOfBookings = mysqli_num_rows($result);
    $numberOfFlights = mysqli_num_rows($result2);
    $numberOfOneWay = mysqli_num_rows($result3);

?>