
<?php
$to = "timedevos@gmail.com";
$subject = "Reservering Zaal het Lokaal";
$headers .= 'From: <geenantwoord@velfox.nl>' . "\r\n";
$headers .= 'Cc: tim@velfox.nl' . "\r\n";

$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<p> Hallo <bold> $name, </bold >uw reservering is geplaast! </p>";


mail($to, $subject, $message, $headers);

?>