<?php
    include("../../config/db_connect.php");
    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $runDelete = "DELETE FROM flights WHERE id = $id";

        if ($conn -> query($runDelete)) {
            header('Location: ../flights.php');
        }
    }
?>