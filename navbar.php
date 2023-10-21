<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $loggedin = true;
}


echo '<header>
  <div class="navbar-div">
    <!-- logo start -->
    <div class="logo-link-div">
      <div class="logo-div">
        <img src="images/logo/logo_final.png" alt="logo" />
        <a href="newPage.php">BookHive</a>
      </div>
      <!-- logo end -->
  
      <!-- link start -->
      <div class="links-div">
        <ul class="nav-links">
          <li><a href="newPage.php">Home</a></li>
          <li><a href="store.php">Store</a></li>
          <li><a href="myLibrary.php">My Library</a></li>';

          if($loggedin){
          echo '<li><a href="logout.php">Logout</a></li>';
          }

        echo '</ul>
      </div>

      <!-- link end -->
      <div class="search-container">
        <input type="text" name="text" class="input" placeholder="Search a book" id="searchInput">
        <button class="search__btn" id="searchButton">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
            <path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z" fill="#efeff1"></path>
          </svg>
        </button>
      </div>
    </div>';
    if(!$loggedin){
      echo '<div class="thnk-log-div">
      <div class="login-div">

      
        <button class="log-btn"  onclick="location.href=`register.php`;">
          <img src="images/logo/log_in.png">
        </button>
      

      </div>';
    }
  
      echo '<div class="thank-div">
        <button onclick="location.href=`thankyou.php`;">
          Thank You
        </button>
      </div>
    </div>
  </div>
</header>'

?>
