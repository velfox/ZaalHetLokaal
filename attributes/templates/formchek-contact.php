<?php
define('SITE_KEY', '6LcwLKsUAAAAANZ1p7fRoV1cvFe55dPwr9ccgRmf');
define('SERVER_KEY', '6LcwLKsUAAAAABdMBtGLU1JSjMbaMuB3lrms0J2W');

if (isset($_POST['g-recaptcha-response'])) {
    function getCaptcha($secretKey)
    {
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . SERVER_KEY . "&response={$secretKey}");
        $return = json_decode($response, true);
        return $return;
    }

    $return = getCaptcha($_POST['g-recaptcha-response']);
}

if ($return['success'] == true) {
    //Require database in this file
    require_once "./attributes/templates/dbcon.php";
    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $naam = mysqli_escape_string($db, $_POST['naam']);
    $achternaam = mysqli_escape_string($db, $_POST['achternaam']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $bericht =  mysqli_escape_string($db, $_POST['bericht']);

    //Require the form validation handling
    require_once "./attributes/templates/form-validation-contact.php";

    if (empty($errors)) {
        //sendemails
        include_once('./email-contact.php');
        //reset variables
        $naam = '';
        $achternaam = '';
        $naam = '';
        $bericht = '';
    }
} else {
    $errors[] = 'Recaptcha Fout. Probeer het later opnieuw.';
    if ($return['error-codes'][0] == "timeout-or-duplicate"){
        $errors[] = 'Het formulier is al verzonden.';
    }
}
?>