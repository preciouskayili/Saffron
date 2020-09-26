<?php
    include("../../config/db_connect.php");
    if (isset($_GET['id'])) {

        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $runDelete = "DELETE FROM contact_information WHERE id = $id";

        mysqli_query($conn, $runDelete);

        header('Location: ../bookings.php');
    }
?>