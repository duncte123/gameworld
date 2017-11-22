<?php
if( isset($_POST["n"], $_POST["e"], $_POST["m"]) ) {

    $name = $_POST['n']; //I should be using preg_replace to filter the data
    $email = $_POST['e'];
    $message = nl2br($_POST['m']);

    //Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid emailaddress.");
    }

    $to = $email; //We are sending the email to the user that has entered his/her email.
    $from = "gameworld@duncte123.me";
    $subject = 'Contact from on GameWorld';
    $mailMessage = '<p>This is a copy of the message send to GameWorld.</p>'
        .'<b>Name:</b> '.$name.' <br /><b>Email:</b> '.$email.' <p>'.$message.'</p>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $mailMessage, $headers) ){
        die("success");
    } else {
        die("The server failed to send the message. Please try again later.");
    }
} else {
    //error code
    die("Please fill in the full form.");
}