<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>FindASpot/profilepage</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The profile page of FindASpot" />

    <!-- Styles and Fonts -->
    <link rel="stylesheet" href="layoutpage4.css" type="text/css" />
    <link rel="icon" type="image/x-icon" href="topicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,600;1,900&display=swap"
        rel="stylesheet" />

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

            <!-- Nav Bar -->
            <div class="nav-bar">
                <p><a href="landingpage.html">Home</a></p>
                <p><a href="webpg4.html">Profile</a></p>
                <p><a href="signinpage.html">Log Out</a></p>
                <p><a href="spotlist.php">Search</a></p>
            </div>
        </div>

        <p>
            <img src="example.jpg" width="250" height="250" alt="This is the user profile picture">
        </p>


        <?php
				// Creating session.
				session_start();

				// Connect to MySQL database.
				$db = mysqli_connect("", "", "", "");

				if (mysqli_connect_errno()) {
				    exit("Error - Could not connect to MySQL");
				}

				// Since I have created the session once the user logged in, now I can create queries to pull data for that user
				$email = $_SESSION['email'];

				// Check if the session variable is set
				if (isset($email)) {
				    $constructed_query = "SELECT first_name, last_name, umbc_email FROM user_account WHERE umbc_email = '$email'";
				    $result = mysqli_query($db, $constructed_query);

				    // Check for errors
				    if (!$result) {
				        die("Query failed: " . mysqli_error($db));
				    }

				    # Check how many rows have been returned by the query
				    $num_rows = mysqli_num_rows($result);

				    # Check how many fields are returned by the query
				    $num_fields = mysqli_num_fields($result);

				    // Fetch the user details
				    $user_details = mysqli_fetch_assoc($result);

				    // Output the user details in a table
				    ?>
        <table border="1">
            <tr>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>

            <?php
				        for ($row_num = 1; $row_num <= $num_rows; $row_num++) {
				            print("<tr/>");
				            print("<td>{$user_details['umbc_email']}</td>");
				            print("<td>{$user_details['first_name']}</td>");
				            print("<td>{$user_details['last_name']}</td>");
				        }
				        ?>
        </table>
        <?php
				} else {
				    echo "Email not set in the session.";
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
                            some feedback on your experience, please don't hesitate us.
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
                            <input type="submit" value="Submit Review">
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


    <form action="webpg4.html" method="GET">


    </form>

</body>

</HTML>