<?php

if (isset($_GET['option'])){
   $option = $_GET['option']; 
}
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require database in this file
    require_once "./attributes/templates/dbcon.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
    // basic gegevens
    $dagdeel = 0;
    $ochtend = 0;
    $middag = 0;
    $dagdeel = 0;
    $datum = mysqli_real_escape_string($db, $_POST['datum']);
    if (isset($_POST['ochtend'])){
        $ochtend = 1;
        $dagdeel = $dagdeel +1;
    }
    if (isset($_POST['middag'])){
        $middag = 1;
        $dagdeel = $dagdeel +1;
    } 
    if (isset($_POST['avond'])){
        $avond = 1;
        $dagdeel = $dagdeel +1;
    } 
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
        $query = "INSERT INTO reservering
                  (dag, personen, voornaam, achternaam)
                  VALUES ('$datum', $personen, '$naam', '$achternaam')";
        $result = mysqli_query($db, $query);

        if ($result) {
            //Set success message & empty all variables for new form
            $datum = '';
            $personen = '';
            $naam = '';
            $achternaam = '';
            $naam = '';
            $dagdeel = '';
            $success = true;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
}
?>
