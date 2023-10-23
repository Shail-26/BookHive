<?php
session_start();
$email = $_SESSION['email'];

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: login.php");
    exit;
}

$message = '';
$isBook = false;

include '_dbconnect.php';

$query = "SELECT * FROM `favourites` WHERE email = '$email'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0) {
  $isBook = true;
}

if(isset($_POST['favorites-btn'])){
    $book_id = $_POST['book_id'];
    $book_image = $_POST['book_image'];
    $book_pdf = $_POST['book_pdf'];
    $book_title = $_POST['book_title'];
    $book_author = $_POST['book_author'];
    $book_desc = $_POST['book_desc'];

    $select_fav = mysqli_query($conn, "SELECT * FROM `favourites` WHERE id='$book_id' AND email='$email'") or die('query failed');

    if(mysqli_num_rows($select_fav) > 0) {
        $message = 'Book already added to favourites!';
    } else {
        mysqli_query($conn, "INSERT INTO `favourites`(email, id, image, pdf, title, author, description) VALUES ('$email', '$book_id', '$book_image', '$book_pdf', '$book_title', '$book_author', '$book_desc')") or die('query failed');
        $message = 'Book added to favourites...';
    }
}

$fav_query = mysqli_query($conn, "SELECT * FROM `favourites` WHERE email='$email'") or die('query failed');

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `favourites` WHERE id = '$remove_id'") or die('query failed');
    header('location: myLibrary.php');
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
    <link rel="stylesheet" href="styles/store.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="styles/scroll-top.css?v=<?php echo time(); ?>" />
    <script src="https://kit.fontawsome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Library</title>
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

    <p class="all-books">Favourite Books</p>
    <hr>
    <?php
        echo $message;
        if(!$isBook) {
          echo "<p>Kindly save books to your favorites to view them in this section.</p>";
        }
    ?>
    <div class="grid-container js-book-grid">
    <?php 
        if(mysqli_num_rows($fav_query) > 0) {
            while($fetch_fav = mysqli_fetch_assoc($fav_query)){
    ?>
    <div class="grid-item">
        <img src="<?php echo $fetch_fav['image']?>" alt="Image <?php echo $fetch_fav['id']?>" id="image<?php echo $fetch_fav['id']?>">
        <div class="Btn-div">
          <button class="Btn read-online-btn" onclick="location.href=`<?php echo $fetch_fav['pdf']?>`">
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
          <a href="<?php echo $fetch_fav['pdf']?>" download="<?php echo $fetch_fav['title']?>" style="text-decoration:none; display : inline">
            <button class="Btn download-btn">
              <span class="svgContainer">
                <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M6 20h12M12 4v12m0 0l3.5-3.5M12 16l-3.5-3.5" />
                </svg>
                <span class="BG"></span>
                <div class="tooltip">Download</div>
            </button>
          </a>
          <a href="myLibrary.php?remove=<?php echo $fetch_fav['id']; ?>">
            <button class="Btn favorites-btn" type="submit" name="favorites-btn">
                <span class="svgContainer">
                <svg width="512" height="512" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#000000" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53L12 21.35Z"/>
                </svg>
                <span class="BG"></span>
                <div class="tooltip">Favorite</div>
            </button>
         </a>
        </div>
      </div>
    <?php 
            }
        } 
    ?>


    </div>
    <script>
            setTimeout(function() {
              // Your code to be executed after 3 seconds
                document.querySelector('.search-container').style.display = 'none';
            },100);
    </script>
</body>
</html>