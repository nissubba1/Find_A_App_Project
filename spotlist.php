<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The landing page of FindASpot" />

    <!-- Title -->
    <title>FindASpot/filterpage</title>

    <!-- Styles and Fonts -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" type="text/css" href="filterpage.css" />
    <link rel="stylesheet" type="text/css" href="spot_list.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,600;1,900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

    <!-- Main Container -->
    <div class="container">
        <!-- Header for Logo and Nav Bar -->
        <div class="header">
            <div class="logo">
                <p class="app-logo">
                    <a href="landingpage.html">
                        <img src="images/findaapp_logo.png" alt="logo of FindASpot" />
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

        <!-- Main filter content section -->
        <div class="filter-page">
            <!-- Filter sidebar for ratings, distance, genre, and status -->
            <div class="filter-side">
                <h2>Filters</h2>
                <div class="rating">
                    <form action="#">
                        <!-- Rating filter section -->
                        <fieldset class="rating-field">
                            <legend class="rating-legend">Rating</legend>
                            <!-- Rest of the rating section -->
                            <p>
                                <label for="five-star">
                                    <input type="radio" name="rating" id="five-star" checked />
                                    <img src="images/five-star.png" alt="5 star rating" />
                                </label>
                            </p>
                            <p>
                                <label for="four-star">
                                    <input type="radio" name="rating" id="four-star" />
                                    <img src="images/4star.png" alt="4 star rating" />
                                </label>
                            </p>
                            <p>
                                <label for="three-star">
                                    <input type="radio" name="rating" id="three-star" />
                                    <img src="images/3star.png" alt="3 star rating" />
                                </label>
                            </p>
                            <p>
                                <label for="two-star">
                                    <input type="radio" name="rating" id="two-star" />
                                    <img src="images/2star.png" alt="3 star rating" />
                                </label>
                            </p>
                            <p>
                                <label for="one-star">
                                    <input type="radio" name="rating" id="one-star" />
                                    <img src="images/1star.png" alt="3 star rating" />
                                </label>
                            </p>
                        </fieldset>
                        <!-- Distance filter section -->
                        <fieldset class="distance-field">
                            <legend class="distance-legend">Distance</legend>
                            <div class="distance-filter">
                                <p>
                                    <label for="thirty-min">
                                        <input type="radio" name="distance" id="thirty-min" checked />
                                        30 Minutes
                                    </label>
                                </p>
                                <p>
                                    <label for="twenty-min">
                                        <input type="radio" name="distance" id="twenty-min" />
                                        20 Minutes
                                    </label>
                                </p>
                                <p>
                                    <label for="ten-min">
                                        <input type="radio" name="distance" id="ten-min" />
                                        10 Minutes
                                    </label>
                                </p>
                                <p>
                                    <label for="five-min">
                                        <input type="radio" name="distance" id="five-min" />
                                        5 Minutes
                                    </label>
                                </p>
                            </div>
                            <!-- Genre filter section -->
                        </fieldset>
                        <div class="genre-field">
                            <div class="genre-filter">
                                <fieldset>
                                    <!-- <h3>Genre</h3> -->
                                    <legend class="genre-legend">Genre</legend>
                                    <select name="genre" id="genretype" size="5" class="genre-select">
                                        <option value="study" selected>Study</option>
                                        <option value="picnic">Picnic</option>
                                        <option value="food">Food</option>
                                        <option value="relaxation">Relaxation</option>
                                        <option value="entertainment">Entertainment</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <!-- Status filter section -->
                        <div class="status-div">
                            <div class="status-filter">
                                <fieldset>
                                    <legend class="status-legend">Status</legend>
                                    <p>
                                        <label for="open-status">
                                            <input type="radio" name="status" id="open-status" checked />
                                            Open</label>
                                        <label for="closed-status">
                                            <input type="radio" name="status" id="closed-status" />
                                            Closed</label>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                        <button class="filter-button" type="submit">Go</button>
                    </form>
                </div>
            </div>
            <!-- Spacer for separating content -->
            <p class="spacer"></p>
            <!-- Main content area for displaying spots -->
            <div class="right-side">
                <div class="filter-search-bar">
                    <!-- Large search bar -->
                    <form action="#" method="GET">
                        <fieldset>
                            <p>
                                <input type="text" placeholder="Start..." name="large-search" />
                                <button type="submit">Go</button>
                            </p>
                        </fieldset>
                    </form>
                </div>

                <div class="add-spot-container">
                    <button onclick="document.getElementById('addSpotForm').style.display='block'">Add New Spot</button>
                </div>
                <div id="addSpotForm" class="add-spot-form" style="display:none;">
                    <form action="add_spot.php" method="POST">
                        <label for="spotName">Spot Name:</label>
                        <input type="text" id="spotName" name="spot_name" required><br><br>

                        <label for="pictureUrl">Picture URL:</label>
                        <input type="text" id="pictureUrl" name="picture_url" required><br><br>

                        <label for="rating">Rating:</label>
                        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>

                        <input type="submit" value="Add Spot">
                    </form>
                </div>



                <div class="spots-list">
                    <?php
    $sql = "SELECT name, picture_url, rating, link_url FROM umbc_spots";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $name = htmlspecialchars($row["name"]);
            $pictureUrl = htmlspecialchars($row["picture_url"]);
            $rating = htmlspecialchars($row["rating"]);
            $linkUrl = htmlspecialchars($row["link_url"]);

            echo "<div class='spot-card'>";
            echo "<img class='card-img' src='" . $pictureUrl . "' alt='image of " . $name . "' />";
            echo "<div class='card-content'>";
            echo "<h2>" . $name . "</h2>";
            echo "<p>Rating: " . $rating . " stars</p>";
            if (!empty($linkUrl)) {
                echo "<a href='" . $linkUrl . "' class='view-more-btn'>View More</a>";
            }
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
                </div>

                <!-- Spacer for separating content -->

            </div>
        </div>
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
                                <p>
                                    <input class="form-submit" type="submit" name="Submit" />
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
</body>

</html>