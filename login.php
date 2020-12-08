<?php 
    include_once "headerprototype.php";
?> 


<div class="formContainer2">


    <div class="signup">

        <form action="includes/login.inc.php" method="POST">


<!-- error handling-->
<?php

if (isset($_GET["error"])) {                                     
    if ($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Fill in all fields!</p>";
    }

    else if($_GET["error"] == "usernotfound") {               // "usernotfound"           NOTE: match error value on functions.inc.php line 113 
        echo "<p class='error'>User not found!</p>";                        // "<p>User not found!</p>"
    }

    else if($_GET["error"] == "incorrectpassword") {          // NOTE: match error value on functions.inc.php line 121 
        echo "<p class='error'>Incorrect password!</p>";
    }
}
?>

        <!-- form input -->

            <input class="signupInput" type="text" name="username" placeholder = "Username / Email:">
            <input class="signupInput" type="password" name="password" placeholder = "Password:">
            <button type="submit" name="submit"> Log in </button>
            <span id="forgotten"><a href  ="#"> Forgotten Password </a></span>
    
        </form>
    </div>
</div>

<?php 
        include_once 'footer.php'; 
?>

</body>
</html>