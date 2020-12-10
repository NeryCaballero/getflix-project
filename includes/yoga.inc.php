

<?php 

include_once "dbh.inc.php";

if (isset($_SESSION["useruid"])){

    if(isset($_GET['search'])){ 

        // header("location: index.php");

        $searchInput = $_GET['searchInput'];    // SANITIZE VALIDATE 
        $subcategory = $_GET['subcategories'];


        if (empty($searchInput)){
            $sql = "SELECT * FROM gallery WHERE video_subcategory = $subcategory;"; 
        }

        if (!empty($searchInput)){ 
            $sql = "SELECT * FROM gallery WHERE video_subcategory = $subcategory AND video_title LIKE $searchInput;";
        } 

        $result = mysqli_query($conn, $sql);     
        
        // if ($result = false){
        //     echo "<h3> NO RESULTS </h3>";
        // }


            while ($dataRow = mysqli_fetch_assoc($result)) {                                                                                                                                
                echo "<h3>".$dataRow."</h3>";
                echo '<div class="col-sm-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="724" height="407" src="' . $data[video_link] . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="para">' . $data[video_title] . '</p>
                </div>';
            } 

        







        // if ($result = mysqli_query($conn, $sql)) {

        //     /* obtener array asociativo */
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
        //     }

        //     /* liberar el conjunto de results */
        //     mysqli_free_result($result);
        // }

        // /* cerrar la conexión */
        // mysqli_close($link);
     





        
        // else {
        //     echo "0 results";
        // }

        mysqli_close($conn);

    }

    
    // else {
    
        //display all

    // }

}

// else {
//     header("location: ../index.php");
//     exit();
    
// }





?>