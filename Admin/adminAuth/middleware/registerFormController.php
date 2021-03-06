<?php
    include('../../config/db_connect.php');

    $email = $email = $password = '';
    $errors = array('username' => '', 'email' => '', 'password' => '');

    if (isset($_POST['submit'])) {
        

        // check email
        if (empty($_POST['username'])) {
            $errors['username'] = 'A username is required';
        } else {
            $email = $_POST['username'];
            if (!preg_match('/^[a-z\s]{5,20}$/i', $email)) {
                $errors['username'] = 'Username must be 5-12 characters. No special chracters allowed';
            }
        }

         // check email
         if (empty($_POST['email'])) {
            $errors['email'] = 'An email is required';
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be a valid email address';
            }
        }

        // check password
        if (empty($_POST['password'])) {
            $errors['password'] = 'A password is required';
        } else {
            $password = $_POST['password'];
            if (!preg_match('/^[\w@-]{8,20}$/', $password)) {
                $errors['password'] = 'Password must be alphanumeric(@, _ and - are also allowed) and must be 8-20 characters';
            }
        }

        if (array_filter($errors)) {
            //echo 'errors in form';
        } else {
            // escape sql chars
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // create sql
            $sql = "INSERT INTO adminauth(username,email,password,status) VALUES('$username','$email','$hashedPassword','Pending')";

            // save to db and check
            if (mysqli_query($conn, $sql)) {
                // success
                header('Location: welcome.php');
            } else {
                echo 'query error: '. mysqli_error($conn);
            }
        }
    } // end POST check

?>
