<?php
    include('config/db_connect.php');

    if (isset($_POST['instantSearch'])) {
        $searchQuery = mysqli_real_escape_string($conn,$_POST['q']);
        $sql = "SELECT * FROM flights WHERE '$searchQuery' = flying_from OR '$searchQuery' = flying_to";

        $result = mysqli_query($conn, $sql);
        

        

        // print_r($resultArray);

        if (mysqli_num_rows($result) == 0) {
            // No search result
            // echo "No search result";
        }
    }
        

?>