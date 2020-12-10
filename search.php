<?php 
    include_once "includes/dbh.inc.php";
    include_once "headerprototype.php";
    

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search . . .">
    <select name="subcategories">                             
        <option value="Hatha">Hatha</option>     
        <option value="Vinyasa">Vinyasa</option>
        <option value="Ashtanga">Ashtanga</option>
        <option value="Upperbody">UpperBody</option>     
        <option value="Core">Core</option>
        <option value="Lowerbody">LowerBody</option>
        <option value="Arms">Arms</option>     
        <option value="Chest">Chest</option>
        <option value="Legs">Legs</option>
    </select>
    <button type="submit" name="submit-search">Search</button>
</form>



<div class=" video-container">

<?php 

    if(isset($_POST['submit-search'])){

        $filter= $_POST['subcategories'];

        $search = mysqli_real_escape_string($conn,$_POST['search']);

        if (empty($search)){
            $sql = "SELECT * FROM gallery WHERE video_subcategory = '$filter';"; 
        }

        if (!empty($search)){ 
            $sql = "SELECT * FROM gallery WHERE video_title LIKE '%$search%'AND video_subcategory = '$filter';";
        } 

                           // WHERE category is YOGA, FITNESS< B-BUILDING
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo '<div>
                <iframe width="724" height="407" src="' .$row['video_link']. '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p class="para">' .$row['video_title']. '</p>
                </div>';
            }
        } else {
            echo "There are no results matching your search!";
        }
    };

    ?>

</div>



<?php 
    include_once "footer.php";
?>