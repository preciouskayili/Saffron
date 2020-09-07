<?php
    include('../config/db_connect.php');

    $sql = "SELECT * FROM contact_information";

    $result = $conn->query($sql);
?>