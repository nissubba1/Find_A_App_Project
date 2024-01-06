<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The landing page of FindASpot" />
    <title>FindASpot Sign Up</title>
    <link rel="stylesheet" type="text/css" href="page5.css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
</head>

<body>
    <?php
        $db = mysqli_connect("", "", "", "");

        $name = $_POST["name"];
        $email = $_POST["email"];
        $rating = $_POST["rating"];
        $message = $_POST["message"];
        $constructed_query = " INSERT into library_review( username, email, rating, comment) values ('$name', '$email', '$rating', '$message')";
        $results = mysqli_query($db, $constructed_query);
        print("Check program is working message: THe query is : $constructed_query </br>");
        $Name = mysqli_real_escape_string($Name, $db );


        echo "Thank you for your review '<br>'";
        ?>

    <p> <a href="landingpage.html"> Click here to go back to home page or</a> <a href="page5.html"> here to go back to
            'Study Spots'</a></p>
</body>