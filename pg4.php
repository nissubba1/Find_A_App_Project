<!DOCTYPE html>
<html lang="en">

<head>
    <title>FindASpot Rating</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The rating page of FindASpot" />

    <!-- Styles and Fonts -->
    <link rel="stylesheet" href="layoutpage4.css" type="text/css" />
    <link rel="icon" type="image/x-icon" href="topicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,600;1,900&display=swap"
        rel="stylesheet" />
</head>

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



    <body>



        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $satisfaction = $_POST["satisfaction"];

// Perform any additional processing or database storage as needed
    echo "<div style='font-size: 36px; font-weight: bold; color: #ff6f61; text-align: center; margin-top: 20px;'>Your satisfaction with our site is: $satisfaction - thank you!</div>";
} else {
    // Redirect or handle errors as needed
    echo "Invalid request.";
}
?>



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
                        <form class="footer-form" action="#" method="GET">
                            <fieldset class="fieldset">
                                <p>
                                    <label for="feedback-name">Name:
                                        <input type="text" placeholder="Enter your name" name="name"
                                            id="feedback-name" /></label>
                                    <label for="feedback-email">Email:
                                        <input type="email" placeholder="Please enter your email" name="email"
                                            id="feedback-email" /></label>
                                    <label for="textarea">Message:
                                        <textarea name="message" id="textarea" cols="60" rows="10"
                                            placeholder="Enter message here"></textarea>
                                    </label>
                                </p>
                            </fieldset>
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