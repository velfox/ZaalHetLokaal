<?php
$to = "timedevos@gmail.com";
$subject = "Nieuwe Reservering Zaal het Lokaal";

$name = "tim";

$message = "
<html>
<head>
<style>
<title>Reservering Zaal het Lokaal</title>
</head>
<body>
<p> Hallo vader, </p>
<p> $name heeft eeen reservering is geplaast! </p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <tim@velfox.nl>' . "\r\n";
$headers .= 'Cc: tim@velfox.nl' . "\r\n";

mail($to,$subject,$message,$headers);
?>