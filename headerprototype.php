<?php 
      session_start();
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>...::: Sweatish :::...</title>

    <link rel="stylesheet" href="headerstyle.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="footerstyle.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;703;800;900&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
      <div id="visible-bar-container">
        <div id="toggle">
          <button id="toggleBtnOpen"><i class="fas fa-bars"></i></button>
          <div id="brand"><p>SWEATISH</p></div>
        </div>
      </div> 
      <nav id="hidden-menu">

        <div id="menu-soc-media"> 
          <button id="toggleBtnClose"><i class="fas fa-times"></i></button>
          <div id="soc-media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div id="menu-options">

          <div class="menu-item"><a href="index.php"><i class="fas fa-home"></i><br><br>HOME</a></div>

          <?php
            if (isset($_SESSION["useruid"])){
              echo '<div class="menu-item"><a href="index.php"><i class="fas fa-dumbbell"></i><br><br>SPORTS</a></div>';        //ADD CORRECT LINK
              echo '<div class="menu-item"><a href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i><br><br>LOG OUT</a></div>';
            }
            else {
              echo '<div class="menu-item"><a href="signup.php"><i class="fas fa-user-plus"></i><br><br>SIGN UP</a></div>';
              echo '<div class="menu-item"><a href="login.php"><i class="fas fa-sign-in-alt"></i><br><br>LOG IN</a></div>';
            }
          ?>

          <div class="menu-item"><a href="contactprototype.php"><i class="far fa-paper-plane"></i><br><br>CONTACT</a></div>
        
        </div>
      </nav>
    </header>