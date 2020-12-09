<?php


if(isset($_POST['submit'])){ //If button pressed

//1- sanitize => check if empty, if empty error message
    if (empty($_POST['fullname'])){
        header("location: ../contact.php?error=emptyinput"); 
        }
    else{
        $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING); //remove all tags to prevent SQL injection 
    }
    if (empty($_POST['email'])){
            header("location: ../contact.php?error=invalidEmail");
        } 
    else{ 
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['message'])){
        header("location: ../contact.php?error=emptyinput"); 
        }
    else{
        $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    };

//2- Validate => validate email format


if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //if email not valid => error 
    header("location: ../contact.php?error=invalidEmail"); ;
};


//3- Execution => will send an email to juliette address, with the title contact form and the content

$content = "$fullname <br/> $email </br> $message";

mail("juliette.palluel@gmail.com", "Contact Form", $content); //doesn't work on a localhost


}

?>
