<?php
    include("db_connect.php");

    $options = "SELECT * FROM `countries`";

    $optionArray = $conn -> query($options);

    $countries = mysqli_fetch_all($optionArray, MYSQLI_ASSOC);

    if (isset($_POST['submitCountry'])) {

        $newCountry = mysqli_real_escape_string($conn,$_POST['newCountry']);

        $countryRows = mysqli_num_rows($optionArray);

        $addCountry = "INSERT INTO countries(country) VALUES('$newCountry')";

        $conn -> query($addCountry);

        header('Location: flights.php');
      


    }
?>