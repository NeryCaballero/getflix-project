<?php 
    include_once "includes/dbh.inc.php";
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
        <option value="Arms">Arms</option>     
        <option value="Chest">Chest</option>
        <option value="Legs">Legs</option>
    </select>
    <button type="submit" name="submit-search">Search</button>
</form>



<div class="video-container">
    <?php 
        $sql = "SELECT * FROM gallery WHERE video_category = 'Body Building';";                        // WHERE category is YOGA, FITNESS< B-BUILDING
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

