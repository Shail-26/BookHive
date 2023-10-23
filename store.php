<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">
  <link rel="stylesheet" href="styles/forall.css?v=<?php echo time(); ?>" type="text/css" />
  <link rel="stylesheet" href="styles/navbar.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/navButton.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/newPage.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/slider.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/store.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="styles/scroll-top.css?v=<?php echo time(); ?>" />
  <script src="https://kit.fontawsome.com/a076d05399.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>store</title>
</head>

<body>
  <div id="navbar-container">   
  </div>
  <?php require 'navbar.php'?>
  <button onclick="topFunction()" id="scrollBtn">
    <span class="Container">
      <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path fill="#000000" d="M13 20h-2V8l-5.5 5.5l-1.42-1.42L12 4.16l7.92 7.92l-1.42 1.42L13 8v12Z"/>
    </svg>
  </button>

  <div class="grid-container js-result-book-grid">
  </div>
  
  
  <p class="all-books">All Books</p>
  <hr>
  <div class="grid-container js-book-grid">
    <!-- <div class="grid-item">
      <img src="/images/Book cover pages/1b.jpg" alt="Image 1">
      <div class="Btn-div">
        <button class="Btn">
          <span class="svgContainer">
            <svg width="512" height="512" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
              <mask id="ipSReadBook0">
                <g fill="none" stroke="#fff" stroke-width="4">
                  <path fill="#fff" stroke-linecap="round" stroke-linejoin="round"
                    d="M24 21v23c-3.291-4-13.371-4-18-4V18c9.874 0 16.114 2 18 3Zm0 0v23c3.291-4 13.371-4 18-4V18c-9.874 0-16.114 2-18 3Z" />
                  <circle cx="24" cy="12" r="8" />
                </g>
              </mask>
              <path fill="#000000" d="M0 0h48v48H0z" mask="url(#ipSReadBook0)" />
            </svg>
            <span class="BG"></span>
            <div class="tooltip">Read</div>
        </button>
        <button class="Btn">
          <span class="svgContainer">
            <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M6 20h12M12 4v12m0 0l3.5-3.5M12 16l-3.5-3.5" />
            </svg>
            <span class="BG"></span>
            <div class="tooltip">Download</div>
        </button>
        <button class="Btn">
          <span class="svgContainer">
            <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path fill="#000000" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/>
          </svg>
            <span class="BG"></span>
            <div class="tooltip">Favourite</div>
        </button>
      </div>
    </div> -->
    </div>
</body>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="scripts/top-button.js"></script>
<script type="module" src="scripts/store.js?v=<?php echo time(); ?>"></script>
<script type="module" src="scripts/search-btn.js?v=<?php echo time(); ?>"></script>
</html>
