<!DOCTYPE html>
<html lang="EN">

<head>
    <title>Library Reviews</title>
    <link rel="stylesheet" type="text/css" href="library.css" title="style" />
</head>


<?php
//Connection to the MySQL database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "dnguye11", "dnguye11", "dnguye11");
	  
	  if (mysqli_connect_errno()) {
			exit("Error - could not connect to MySQL");
	  }
?>

<?php

  //Put all html variables in PHP variables
  $review = htmlspecialchars($_POST["newreviews"]);
  
  $review =  mysqli_real_escape_string($db, $review);
  ?>

<?php
  //Create my SQL query
  $insert_query = "INSERT INTO review (review) VALUES ('$review')";
  $result = mysqli_query($db, $insert_query);
  ?>
<?php
  mysqli_close($db);
  
?>


</body>
<p>Thank you for submitting your review!</p>
<a href="library.html">Click here to return to library</a>

</html>