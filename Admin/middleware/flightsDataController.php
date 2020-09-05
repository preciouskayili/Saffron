<?php
    include("../config/db_connect.php");

    $sql = "SELECT * FROM flights";

    $result = mysqli_query($conn,$sql);

    if(isset($_POST['delete'])){

		$id_to_delete = $row['id'];

		$sql = "DELETE FROM flights WHERE id = $id_to_delete";

		if (mysqli_query($conn,$sql)) {
			header('Location: flights.php');
		} else {
			// Do nothing
		}
	}
?>