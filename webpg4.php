<!doctype HTML>
<HTML lang="en">

<head>
    <title> FindASpot/profilepage </title>
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
session_start(); // Start the session

// Check if the user is logged in (session variables are set)
if (!isset($_SESSION["email"])) {
    // Redirect to the login page or handle unauthorized access
    header("Location: signinpage.php");
    exit();
}

// Get user information from session
$firstName = $_SESSION["first_name"];
$lastName = $_SESSION["last_name"];
$email = $_SESSION["email"];
?>


        <body>
            <!-- Display user information on the profile page -->
            <h1>Welcome, <?php echo $firstName . " " . $lastName; ?>!</h1>
            <p>Email: <?php echo $umbcEmail; ?></p>



            <!--  Table 1-->
            <table class="t1">
                <tr>
                    <th>
                        User Information
                    </th>
                </tr>

                <span class="tabledetails">
                    <tr>
                        <td>
                            <p>Name: <?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"]; ?></p>
                            <p>Email: <?php echo $_SESSION["umbc_email"]; ?></p>
                            <p>Join Date: June 12</p>
                            <p>Graduation Year: 2024</p>
                        </td>
                    </tr>
                </span>

            </table>

            <!--  Table 2-->
            <table class="t2">
                <tr>
                    <th>
                        Recent activity
                    </th>
                </tr>

                <span class="tabledetails">
                    <tr>
                        <td>
                            <p>Reviewed UMBC library</p>
                            <p>Viewed Halal Shack</p>
                        </td>
                    </tr>
                </span>
            </table>

            <!--  Table 3-->
            <table class="t3">
                <tr>
                    <th>
                        My Recent Reviews
                    </th>
                </tr>

                <span class="tabledetails">
                    <tr>
                        <td>
                            <p> I love this spot!</p>
                            <p> Food was amazing!</p>
                        </td>
                    </tr>
                </span>
            </table>

            <!--  Table 4-->
            <table class="t4">
                <tr>
                    <th>
                        My Favorite spots
                    </th>
                </tr>

                <span class="tabledetails">
                    <tr>
                        <td>
                            <p>Library Room 271
                            <p>
                            <p>Library Room 301
                            <p>
                        </td>
                    </tr>
                </span>
            </table>

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
                                <input class="submit-review" type="submit" value="Submit Review" />
                            </form>
                        </div>
                        <p class="spacer"></p>

                    </div>



                    <!-- Customer Rating Satisfaction Form -->
                    <form action="pg4.php" method="POST">
                        <label for="satisfaction">Rate your satisfaction (1-5):</label>
                        <input type="number" name="satisfaction" id="satisfaction" min="1" max="5" required>
                        <!-- Adjust the inline styles for the button -->
                        <input type="submit" value="Submit Rating" style="font-size: 1.5em; padding: 30px 30px;">
                    </form>

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