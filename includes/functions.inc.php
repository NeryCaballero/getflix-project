<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// empty() PHP built-in function, Check whether a variable is empty. Also check whether the variable is set/declared:

function emptyInputSignUp($name, $email, $username, $password, $passwordRepeat){                                    
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)){           // IF 1 or more of our inputs is/are empty
        $result = true;                                                                                             // emptyInputSignUp() result is true.
    }
    else {
        $result = false;                                                                                            // otherwise, result is false.
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){                // preg_match() PHP built-in function, returns whether a match was found in a string.
        $result = true;                                             // if there is any characters other than a-z A-Z 0-9, we have an error.
    }
    else{
        $result = false;                                            // otherwise all good.
    }
    return $result;
}                                    

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){                // filter_var() PHP built-in function, Filters a variable with a specified filter. 
        $result = true;                                             // FILTER_VALIDATE_EMAIL: Validates whether the value is a valid e-mail address.
    }
    else{
        $result = false;
    }
    return $result;
}       

function pwdMatch ($password, $passwordRepeat){
    $result;
    if($password !== $passwordRepeat){                              // IF password is NOT equal to passwordRepeat
        $result = true;                                             // we have an error == result of pwdMartch() is true
    }
    else{
        $result = false;                                            // otherwise, all good.
    }
    return $result;
}


function uidExists($conn, $username, $email){                                   // Syntax: SELECT column1, column2, ...   FROM table_name  WHERE condition; > WHERE : clause is used to extract only those records that fulfill a specified condition.the usersUid and usersEmail

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";         // SELECT , * = ALL , FROM 'users' table , WHERE usersUid is ? (placeholder) OR usersEmail is ? (placeholder) > "userUid" and "usersEmail" are EXIATING columns in our users table.
    $stmt = mysqli_stmt_init($conn);                                            // prepared statement prevents from  SQL injection, SQL injection is the placement of malicious code in SQL statements, via web page input. 
    if(!mysqli_stmt_prepare($stmt,$sql)) {                                      // mysqli_stmt_prepare() function prepares an SQL statement for execution => so this run the statement $stmt inside the database and see if it returns an error
        header("location: ../signup.php?error=stmtfailed");                     // IF theres an error, redirect user to sign up page with an "statement failed" error.
        exit();                                                                 // and Exit the script.
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);                     // Binds variables to a prepared statement as parameters takes 2 mandatories parameters: statement and the type (s for string)(one 's' per string)
    mysqli_stmt_execute($stmt);                                                 // execute the prepared query

    $resultData = mysqli_stmt_get_result($stmt);                                // Grab the data from the database

    if($row = mysqli_fetch_assoc($resultData)) {                                // checks if username and email are already used/stored in database
        return $row;                                                            // if no match, data is stored inside $row variable to store it after in database

    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);                                                   // Close the statement
}

function createUser($conn, $name, $email, $username, $password){                                        // Syntax : INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);

    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?);";          // INSERT , INTO 'users' (COLUMN 1 2 3 4) (they must match exact name and order as in the table) VALUES (?, ?, ?, ?); (one '?' per value as placeholder).
    $stmt = mysqli_stmt_init($conn);                                                                    // prepared statement prevents from  SQL injection, SQL injection is the placement of malicious code in SQL statements, via web page input. 
    if(!mysqli_stmt_prepare($stmt,$sql)) {                                                             // mysqli_stmt_prepare() function prepares an SQL statement for execution => so this run the statement $stmt inside the database and see if it returns an error
        header("location: ../signup.php?error=stmtfailed");                                             // IF theres an error, redirect user to sign up page with an "statement failed" error.
        exit();                                                                                         // and Exit the script.
    }

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);                                         // password_hash() creates a new password hash using a strong one-way hashing algorithm. PASSWORD_DEFAULT - Use the bcrypt algorithm (default as of PHP 5.5.0). Note that this constant is designed to change over time as new and stronger algorithms are added to PHP
    
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashPassword);                     // Binds variables to a prepared statement as parameters takes 2 mandatories parameters: statement and the type (s for string)(one 's' per string)
    mysqli_stmt_execute($stmt);                                                                         // execute the prepared query
    mysqli_stmt_close($stmt);                                                                           // Close the statement
    header("location: ../signup.php?error=none");                                                       // Redirect user to signup page , with no error message.
    exit();                                                                                             // and Exit the script.

}

function emptyInputLogin($username, $password){                                    
    $result;
    if (empty($username) || empty($password)){           // IF 1 or more of our inputs is/are empty
        $result = true;                                  // emptyInputLogin() result is true.
    }
    else {
        $result = false;                                 // otherwise, result is false.
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false){                                      // IF user does not exists
        header("location: ../login.php?error=usernotfound");          // Redirect user to log in page with an error message
        exit();                                                     // and exit the script.
    }

    $pwdHashed = $uidExists['usersPwd'];                            // Store the hashed pwd in variable $pwdHashed for verification.
    $checkPwd = password_verify($pwd, $pwdHashed);                  // password_verify() verifies that the given password matches the hashed pwd on the database.

    if ($checkPwd === false){                                       // IF passwords do not match
        header("location: ../login.php?error=incorrectpassword");   // Redirect user to log in page with an error message 
        exit();                                                     // and exit the script.
    }
    else if ($checkPwd === true){                                   // IF passwords match
        session_start();                                            // start session
        $_SESSION["userid"] = $uidExists["usersId"];                // store userid (database unique id)
        $_SESSION["useruid"] = $uidExists["usersUid"];              // store useruid (username)
        header("location: ../index.php");                           // Redirect user to home page
        exit();                                                     // and exit the script.
    }
    
}