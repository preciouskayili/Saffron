<?php
    include("db_connect.php");

    $options = "SELECT * FROM `countries`";

    $optionArray = $conn -> query($options);

    $countries = mysqli_fetch_all($optionArray, MYSQLI_ASSOC);

    if (isset($_POST['submitCountry'])) {
        $newCountry = mysqli_real_escape_string($conn,$_POST['newCountry']);

        $addCountry = "INSERT INTO countries(country) VALUES('$newCountry')";

        $response = $conn -> query($addCountry);

        $countryRows = mysqli_num_rows($optionArray);
        if ($countryRows > 0) {


          header('Location: flights.php');

        } else {
          $exist = "Country already exists";
        }


      }
?>