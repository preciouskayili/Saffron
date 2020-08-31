<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'Presh', 'Legendpresh88!!', 'saffron');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>