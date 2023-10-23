<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="styles/thankyoupage.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/forall.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/navbar.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/navButton.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/contact-us.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/scroll-top.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/store.css?v=<?php echo time(); ?>" />
    <title>Thank you</title>
  </head>
  <body>
    <div id="navbar-container"></div>
    <?php require 'navbar.php'?>
    <button onclick="topFunction()" id="scrollBtn">
      <span class="Container">
        <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path fill="#000000" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"/>
      </svg>
    </button>
    <img onclick="topFunction()" id="scrollBtn" title="Go to top" width="48" height="48" src="https://img.icons8.com/ffffff/fluency-systems-regular/48/circled-up-2.png" alt="circled-up-2"/>
    <div class="thankyoumsg-container">
      <h2>Thank you for visiting our Website!</h2>
      <p>Dear valued visitor,</p>
      <p>we want to take a moment to express our gratitude for your visit. It meant a lot to us to have you here.</p>
      <p>Whether you're seeking information, inspiration, or entertainment, we strive to provide you with valuable content and a user-friendly experience.</p>
      <p>If you have any questions, feedback, or suggestions, please don't hesitate to contact us. Your input helps us improve and serve you better.</p>
      <p>Thank you once again for being a part of our online community. We look forward to continuing to provide you with great books and experiences.</p>
      <div class="signature">
        <p>Sincerely,</p>
        <p>The BookHive Team</p>
      </div>
    </div>
    <div class="contact-us-container">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <div class="profile-card">
        <img src="images/contact-us/shail.jpeg" alt="Profile Photo">
        <div class="profile-details">
            <h2>Shail Macwan</h2>
            <p>22CS035</p>
            <div class="media-buttons">
              <a href="https://www.instagram.com/_https.shail/" style="background : #e1306c" target="_blank" class="link">
                <i class='bx bxl-instagram'></i>
              </a>
              <a href="https://github.com/Shail-26/" style="background : #000000" target="_blank" class="link">
                <i class='bx bxl-github'></i>
              </a>
              <a href="https://www.linkedin.com/in/shail-macwan-87bab4288/" style="background : #0a66c2" target="_blank" class="link">
                <i class='bx bxl-linkedin'></i>
              </a>
            </div>
        </div>
      </div>
      <div class="profile-card">
        <img src="images/contact-us/dhruvi.jpg" alt="Profile Photo">
        <div class="profile-details">
            <h2>Dhruvi Mahale</h2>
            <p>22CS036</p>
            <div class="media-buttons">
              <a href="https://www.instagram.com/_d_hruvi__/" style="background : #e1306c" target="_blank" class="link">
                <i class='bx bxl-instagram'></i>
              </a>
              <a href="https://github.com/22CS036dhruvimahale/" style="background : #000000" target="_blank" class="link">
                <i class='bx bxl-github'></i>
              </a>
              <a href="https://www.linkedin.com/in/dhruvi-mahale-4aa072258/" style="background : #0a66c2" target="_blank" class="link">
                <i class='bx bxl-linkedin'></i>
              </a>
            </div>
        </div>
      </div>
      <div class="profile-card">
        <img src="images/contact-us/shruti.jpeg" alt="Profile Photo">
        <div class="profile-details">
            <h2>Shruti Panchal</h2>
            <p>22CS044</p>
            <div class="media-buttons">
              <a href="https://www.instagram.com/shrut_10_24/" style="background : #e1306c;" target="_blank" class="link instagram-link">
                <i class='bx bxl-instagram'></i>
              </a>
              <a href="https://github.com/22cs044Shruti/" style="background : #000000" target="_blank" class="link">
                <i class='bx bxl-github'></i>
              </a>
              <a href="https://www.linkedin.com/in/shruti-panchal-682190258/" style="background : #0a66c2" target="_blank" class="link">
                <i class='bx bxl-linkedin'></i>
              </a>
            </div>
        </div>
      </div>
    </div> 

    <div class="get-in-touch-container">
      <form action="https://formsubmit.co/22cs035+bookhive@charusat.edu.in" method="POST">
        <h3>GET IN TOUCH</h3>
        <input type="text" id="name" name="Name" placeholder="Your Name" required>
        <input type="email" id="email" name="Email" placeholder="Email ID" required>
        <textarea id="message" rows="4" name="Message" placeholder="How can we help you?"></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>

    <!-- <hr>
    <footer>
      <span>&#169 2023 CHARUSAT Changa, All rights reserved.</span>
    </footer> -->
    
  </body>
  <script src="/scripts/top-button.js"></script>
  <script>
    setTimeout(function() {
      // Your code to be executed after 3 seconds
      document.querySelector('.search-container').style.display = 'none';
    },100);
  </script>
</html>
