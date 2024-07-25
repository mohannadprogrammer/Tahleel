<?php 
session_start();
// echo $_SESSION['user_info']['email_user'];
if (!isset($_SESSION['user_info']) && $_SESSION['user_info']['type']!=1){
  echo "<script> window.location.href = './index.php'</script>";
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <!-- <link type='text/css' rel='stylesheet' href='./assets/css/mainen.css' /> -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/update.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li>
            <a href="mailto:tahleelgaferr111994@gmail.com" class="header-top-link">
              <ion-icon name="mail-outline"></ion-icon>

              <span>tahleelgaferr111994@gmail.com</span>
            </a>
          </li>

          <li>
            <a href="https://maps.app.goo.gl/WZsFDmcyXveAvFSk6" class="header-top-link" target="_blank">
              <ion-icon name="location-outline"></ion-icon>

              <address>43 10th St - Oud Metha - Dubai - United Arab Emirates</address>
            </a>
          </li>

        </ul>

        <div class="wrapper">
          <ul class="header-top-social-list">

            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="header-top-social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>
          <?php if (!isset ($_SESSION['user_info']['email_user'])) {?>
          <a href="./login.php" class="logo">
            <button class="header-top-btn">Login</button>
          </a>
          <?php } else {?>
            <a href="./admin_signout.php" class="logo">
            <button class="header-top-btn">Logout</button>
          </a>
          <?php }?>
        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <a href="#" class="logo">
          <img src="./assets/images/logovername.svg" alt="Tahleel logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logovername.svg" alt="Homeverse logo">
            </a>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <div class="navbar-bottom">
            <ul class="navbar-list">

              <li>
                <a href="./" class="navbar-link" data-nav-link>Home</a>
              </li>

              <li>
                <a href="./#about" class="navbar-link" data-nav-link>About</a>
              </li>

              <li>
                <a href="./#service" class="navbar-link" data-nav-link>Service</a>
              </li>

              <li>
                <a href="./#property" class="navbar-link" data-nav-link>Property</a>
              </li>

              <li>
                <a href="./#blog" class="navbar-link" data-nav-link>Blog</a>
              </li>

              <li>
                <a href="./contact.php" class="navbar-link" data-nav-link>Contact</a>
              </li>

            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">

          <!-- <button class="header-bottom-actions-btn" aria-label="Search">
            <ion-icon name="search-outline"></ion-icon>

            <span>Search</span>
          </button> -->
          <?php if (!isset ($_SESSION['user_info']['email_user'])) {?>
          <!-- <a href="./login.php" class="logo">
            <button class="header-top-btn">Login</button>
          </a> -->
          <?php } else {?>
            <a href="./profile.php" >
              <button class="header-bottom-actions-btn" aria-label="Profile" style="
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">
                <ion-icon name="person-outline"></ion-icon>

                <span>Profile</span>
          </button></a>
          <?php }?>
          

          <!-- <button class="header-bottom-actions-btn" aria-label="Cart">
            <ion-icon name="cart-outline"></ion-icon>

            <span>Cart</span>
          </button> -->

          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>

            <span>Menu</span>
          </button>

        </div>

      </div>
    </div>

  </header>


