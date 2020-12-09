<?php 
    include_once "headerprototype.php";
?> 

<div class="formContainer1">

    <div class="signup">
        <form action="includes/signup.inc.php" method="POST">

<!-- error handling-->
    <?php
    if (isset($_GET["error"])) {                                     
        if ($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Fill in all fields!</p>";
        }

        else if($_GET["error"] == "invalidUid") {
            echo "<p class='error'>Choose a proper username!</p>";
        }

        else if($_GET["error"] == "invalidEmail") {
            echo "<p class='error'>Choose a proper email!</p>";
        }

        else if($_GET["error"] == "passwordsdontmatch") {
            echo "<p class='error'>Password doesn't match!</p>";
        }

        else if($_GET["error"] == "usernametaken") {
            echo "<p class='error'>User already exists :) Try Logging in.</p>";
        }

        else if($_GET["error"] == "stmtfailed") {
            echo "<p class='error'>Something went wrong. Try again!</p>";
        }

        else if($_GET["error"] == "none") {
                    echo "<p class='error'>You have successfully signed up!</p>";
                }
            }
        ?>

        <!-- form input -->

            <input class="signupInput" type="text" name="name" placeholder = "Full Name:"></br>
            <input class="signupInput"type="text" name="email" placeholder = "Email:"></br>
            <input class="signupInput"type="text" name="username" placeholder = "Username:"></br>
            <input class="signupInput"type="password" name="password" placeholder = "Password:"></br>
            <input class="signupInput"type="password" name="passwordRepeat" placeholder = "Repeat Password:"></br>
            <button class="formbutton" type="submit" name="submit">Register</button>

        </form>
    </div>

</div>
<?php 
    include_once 'footer.php'; 
?>
