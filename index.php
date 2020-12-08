<?php 
    include_once "headerprototype.php";
    
    if (isset($_SESSION["useruid"])){
        echo "<p> Hello " .$_SESSION["useruid"] . "</p>";
    }
?>
    <div id="welcome" class="section">     
        <p>S</p>        
    </div>

    <div id="spaceforthevideo" class="section">
    <p>our awesome video<br>goes here</p>
    </div>

    <div id="categories">  
            <div class="categ">
                <img src="images/yoga.svg">
                <h1>Yoga</h1>
            </div>
            <div class="categ">
                <img src="images/yoga.svg">
                <h1>Fitness</h1>
            </div>
            <div class="categ">
                <img src="images/yoga.svg">
                <h1>BodyBuilding</h1>
            </div>
    </div>

<?php
    include_once "footer.php";
?>