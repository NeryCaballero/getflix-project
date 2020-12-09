<?php 
    include_once "headerprototype.php";
?>

<div class="bg">
    <!--container-fluid is used to get the content goes from left side to right side -->
    <div class="container-fluid">

        <!-- Search / Filter -->
        <div class="row searchFilter">
            <div class="col-sm-4">
                <div class="input-group">
                    <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="category_filters">
                                <li>
                                    <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio"><label for="all">All</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Design" value="Design"><label class="category-label" for="Design">WeightLifting</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Marketing" value="Marketing"><label class="category-label" for="Marketing">Full-body Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Programming" value="Programming"><label class="category-label" for="Programming">Yoga For Strength</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Sales" value="Sales"><label class="category-label" for="Sales">Boxing Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Shoulder Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Leg Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Chest Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Running</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Body Balance</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Sprint Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Pilates Workout</label>
                                </li>
                                <li>
                                    <input type="radio" name="radios" id="Support" value="Support"><label class="category-label" for="Support">Antigravity Yoga</label>
                                </li>
                            </ul>
                        </div>
                        <button id="searchBtn" type="button" class="btn btn-secondary btn-search"> <span class="label-icon" >Search</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
                xs - mobile
                sm - tablets
                md - desktops
                lg - larger desktops -->
    <div class="row">
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/-d-fF1Nx2bQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Arm Workout-1</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/S5kOK3bxfro" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Arm Workout-2</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/pl6KSCbL5ns" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Arm Workout-3</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/MQMD9jhYeHU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Arm Workout-4</p>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/ZtlH0A5dlLg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Chest Workout-1</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/0L6ctFTm5Y0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Chest Workout-2</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/ER2TioYlZpA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Chest Workout-3</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/eVG-KfxPPbk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Chest Workout-4</p>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/LWdhO_OMrHk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Leg Workout-1</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/rbnKplIjbFI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Leg Workout-2</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/0KooCExq09Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Leg Workout-3</p>
        </div>
        <div class="col-sm-3">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="724" height="407" src="https://www.youtube.com/embed/rOxlw2VMSDw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p class="para">Leg Workout-4</p>
        </div>
    </div>
    </div>
    <!--Latest compiled and minified Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!--Latest compiled and minified Java script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </div>

<?php 
        include_once 'footer.php'; 
?>