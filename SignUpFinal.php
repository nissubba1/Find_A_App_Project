<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="description" content="Sign Up Page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="welcome.css">
</head>

<body>
    <!-- Connection to the MySQL database -->
    <?php
    session_start();
        $conn = mysqli_connect("", "", "", "");
        if (mysqli_connect_errno()) {
            exit("Error - could not connect to MySQL");
        }
    ?>

    <!-- Main processing block -->
    <?php

        // Protect from HTML/SQL Injection from user input
        $firstName = htmlspecialchars($_POST["first_name"]);
        $lastName = htmlspecialchars($_POST["last_name"]);
        $email = htmlspecialchars($_POST["umbc_email"]);
        $password = htmlspecialchars($_POST["password"]);

        $firstName = mysqli_real_escape_string($conn, $firstName);
        $lastName = mysqli_real_escape_string($conn, $lastName);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);

        // Checking if all fields are filled
        if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
            // SQL query to check if the email already exists
            $user_check_query = "SELECT * FROM user_account WHERE umbc_email = '$email'";
            $result = mysqli_query($conn, $user_check_query);

            // If the email is already registered
            if (mysqli_num_rows($result) > 0) {
                ?>
    <div class="container">
        <div class="header-info">
            <h1 class="header">
                Account Already Exist
            </h1>
            <p class="thx-u-msg">
                This email is already associated with an account, please log in.
            </p>
            <p class="log-btn">
                <a href="signinpage.html">Sign In</a>
            </p>
            <p class="log-btn">Or Register Using Different Email </p>
            <p class="log-btn">
                <a href="SignUpFinal.html">Register Using Different Email</a>
            </p>
        </div>
    </div>
    <?php
            } else {
                    // Inserting user data into the database
                    $insert_db = "INSERT INTO user_account (first_name, last_name, umbc_email, u_password) VALUES ('$firstName', '$lastName', '$email', '$password')";
                    $result = mysqli_query($conn, $insert_db);

                    if ($result) {
                        // Success
                    } else {
                        print("SQL Query failed");
                    }
                    ?>
    <div class="container">
        <div class="header-info">
            <h1 class="header">
                Thank You for Signing Up, <?php echo $firstName; ?>
            </h1>
            <p class="thx-u-msg">
                You have successfully registered for the website. Now please log in using your account credentials.
            </p>
            <p class="log-btn">
                <a href="signinpage.html">Sign In</a>
            </p>
        </div>
    </div>
    <?php
                }
            }
            else {
            ?>
    <div class="container">
        <div class="header-info">
            <h1 class="header">
                Please Enter Valid Data
            </h1>
            <p class="thx-u-msg">
                Please do not leave any input blanks. You must enter all the requested information in order to
                successfully register for the website.
            </p>
            <p class="log-btn">
                <a href="SignUpFinal.html">Try Again</a>
            </p>
        </div>
    </div>
    <?php
        }
        mysqli_close($conn);
    ?>
</body>

</html>