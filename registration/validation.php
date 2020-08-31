<?php

    session_start();
    $_SESSION['username'] = 'Account';
    $con = mysqli_connect("localhost", "presh","1234", "saffron");

    $name = $_POST['username'];
    $pass = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$pass'";
    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if($num > 0){
       echo "Your Credentials doesn't match our records";
    }else{
        $_SESSION['username'] = $name;
        // header('Location:index.php');

    }
?>