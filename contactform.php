<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["email"];
    $message = $_POST["message"];

    $mailTo = "support@danducvira.ca";
    $headers = "From: " . mailFrom;
    $txt = "Your have received an email from" . $name . ". \n\n" . $message;

    mail($mailTo, $txt, $headers);

    header("Location: index.html?mailsend");

}
