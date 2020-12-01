
<?php 
    include_once "header.php";

    if (isset($_SESSION["useruid"])){

        echo "<p> Hello " .$_SESSION["useruid"] . "</p>";

    }

?>
    
    <div class="menu">
        <div class="submenu">
            <img src="images/wl.jpg" height="280" width="280">
            <h1>Weight Lifting</h1>
        </div>
        <div class="submenu2">
            <img src="images/yoga.jpeg" height="280" width="280">
            <h1>Yoga</h1>
        </div>
        <div class="submenu3">
            <img src="images/pilate.jpg" height="280" width="280">
            <h1>Pilate</h1>
        </div>
    </div>



</body>

</html>