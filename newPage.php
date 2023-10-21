<?php

session_start();

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
        <link rel="stylesheet" href="styles/newPage.css" />
        <link rel="stylesheet" href="styles/slider.css" />
        <link rel="stylesheet" href="styles/store.css" />
        <link rel="stylesheet" href="styles/scroll-top.css" />
        <script src="https://kit.fontawsome.com/a076d05399.js"></script>
    </head>
    <body>
        <div id="navbar-container">   
        </div>
        <!-- <script>
            // Fetch the navbar content from the navbar.html file
            fetch('navbar.php')
                .then(response => response.text())
                .then(navbarContent => {
                // Insert the navbar content into the container
                    document.getElementById('navbar-container').innerHTML = navbarContent;
                })
            .catch(error => console.error('Error loading navbar:', error));
        </script> -->
        <?php require 'navbar.php'?>
          <button onclick="topFunction()" id="scrollBtn">
            <span class="Container">
              <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill="#000000" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"/>
            </svg>
          </button>
          
        <!-- Trending start -->
        <div class="trend-div">
            <span class="trend">Trending books</span>
        </div>
        <!-- Trending end -->
        <!-- Slider Start -->
        <div class="temp-slide" >
            <div class="slider">
                <div class="slides">
                <!-- Radio buttons start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- Radio buttons end -->
            
                    <!-- slide images starts -->
                    <div class="slide first">
                        <a href="store.php"><img src="images/Books Poster/1b.png" alt=""></a>
                    </div>
            
                    <div class="slide">
                        <a href="store.php"><img src="images/Books Poster/2b.png" alt=""></a>
                    </div>
            
                    <div class="slide">
                        <a href="store.php"><img src="images/Books Poster/3b.png" alt=""></a>
                    </div>
            
                    <div class="slide">
                        <a href="store.php"><img src="images/Books Poster/5b.png" alt=""></a>
                    </div>
                    <!-- slide images end -->
            
                <!-- automatic navigation start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
                <!-- automatic navigation end -->
            
                <!-- manual navigation start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!-- manual navigation end -->
                </div>
            </div>
        </div>
        <!-- Slider End -->
            <script type="text/javascript">
                var counter = 1;
                setInterval(function () {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 4) {
                        counter = 1;
                    }
                }, 5000);
            </script>

    </body>
    <script src="scripts/top-button.js"></script>
    <script>
        setTimeout(function() {
          // Your code to be executed after 3 seconds
            document.querySelector('.search-container').style.display = 'none';
        },100);
    </script>
</html>