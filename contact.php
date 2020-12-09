<?php 
    include_once "headerprototype.php";
?> 


<div class="formContainer3">

    <div class="signup">

        <form method="POST" action ="includes/contact.inc.php" id="contactform">

<!-- error handling -->
        <?php
            if (isset($_GET["error"])) {                                     
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='error'>Fill in all fields!</p>";
                }

                else if($_GET["error"] == "invalidEmail") {
                    echo "<p class='error'>Choose a proper email!</p>";
                }

                else if($_GET["error"] == "none") {
                    echo "<p class='error'>Your Message has been send</p>";
                }
            }
        ?>

        <!-- form input -->

            <input class="signupInput" type="text" name="name" placeholder = "Full Name:"></br>
        
            <input class="signupInput"type="text" name="email" placeholder = "Email:"></br>
    
            <textarea id="message" name="message" form="contactform" placeholder ="Your message..."></textarea></br>

            <button class="formbutton" type="submit" name="submit">Contact Us </button>

        </form>
    </div>
</div>

<?php 
        include_once 'footer.php'; 
?>
