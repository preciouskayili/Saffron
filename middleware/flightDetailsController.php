<?php
    // connect to the database
  $conn = mysqli_connect('localhost', 'presh', '1234', 'saffron');

  // check connection
  if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
  }
 // check GET request id param
 if(isset($_GET['id'])){
		
  // escape sql chars
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // make sql
  $sql = "SELECT * FROM flights WHERE id = $id";

  // get the query result
  $result = mysqli_query($conn, $sql);

  // fetch result in array format
  $flight = mysqli_fetch_assoc($result);

}

?>
