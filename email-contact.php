<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.velfox.eu';                // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'geenantwoord@zaalhetlokaal.velfox.eu';                 // SMTP username
    $mail->Password   = 'kamerik34hacker';                         // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, ssl also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom("geenantwoord@zaalhetlokaal.velfox.eu", 'Zaal | het Lokaal');
    $mail->addAddress($email, 'timdevos');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Zaal het Lokaal Bericht ontvangen';
    $mail->Body    = " <div class='email-background' style='background-color:#998675;padding-top:15px;padding-bottom:15px;padding-right:0px;padding-left:0px;' >
            <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                <div class='logo' style='display:-webkit-box;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;width:fit-content;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;' ><div class='l1' style='font-size:2em;padding-top:15px;padding-right:10px;' > ZAAL </div> <div class='l2' style='font-size:3em;transition:all 1s;-webkit-transition:all 1s;' > | HET LOKAAL </div> </div>
            </div>
            <div class='email-container img' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;height:200px;background-image:(https://zaalhetlokaal.velfox.eu/attributes/img/mailheader.png);' > </div>
            <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                    <div class='title-bar' style='max-width:1105px;display:flex;flex-direction:column;justify-content:space-evenly;background-color:#716358;color:#fff;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;text-align:center;' > Bericht ontvangen. </div>
            </div>
            <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                    <div class='text' style='background-color:#FAFAFA;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;color:#212121;' > Beste $naam, <br> <br> Uw bericht is ontvangen <br> Wij streven er naar om uw binnen 2 werkdagen een reactie te sturen.</div>
            </div>
            
            <div class='footerblok' style='text-align:center;color:#716358;' >
                    <p class='title' style='font-size:20px;margin-bottom:2px;text-align:center;' > Zaal het Lokaal </p>
                    <p>Heicop 24C 3628 AJ Kockengen Vast: 0346241720 mobiel: 0655331819 rhadevos@casema.nl</p>
            </div>
        </div>
    ";

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$email = "timedevos@gmail.com"; 
try {
    //Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.velfox.eu';                // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'geenantwoord@zaalhetlokaal.velfox.eu';                 // SMTP username
    $mail->Password   = 'kamerik34hacker';                         // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, ssl also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom("geenantwoord@zaalhetlokaal.velfox.eu", 'Zaal | het Lokaal');
    $mail->addAddress('timedevos@gmail.com', 'timdevos');
    $mail->addAddress('rhadevos@casema.nl', 'timdevos');

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Bericht $naam Zaal het Lokaal";
    $mail->Body    = " <div class='email-background' style='background-color:#998675;padding-top:15px;padding-bottom:15px;padding-right:0px;padding-left:0px;' >
            <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                <div class='logo' style='display:-webkit-box;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;width:fit-content;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;' ><div class='l1' style='font-size:2em;padding-top:15px;padding-right:10px;' > ZAAL </div> <div class='l2' style='font-size:3em;transition:all 1s;-webkit-transition:all 1s;' > | HET LOKAAL </div> </div>
            </div>
            <div class='email-container img' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;height:200px;background-image:(https://zaalhetlokaal.velfox.eu/attributes/img/mailheader.png);' > </div>
            <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                    <div class='title-bar' style='max-width:1105px;display:flex;flex-direction:column;justify-content:space-evenly;background-color:#716358;color:#fff;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;text-align:center;' > Nieuw bericht van $naam. </div>
            </div>
            <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                    <div class='text' style='background-color:#FAFAFA;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;color:#212121;' > Naam: $naam, <br> email: $email <br><br> bericht:<br> $bericht </div>
            </div>
            
            <div class='footerblok' style='text-align:center;color:#716358;' >
                    <p class='title' style='font-size:20px;margin-bottom:2px;text-align:center;' > Zaal het Lokaal </p>
                    <p>Heicop 24C 3628 AJ Kockengen Vast: 0346241720 mobiel: 0655331819 rhadevos@casema.nl</p>
            </div>
        </div>
    ";

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
