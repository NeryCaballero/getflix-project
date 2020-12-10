<?php 
    include_once "dbh.inc.php";
    include_once "headerprototype.php";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!-- ADD IF SESSION IS NOT STARTED -->

<!-- ADD IF SEESSION IS STARTED -->

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search . . .">
    <select name="subcategories">                               
        <option name="subcategory" value="Hatha">Hatha</option>     
        <option name="subcategory" value="Vinyasa">Vinyasa</option>
        <option name="subcategory" value="Ashtanga">Ashtanga</option>
    </select>
    <button type="submit" name="submit-search">Search</button>
</form>

<h1>MAIN SPORT Page</h1> WE GANNA HAVE 3
<h2>All Videos</h2>

<div class="video-container">
    <?php 
        include_once "includes/dbh.inc.php";
        $sql = "SELECT * FROM gallery;";                        // WHERE category is YOGA, FITNESS< B-BUILDING
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo '<div>
                <iframe width="724" height="407" src="' .$row['video_link']. '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="para">' .$row['video_title']. '</p>
                </div>';
            }
        }
    ?>
</div>




<?php 
    include_once "footer.php";
?>










<!-- 

<div class="bg">
    <h3></h3>

    <form method="GET" action="yogaprototype.php">
    <input id="table_filter" name="searchInput" type="text" class="form-control" aria-label="Text input with segmented button dropdown">
    <label for="subcategories">Choose:</label>
    <select name="subcategories">                               
        <option name="subcategory" value="Hatha">Hatha</option>     
        <option name="subcategory" value="Vinyasa">Vinyasa</option>
        <option name="subcategory" value="Ashtanga">Ashtanga</option>
    </select>

    <button method="GET" type="submit" name="search">Search</button>

    