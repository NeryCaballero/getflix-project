
Pseudo code

IF session is started : if (isset($_SESSION["useruid"])){

    if SUBMIT btn is pressed

        $input = to the input => sanitize and validate

        $subcategory = the dropdown menu

        if $subcategory is not selected
            $subcategory = ALL = YOGA 

            if input is empty SELECT * FROM gallery WHERE Subcategory = $subcategory"
            if input is !empty SELECT * FROM gallery WHERE Subcategory = $subcategory" AND Title LIKE $input;
            Look into W3School select multiple conditions

        $sql = "SELECT * FROM gallery WHERE Subcategory = $subcategory" OR Category == $subcategory OR Title LIKE $input;       ASK PY : too complicated
        
        $result = mysqli_query($conn, $sql);  will return and array 

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {                                                                                                                                

                        echo 

                       SINGLEQUOTE <div class="col-sm-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="724" height="407" src=" SINGLEQUOTE . $data[video_link] . SINGLEQUOTE " frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p class="para"> SINGLEQUOTE . $data[video_title] . SINGLEQUOTE </p>
                        </div> SINGLEQUOTE

        }
        
        else {
                    echo "0 results";
        }

        mysqli_close($conn);
    }

    ELSE  {

        WE FETCH EVERYTHING. //display of all the video of the category

    }



    
ELSE {  // if not connected 
    
    // show a message to sign up + relocate to sign up
    
    
}
