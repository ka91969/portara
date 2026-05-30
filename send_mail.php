<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to      = "info@fabnaxosvillas.gr";
    $name    = htmlspecialchars($_POST["name"]);
    $from    = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $from\r\nReply-To: $from";
    mail($to, $subject, "From: $name\n\n$message", $headers);

    header("Location: contact.html?success=1");
}
?>
