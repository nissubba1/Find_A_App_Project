<!DOCTYPE html>
<html lang="en">

<head>
    <title>FindASpot Sign In</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Sign in to your FindASpot account" />

    <!-- Styles and Fonts -->
    <link rel="stylesheet" href="layoutpage4.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="topicon.png" />
</head>

<body>

    <!-- Main Container -->
    <div class="container">
        <!-- Header for Logo and Nav Bar -->
        <div class="header">
            <div class="logo">
                <p class="app-logo">
                    <a href="landingpage.html">
                        <img src="findaapp_logo.png" alt="logo of FindASpot" />
                    </a>
                </p>
            </div>
        </div>

        <?php
    # Creating session.
    session_start();

    # Connect to mySQL database.
    $db = mysqli_connect("", "", "", "");

    if (mysqli_connect_errno()) {
        exit("Error - Could not connect to MySQL");
    }

    ?>

        <?php
    # HTML variables into PHP variables while protecting against injection attacks.
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);

    if (empty($email)) {
        // Missing username.
        ?>
        <p>Please enter email!</p>
        <?php
    } else {
        if (empty($password)) {
            // Missing password.
            ?>
        <p>Please enter a valid password!</p>
        <?php
        } else {
            # Construct SQL query to check the database for username and password match.
            $constructed_query = "SELECT * FROM user_account WHERE umbc_email = '$email' AND u_password = '$password'";

            # Run constructed query.
            $result = mysqli_query($db, $constructed_query);

            # Check if the query was successful
            if ($result) {
                # If one result is returned, there is a match.
                if (mysqli_num_rows($result) === 1) {
                    # Retrieving result from the database.
                    $row = mysqli_fetch_assoc($result);

                    # Verifying that username and password match.
                    if ($row['umbc_email'] === $email && $row['u_password'] === $password) {
                        // Successful login.
                        ?>
        <p>Successfully logged in!</p>
        <p>Please click <a href="userhome.php" style="color:blue;">here</a> to continue to the portal!</p>
        <?php
                        $_SESSION['email'] = $email;
                    } else {
                        // Unsuccessful login.
                        ?>
        <p>Invalid username and/or password. Re-enter credentials or sign up here! <a href="SignUpFinal.html"></a></p>
        <?php
                    }
                } else {
                    // Unsuccessful login.
                    ?>
        <p>Invalid username and/or password. Re-enter credentials or <a href="SignUpFinal.html">Sign up here</a></p>
        <?php
                }
            } else {
                // Display error message
                echo "Error: " . mysqli_error($db);
            }
        }
    }
    ?>

        <!-- Spacer for separating content -->
        <p class="spacer"></p>

        <!-- Footer -->
        <div class="footer">
            <footer>
                <!-- Left Side Footer -->
                <div class="contact">
                    <div class="contact-us">
                        <h2 class="contact-heading">Contact Us</h2>
                        <p class="contact-us-info">
                            We deeply value our users and their insights. If you have any
                            questions about how to use our app, or if you'd like to share
                            suggestions for improvement, or even if you just want to send us
                            some feedback on your experience, please don't hesitate to contact us.
                        </p>
                    </div>
                    <p class="spacer"></p>

                    <!-- Right Side Footer -->
                    <div class="contact-form remove-margin-form">
                        <p class="contact-form-info">
                            For any inquiries, feedback, or suggestions, please reach out to
                            us using the form below. We value your input and will get back
                            to you as soon as possible.
                        </p>
                        <form class="footer-form" action="submit_review.php" method="POST">
                            <fieldset class="fieldset">
                                <p>
                                    <label for="feedback-name">Name:
                                        <input type="text" placeholder="Enter your name" name="reviewName"
                                            id="feedback-name" required />
                                    </label>
                                    <label for="feedback-email">Email:
                                        <input type="email" placeholder="Please enter your email" name="reviewEmail"
                                            id="feedback-email" required />
                                    </label>
                                    <label for="textarea">Message:
                                        <textarea name="reviewMessage" id="textarea" cols="60" rows="10"
                                            placeholder="Enter message here" required></textarea>
                                    </label>
                                </p>
                            </fieldset>
                            <input class="submit-review" type="submit" value="Submit Review" />
                        </form>
                    </div>
                    <p class="spacer"></p>

                </div>
                <!-- Copyright Information -->
                <div class="copyright">
                    <p>&copy; Copyright of IS448 Group 8. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </div>

    <form action="webpg4.html" method="GET"></form>

</body>

</html>