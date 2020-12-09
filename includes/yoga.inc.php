<?php 

if (isset($_SESSION["useruid"])){

    if(isset($_POST['search'])){ 
        $searchInput = $_POST['searchInput'];    // SANITIZE VALIDATE 
        $subcategory = $_POST['radios'];


        if (empty($searchInput)){
            $sql = "SELECT * FROM gallery WHERE video_subcategory == $subcategory;"; 
        }

        if (!empty($searchInput)){ 
            $sql = "SELECT * FROM gallery WHERE video_subcategory == $subcategory AND video_title LIKE $searchInput;";
        } 

        $result = mysqli_query($conn, $sql);
        
        while ($dataRow = mysqli_fetch_assoc($result)) {                                                                                                                                
            echo $dataRow;
            echo '<div class="col-sm-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="724" height="407" src="' . $data[video_link] . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="para">' . $data[video_title] . '</p>
            </div>';
        } 
        
        else {
            echo "0 results";
        }

        mysqli_close($conn);

    }

    
    else {
    
        //display all

    }

}

else {
    header("location: ../index.php");
    exit();
    
}





?>