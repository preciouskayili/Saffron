<?php
  mysqli_connect("localhost","presh","1234","search_test");
    $output="";
  // Collect
  if(isset($_POST['submit'])){
    $searchq = $_POST['search'];

    $query = mysql_query("SELECT * FROM members WHERE firstname LIKE $searchq OR lastname LIKE $searchq ");
    $count = mysql_num_rows($query);
    if($count == 0){
        $output = 'There was no search results';
    }else{
        while ($row = mysql_fetch_array($query)) {
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $id = $row['id'];

            $output .= '<div>'.$fname.' '.$lname. '</div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="search.php" method="post">
  <input type="text" name="search" placeholder="search for members">
  <input type="submit" value=">>">
</form>
    <?php echo $output; ?>
</body>
</html>