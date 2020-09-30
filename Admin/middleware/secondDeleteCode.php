<?php
    include("../../config/db_connect.php");
    if (isset($_GET['secondId'])) {
        $secondId = mysqli_real_escape_string($conn, $_GET['secondId']);
        $runDelete = "DELETE FROM one_way WHERE id = $secondId";

        if ($conn -> query($runDelete)) {
            header('Location: ../flights.php');
        }
    }
?>