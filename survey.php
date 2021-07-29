<?php
session_start();
@include_once("config.php");


    if (isset($_POST['submit'])) {

        $date = $_POST['date'];
        $dine = $_POST['dine'];
        $food = $_POST['food'];
        $key = $_SESSION['key'];
        $seasons1 = $_POST['season1'];
        $seasons2 = $_POST['season2'];
        $seasons3 = $_POST['season3'];
        $seasons4 = $_POST['season4'];
        $seasons5 = $_POST['season5'];
        $fav = $_POST['fav-food'];
        $comments = $_POST['comments'];


        $query = "INSERT INTO survey(user_id ,date, type, food, service, cleanliness, order_acc, speed, value, fav_dishes, comments) VALUES ('$key','$date', '$dine','$food','$seasons1','$seasons2','$seasons3','$seasons4','$seasons5', '$fav', '$comments')";


        $run = mysqli_query($conn, $query);
        if ($run) {
            // echo "<script>console.log('Hii ', '$chk')</script>";
            echo "<script>alert('Thank You for reviewing us! Your feedback was submitted.');</script>";
        } else {
            echo $conn->error;
            echo "<script>alert('Not Done.');</script>";
        }
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="survey.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: "en"
                },
                "google_translate_element"
            );
        }
    </script>
</head>

<body>
    <nav id="navbar">
        <div class="logo">Survey Form</div>
        <div id="google_translate_element" class="translate"></div>
    </nav>
    <div class="heading">
        <h1>Review Our Restaurant!</h1>
        <img class="img1" src="images/rest-icon.svg">
    </div>
    <div class="flex-container">
        <div class="content">
            <form action="survey.php" method="POST" enctype="multipart/form-data">

                <div class="input-form">
                    <label class="lbl">Date Visited: </label><br>
                    <input type="date" id="txt" name="date" required>
                </div>

                <div class="input-form">
                    <label class="lbl">Dine-In / Take-Away / Home Delivery</label><br>
                    <select id="txt" name="dine" required>
                        <option disabled value selected>Select an option</option>
                        <option value="Dine-in">Dine-in</option>
                        <option value="Take-Away">Take-Away</option>
                        <option value="Home Delivery">Home Delivery</option>>
                    </select>
                </div>

                <div class="input-form">
                    <label class="lbl">Food Quality?</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="radio" name="food" value="love" required><span>I love it!</span><br></div>
                    <div class="radio-btn"><input type="radio" name="food" value="like"><span>I like it!</span><br></div>
                    <div class="radio-btn"><input type="radio" name="food" value="ok"><span>It'ok</span><br></div>
                    <div class="radio-btn"><input type="radio" name="food" value="naah"><span>Not really</span><br></div>
                </div>

                <div class="input-form">
                    <label class="lbl">Overall Service Quality</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="radio" name="season1" value="Excellent"><span>Excellent</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season1" value="Good"><span>Good</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season1" value="Avg"><span>Average</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season1" value="Not satistfied"><span>Not satistfied</span><br></div>
                </div>

                <div class="input-form">
                    <label class="lbl">Cleanliness and Hygiene</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="radio" name="season2" value="Excellent"><span>Excellent</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season2" value="Good"><span>Good</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season2" value="Avg"><span>Average</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season2" value="Not satistfied"><span>Not satistfied</span><br></div>
                </div>

                <div class="input-form">
                    <label class="lbl">Order Accuracy</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="radio" name="season3" value="Excellent"><span>Excellent</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season3" value="Good"><span>Good</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season3" value="Avg"><span>Average</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season3" value="Not satistfied"><span>Not satistfied</span><br></div>
                </div>

                <div class="input-form">
                    <label class="lbl">Speed of Service</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="radio" name="season4" value="Excellent"><span>Excellent</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season4" value="Good"><span>Good</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season4" value="Avg"><span>Average</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season4" value="Not satistfied"><span>Not satistfied</span><br></div>
                </div>

                <div class="input-form">
                    <label class="lbl">Value for Money</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="radio" name="season5" value="Excellent"><span>Excellent</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season5" value="Good"><span>Good</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season5" value="Avg"><span>Average</span><br></div>
                    <div class="radio-btn"><input type="radio" name="season5" value="Not satistfied"><span>Not satistfied</span><br></div>
                </div>

                <div class="input-form">
                    <label class="lbl">Tell us what did you like the most?</label>
                </div>
                <div class="input-form">
                    <div class="radio-btn"><input type="checkbox" name="fav-food" value="Apetizers"><span>Apetizers</span><br></div>
                    <div class="radio-btn"><input type="checkbox" name="fav-food" value="Main course"><span>Main course</span><br></div>
                    <div class="radio-btn"><input type="checkbox" name="fav-food" value="Biryani"><span>Biryani</span><br></div>
                    <div class="radio-btn"><input type="checkbox" name="fav-food" value="Beverages"><span>Beverages</span><br></div>
                    <div class="radio-btn"><input type="checkbox" name="fav-food" value="Dessert"><span>Dessert</span><br></div>
                </div>

                <div class="input-form">
                    <label for="comments">Any Comments, questions or suggestions?</label>
                </div>
                <div class="input-form">
                    <textarea class="input-field" id="txt" name="comments" rows="6" cols="40" placeholder="Your comments..."></textarea>
                </div>

                <!--<button type="submit" name="submit" class="btn">Submit</button>-->
                <button type="submit" name="submit" class="btn"><a>Submit</a></button>
            </form>
        </div>
        <div class="flex-imgs">
            <img src="images/Customer Survey.png" width=600px height=500px>
            <img src="images/cofee.png" width=550px height=550px>
            <img src="images/fruit.png" width=500px height=450px>
        </div>
    </div>
    

</body>
</html>