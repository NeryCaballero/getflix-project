<?php 
    include_once "header.php";

?> 

<div class="signup">

    <form action="includes/signup.inc.php" method="POST">

        <input class="signupInput" type="text" name="name" placeholder = "Full Name:"></br>
        <input class="signupInput"type="text" name="email" placeholder = "Email:"></br>
        <input class="signupInput"type="text" name="username" placeholder = "Username:"></br>
        <input class="signupInput"type="password" name="password" placeholder = "Password:"></br>
        <input class="signupInput"type="password" name="passwordRepeat" placeholder = "Repeat Password:"></br>

        <button type="submit" name="submit">Register</button>
    </form>
</div>

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

    <?php 
        include_once 'footer.php'; 
    ?>

</body>
</html>