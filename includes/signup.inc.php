<?php

// isset() function checks whether a variable is set. 
// header() build in function in PHP, used to redirect from one web page to another web page in PHP.
// require_once is used to embed PHP code from another file.
// exit() stop the script from running

if(isset($_POST['submit'])){                // $_POST is a superglobal variable, if submit is set then :
    
    $name = $_POST['name'];                 // we store here all the data that the users inputs inside variables
    $email = $_POST['email'];               // don't forget to sanitize and validation
    $username = $_POST ['username'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    require_once 'dbh.inc.php';             // makes the connexion with these files
    require_once 'functions.inc.php';       // functions.inc.php stores all the function we will use

    //  condition to check if any input is empty

    if (emptyInputSignUp ($name, $email, $username, $password, $passwordRepeat) !== false ){        // IF emptyInput returns NOT false,
        header("location: ../signup.php?error=emptyinput");                                         // send user back to signup page with an error message
        exit();                                                                                     // and exit the script.
    };

    //  validation of inputs 
    
    if (invalidUid ($username) !== false ){                                                         // IF invalidUid returns NOT false,
        header("location: ../signup.php?error=invalidUid");                                         // send user back to signup page with an error message
        exit();                                                                                     // and exit the script.
    };

    if (invalidEmail ($email) !== false ){                                                          // IF invalidEmail returns NOT false,
        header("location: ../signup.php?error=invalidEmail");                                       // send user back to signup page with an error message
        exit();                                                                                     // and exit the script.
    };

    if (pwdMatch ($password, $passwordRepeat) !== false ){                                          // IF pwdMatch returns NOT false,
        header("location: ../signup.php?error=passwordsdontmatch");                                 // send user back to signup page with an error message
        exit();                                                                                     // and exit the script.
    };
    
    if (uidExists ($conn, $username, $email) !== false ){                                           // IF uidExists returns NOT false,
        header("location: ../signup.php?error=usernametaken");                                      // send user back to signup page with an error message
        exit();                                                                                     // and exit the script.
    };

    // IF WE HAVE TIME CHECK FOR STRONG ENOUGH PASSWORD. 

    //If everything is good, then we create the user and store it inside the database

    createUser($conn, $name, $email, $username, $password);                                         // IF none of the previos conditions return NOT false, alors create user. 
}   

else {
    header("location: ../signup.php");      // brings back the user to the signup page
    exit();
} 