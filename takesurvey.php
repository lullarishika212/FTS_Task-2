<?php
session_start();
@include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey | Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="image">
            <h1>Welcome <span> <?php echo $_SESSION['name']; ?> </span></h1>
            <p>Join Us! <br> Take the online survey and let us know your Valuable Feedback.</p>
            <div class="survey-active">
                <button type="button" class="btn"><a href="survey.php">Take survey</a></button>
            </div>
        </div>
    </div>
</body>
</html>