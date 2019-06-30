<?php
$to = "timedevos@gmail.com";
$subject = "Nieuwe Reservering Zaal het Lokaal";

$name = "tim";

$message = "
<div class='email-background' style='background-color:#998675;padding-top:15px;padding-bottom:15px;padding-right:0px;padding-left:0px;' >
        <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
            <div class='logo' style='display:-webkit-box;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;width:fit-content;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;' ><div class='l1' style='font-size:2em;padding-top:15px;padding-right:10px;' > ZAAL </div> <div class='l2' style='font-size:3em;transition:all 1s;-webkit-transition:all 1s;' > | HET LOKAAL </div> </div>
        </div>
        <div class='email-container img' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;height:200px;background-image:url(https://files.velfox.nl/zaalhetlokaal/email-header.png);' > </div>
        <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                <div class='title-bar' style='max-width:1105px;display:flex;flex-direction:column;justify-content:space-evenly;background-color:#716358;color:#fff;padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;text-align:center;' > Bericht ontvangen. </div>
        </div>
        <div class='email-container' style='max-width:800px;background-color:#C7B299;margin-top:0;margin-bottom:0;margin-right:auto;margin-left:auto;' >
                <div class='text' style='background-color:#FAFAFA;padding-top:20px;padding-bottom:20px;padding-right:20px;padding-left:20px;color:#212121;' > Beste heer mevrouw, <br> <br> Uw bericht is ontvangen <br> Wij streven er naar om uw binnen 2 werkdagen een reactie te sturen.</div>
        </div>
        
        <div class='footerblok' style='text-align:center;color:#716358;' >
                <p class='title' style='font-size:20px;margin-bottom:2px;text-align:center;' > Zaal het Lokaal </p>
                <p>Heicop 24C 3628 AJ Kockengen Vast: 0346241720 mobiel: 0655331819 rhadevos@casema.nl</p>
        </div>
    </div>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <tim@velfox.nl>' . "\r\n";
$headers .= 'Cc: tim@velfox.nl' . "\r\n";

mail($to,$subject,$message,$headers);
?>