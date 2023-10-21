<?php

session_start();

session_unset();
session_destroy();

header("location: login.php");
exit;

?>


<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Library</title>
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
    </body>
</html>