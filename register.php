<?php
$showAlert=false;
$showError=false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include '_dbconnect.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Email already exists.";
    } else {
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO `users` (`fname`,`lname`,`email`,`password`,`dt`) VALUES ('$fname','$lname','$email','$hash',current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if($result) {
                $showAlert = true;
            }
        } else{
            $showError = "Passwords do not match";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Register</title>
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
            if($showAlert) {
                echo 'User Created';
            }
            if($showError) {
                echo $showError;
            }
        ?>

        <form method="post" action="register.php">
            <div class="register-container">
                <div class="login wrap">
                    <div class="h1">Register</div>
                    <input placeholder="First Name" id="fname" name="fname" type="text" required>
                    <input placeholder="Last Name" id="lname" name="lname" type="text" required>
                    <input pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Email" id="email" name="email" type="text" required>
                    <input placeholder="Password" id="password" name="password" type="password" required>
                    <input placeholder="Confirm Password" id="cpassword" name="cpassword" type="text" required>
                    <input value="Sign Up" class="btn" type="submit">
                    <span class="login-button" onclick="location.href='login.php';"> Login</span>
                </div>
            </div>
        </form>
        <script>
            setTimeout(function() {
              // Your code to be executed after 3 seconds
                document.querySelector('.search-container').style.display = 'none';
            },10);
        </script>
        
        </body>
        
        </html>
