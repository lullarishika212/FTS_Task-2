<?php
session_start();
@include_once("config.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
    <title>Survey | Login</title>
</head>

<body>

    <div class="container">
        <div class="image">
            <h1><span>Welcome</span></h1>
            <p>Join Us! <br> Take the online survey and let us know your Valuable Feedback.</p>  
        </div>
        <div class="content">
            <form action="" method="POST">
                <h1>Login</h1>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="txt" aria-describedby="helpId" placeholder="Username" Required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="txt" placeholder="Password" Required>
                </div>
                <button type="submit" name="submit" class="btn login-btn"><a>Login</a></button>
                <p class="hidden1"></p>
            </form>
        </div>
    </div>
    <script src="scripts.js"></script>

    <?php

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
    
    
        $username_search = " select * from users where username='$username' ";
        
        $query = mysqli_query($conn,$username_search);

        $username_count = mysqli_num_rows($query);

        if($username_count){
            $username_pass = mysqli_fetch_assoc($query);

            $db_pass = $username_pass['password'];
                    
            $_SESSION['name'] = $username_pass['Name'];
            $_SESSION['key'] = $username_pass['client_id'];
 
            if($db_pass == $password){
                ?>
                 <script>   
                        location.replace("takesurvey.php");
                </script> 
                <?php
                
            }
            else {
                ?>
                <script>
                    document.querySelector('.hidden1').textContent += "Password doesn't match. Kindly check again!";
                </script>
                 <?php
            }
        }
        else{
            ?>
                <script>
                    document.querySelector('.hidden1').textContent += "Account with this Username or Password doesn't exist";
                </script>
                 <?php
        }
    }
    ?>
</body>
</html>
