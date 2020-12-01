<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweatish Website</title>
</head>
<body>
    




<div id="signup">
    <form action="includes/login.inc.php" method="POST">

        <input type="text" name="username" placeholder = "User Name / Email">
        <input type="password" name="password" placeholder = "password">
        <button type="submit" name="submit"> Log in </button>
    </form>

<?php

    if (isset($_GET["error"])) {                                     
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }

        else if($_GET["error"] == "usernotfound") {               // "usernotfound"           NOTE: match error value on functions.inc.php line 113 
            echo "<p>User not found!</p>";                        // "<p>User not found!</p>"
        }

        else if($_GET["error"] == "incorrectpassword") {          // NOTE: match error value on functions.inc.php line 121 
            echo "<p>Incorrect password!</p>";
        }
    }
    
?>
        </div>

</body>
</html>