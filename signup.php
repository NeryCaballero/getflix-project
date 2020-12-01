<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweatish Website</title>
</head>


<body>

<?php

    ?> 

    <div id="signup">
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder = "Full Name">
            <input type="text" name="email" placeholder = "Email">
            <input type="text" name="username" placeholder = "User Name">
            <input type="password" name="password" placeholder = "password">
            <input type="password" name="passwordRepeat" placeholder = "Repeat password">
            <button type="submit" name="submit"> Sign Up </button>
        </form>
    
        <?php
            if (isset($_GET["error"])) {                                     
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }

                else if($_GET["error"] == "invalidUid") {
                    echo "<p>Choose a proper username!</p>";
                }

                else if($_GET["error"] == "invalidEmail") {
                    echo "<p>Choose a proper email!</p>";
                }

                else if($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Password doesn't match!</p>";
                }

                else if($_GET["error"] == "usernametaken") {
                    echo "<p>User already exists :) Try Logging in.</p>";
                }

                else if($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong. Try again!</p>";
                }

                else if($_GET["error"] == "none") {
                    echo "<p>You have successfully signed up!</p>";
                }
            }
        ?>
    </div>

    <?php 
        include_once 'footer.php'; 
    ?>

</body>
</html>