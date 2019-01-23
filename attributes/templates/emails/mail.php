<?php
$to = "$email";
$subject = "Reservering Zaal het Lokaal";
$headers = '';
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = "<p> Beste, <bold> $naam, </bold > </p> 
            <p>Uw reservering is ontvangen en wordt in behandeling genomen.</p><br>
            <p>Binnen 2 werkdagen ontvangt u van ons een reactie. </p><br>
            <table style='width:20%'>
                <tr>
                    <th>Zaal het Lokaal</th>
                    <td>Heicop 24C</td>
                    <td>3628 AJ Kockengen</td> 
                    <td>0346241720</td>
                </tr>
            </table>
";


$headers .= 'From: <geenantwoord@velfox.nl>' . "\r\n";
$headers .= 'Cc: tim@velfox.nl' . "\r\n";


mail($to, $subject, $message, $headers);

$to = "timedevos@gmail.com";
$subject = "Nieuwe Reservering Zaal het Lokaal";

$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<p> Hallo, <bold> Richard, </bold > </p> 
            <p>Er is een nieuwe reservering.</p><br>
            <p> <a href='https://zaalhetlokaal.velfox.nl/dashboard.php'></a> klik hier om website te openen </p><br>
";


$headers .= 'From: <geenantwoord@velfox.nl>' . "\r\n";
$headers .= 'Cc: tim@velfox.nl' . "\r\n";

mail($to, $subject, $message, $headers);


?>