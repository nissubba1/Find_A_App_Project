<?php 

$getEmail = $_POST["email"];

// check if email ending is of umbc edu
if (substr($getEmail, -9) === "@umbc.edu") {
    $response = "Valid email type";
} else {
    $response = "Invalid email type, please enter UMBC email";
}
echo $response;

?>