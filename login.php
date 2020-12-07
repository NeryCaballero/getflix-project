<?php 
    include_once "header.php";

?> 


<div class="signup">
    <form action="includes/login.inc.php" method="POST">

        <input type="text" name="username" placeholder = "Username / Email:">
        <input type="password" name="password" placeholder = "Password:">
        <button type="submit" name="submit"> Log in </button>
    </form>
</div>

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


</body>
</html>