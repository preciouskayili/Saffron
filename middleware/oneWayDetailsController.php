<?php
  include("../config/db_connect.php");

 // check GET request id param
 if(isset($_GET['id'])){
		
  // escape sql chars
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  // make sql
  $sql = "SELECT * FROM one_way WHERE id = $id";

  // get the query result
  $result = mysqli_query($conn, $sql);

  // fetch result in array format
  $flight = mysqli_fetch_assoc($result);

}

?>
