<?php 
      session_start();
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>...::: Sweatish :::...</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <nav>
            <div class="nav-bar row">
                <a class="btn col col-xs-3" href="index.php">&#60Home/&#62</a>

                <?php

                  if (isset($_SESSION["useruid"])){

                    echo '<a class="btn col col-xs-3" href="profile.php">&#60Profile/&#62</a>';
                    echo '<a class="btn col col-xs-3" href="includes/logout.inc.php">&#60Logout/&#62</a>';
                  }

                  else{

                    echo '<a class="btn col col-xs-3" href="signup.php">&#60Sign Up/&#62</a>';
                    echo '<a class="btn col col-xs-3" href="login.php">&#60Log In/&#62</a>';
                  }
                ?>
                
                <a class="btn col col-xs-3" href="#contactme">&#60Contact/&#62</a>
            </div>
        </nav>
    </body>
    