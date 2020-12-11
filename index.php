<?php 
    include_once "headerprototype.php";
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
                <a href="yogaprototype.php">
                    <img src="images/yoga3.png"><br>
                    <h1>Yoga</h1>
                </a>
            </div>
            <div class="categ">
                <a href="fitness.php">
                    <img src="images/fitness2.png"><br>
                    <h1>Fitness</h1>
                </a>
            </div>
            <div class="categ">
                <a href="bodybuilding.php">
                <img src="images/fitness.png"><br>
                    <h1>Body Building</h1>
                </a>
            </div>
    </div>

<?php
    include_once "footer.php";
?>