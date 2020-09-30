<?php
    $name = $surname = $date_of_birth = $phone_number = $email = $gender = "";
    // connect to the database
    include('config/db_connect.php');

    session_start();

    if (isset($_GET['id'])) {

    $flight_id = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "SELECT * FROM flights WHERE id = $flight_id";

    $result= $conn->query($query);

    $insertArray = mysqli_fetch_assoc($result);

    $_SESSION['flight_id'] = $insertArray['id'];

    $_SESSION['flying_from'] = $insertArray['flying_from'];

    $_SESSION['flying_to'] = $insertArray['flying_to'];
    
    }

    if (isset($_GET['submit'])) {

        $flight_id = $_SESSION['flight_id'];

        $flying_from = $_SESSION['flying_from'];

        $flying_to = $_SESSION['flying_to'];

        // escape sql chars
        $name = mysqli_real_escape_string($conn, $_GET['name']);
        
        $surname = mysqli_real_escape_string($conn, $_GET['surname']);

        $phone_number = mysqli_real_escape_string($conn, $_GET['phone_number']);

        $email = mysqli_real_escape_string($conn, $_GET['email']);

        $gender = mysqli_real_escape_string($conn, $_GET['gender']);
        
        $date_of_birth = mysqli_real_escape_string($conn, $_GET['date_of_birth']);
        
        $sql = "INSERT INTO contact_information(flight_id,name,surname,phone_number,email,gender,date_of_birth,flying_from,flying_to,status) VALUES('$flight_id','$name','$surname','$phone_number','$email','$gender','$date_of_birth','$flying_from', '$flying_to', 'Pending')";
                
        // save to db and check
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: index.php');
            session_unset();
        } else {
            echo 'query error: '. mysqli_error($conn);
        }
    }
?>
