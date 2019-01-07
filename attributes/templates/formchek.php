<?php


//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require database in this file
    require_once "./attributes/templates/dbcon.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
    // basic gegevens
    $datum = mysqli_real_escape_string($db, $_POST['datum']);
    $ochtend = mysqli_escape_string($db, $_POST['ochtend']);
    $middag = mysqli_escape_string($db, $_POST['middag']);
    $avond = mysqli_escape_string($db, $_POST['avond']);
    $personen = mysqli_escape_string($db, $_POST['personen']);
    $naam = mysqli_escape_string($db, $_POST['naam']);
    $achternaam = mysqli_escape_string($db, $_POST['achternaam']);
    // soort arragement
    $tracefield = mysqli_escape_string($db, $_POST['tracefield']);
    $option =  $tracefield;

    //Require the form validation handling
    require_once "./attributes/templates/form-validation.php";
 

    if (empty($errors)) {
        //Store image & retrieve name for database saving

        //Save the record to the database
        $query = "INSERT INTO albums
                  (dag, personen, voornaam, achternaam, dagdeelo, dagdeela, dagdeelm)
                  VALUES ('$datum', $personen, '$naam', '$achternaam', $ochtend, $avond, $middag)";
        $result = mysqli_query($db, $query);

        if ($result) {
            //Set success message & empty all variables for new form
            $datum = '';
            $personen = '';
            $naam = '';
            $achternaam = '';
            $ochtend = '';
            $avond = '';
            $middag = '';
            $naam = '';
            $success = true;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
} else { 
    //chek if option is set
    if (empty($_GET["option"])) {
        if (!empty($_GET["tracefield"])){

        } else {
            header('Location: mogelijkheden.php');
            exit;
        }

    } else {
        $option = htmlspecialchars($_GET["option"]);
    }
}
?>
