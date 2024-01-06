<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['spot_name']);
    $picture_url = mysqli_real_escape_string($conn, $_POST['picture_url']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);

    $sql = "INSERT INTO umbc_spots (name, picture_url, rating, link_url) VALUES ('$name', '$picture_url', '$rating', '#')";

    if (mysqli_query($conn, $sql)) {
        echo "New spot added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: spotlist.php"); 
    exit();
}
?>