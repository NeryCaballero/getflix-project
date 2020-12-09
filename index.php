<?php 
    include_once "headerprototype.php";
    
    if (isset($_SESSION["useruid"])){
        echo "<p> Hello " .$_SESSION["useruid"] . "</p>";
    }
?>
    <button id="scrollbutton"> <i class="fas fa-angle-double-up"></i> </button>
    <div id="welcome" class="section">     
        <p>S</p>        
    </div>

    <div id="spaceforthevideo" class="section">
        <video id="homepagevideo" class="video" muted>
            <source src="" type="video/mp4">
        </video>
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