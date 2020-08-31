<?php
    $username = "";
    $email = "";
    $password_1 = "";
    $password_2 = "";
    $errors = array('username' => '', 'email' => '', 'password' => '', 'password_confirm' => '');

    //Connect to database
    $conn = mysqli_connect('localhost', 'presh', '1234', 'saffron');

    if(isset($_POST['register'])) {
        session_start();
        $_SESSION['username'] = $_POST['username'];


        $username = ($_POST['username']);
        $email = ($_POST['email']);
        $password_1 = ($_POST['password_1']);
        $password_2 = ($_POST['password_2']);
    
        // FORM VALIDATION

        if(empty($username)) {
            // array_push($errors, "Username is required");
            $errors['username'] = "Username is required";
        }
        if(empty($email)) {
            // array_push($errors, "email is required");
            $errors['email'] = "Email is required";
        }
        else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = 'Email must be a valid email address';
		}
        if(empty($password_1)) {
            // array_push($errors, "Password is required");
            $errors['password'] = "Password is required";
        }
        
        if($password_1 != $password_2) {
            $errors['password_confirm'] = "Passwords do not match";
            // array_push($errors, "The two passwords do not match");
        }
      

        if(array_filter($errors)){
            // Errors in the form
         
        }
      
        else {
            $password = password_hash($password_1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email','$password')";
            
            mysqli_query($conn, $sql);
            $_SESSION['username'] = $username;
            
            header('Location:login.php');
        }       
    }
}
?>