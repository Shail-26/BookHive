<?php
$login=false;
$showError=false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_dbconnect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM users where email = '$email' AND password = '$password'";
    $sql = "SELECT * FROM users where email = '$email'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1) {
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: newPage.php");
            } else {
                $showError = "Invalid Credentials.";
            }
        }
    } else {
        $showError = "Invalid Credentials.";
    }
}

?>


<!-- Login -->


<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/forall.css" type="text/css" />
        <link rel="stylesheet" href="styles/navbar.css" />
        <link rel="stylesheet" href="styles/navButton.css" />
        <link rel="stylesheet" href="styles/scroll-top.css" />
        <link rel="stylesheet" href="styles/login-register.css" />
        <script src="https://kit.fontawsome.com/a076d05399.js"></script>
    </head>
    <body>
        <div id="navbar-container">   
        </div>
        <?php require 'navbar.php'?>

        <?php
            if($showError) {
                echo $showError;
            }
            if($login) {
                echo 'Login Success';
            }
        ?>

        <!-- Login -->
        <form method="post" action="login.php">
            <div class="login-container">
                <div class="login wrap">
                    <div class="h1">Login</div>
                    <input pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Email" id="email" name="email" type="text" required>
                    <input placeholder="Password" id="password" name="password" type="password" required>
                    <input value="Login" class="btn" type="submit">
                    <p class="account-question">Don't have an account? <span class="sign-up-btn" onclick="location.href='register.php'"> Signup</span></p>
                </div>
            </div>
        </form>


        <script>
            setTimeout(function() {
              // Your code to be executed after 3 seconds
                document.querySelector('.search-container').style.display= 'none';
            },10);
            
        </script>
        
        </body>
        
        </html>
