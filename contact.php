<!DOCTYPE html>
<html>
<head>
    <title>100 Women Who Care - Contact</title>
    <style>
        #main div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        img{
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
<div id="main">
    <div id="main-header">
        <h2>Thank You!</h2>
    </div>
    <div id="main-picture">
        <img src="images/confirm.png"/>
    </div>
    <div id="main-text">
        <p>We received your E-mail And we will reach out to you shortly!</p>
    </div>
</div>

<?php
$sender_email = $_POST["mail"];
$email_message = $_POST["message"];
$sender_fname = $_POST["first_name"];
$sender_lname = $_POST["last_name"];

$email_subject = "$sender_fname $sender_lname - 100 Women Who Care";

$to = "omar-yousef88@hotmail.com";
$subject = $email_subject;
$message = $email_message;

mail($to, $subject, $message);
mail($sender_email, "100 Women Who Care - We Received Your Message!", "Hi $sender_fname $sender_lname, Thanks for reaching out to 100 Women Who Care. We will contact you shortly!");
?>
</body>
