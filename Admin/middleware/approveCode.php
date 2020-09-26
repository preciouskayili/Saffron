<?php 

    include("../../config/db_connect.php");

    if(isset($_GET['id'])) {

        $id = $_GET['id'];

        $status = "Approved";

        $approveQuery = "UPDATE `contact_information` SET `booking_status` = 'Approved' WHERE `contact_information`.`id` = $id";
        
        $conn->query($approveQuery);

        header('Location: ../bookings.php');

    }
?>