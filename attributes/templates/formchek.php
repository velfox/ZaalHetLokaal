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
    $avond = 0;
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
    if (isset($_POST['arragamentPakket'])){
        $pakket = mysqli_escape_string($db, $_POST['arragamentPakket']);
        $pakket = intval($pakket);  
    }

    $personen = mysqli_escape_string($db, $_POST['personen']);
    $naam = mysqli_escape_string($db, $_POST['naam']);
    $achternaam = mysqli_escape_string($db, $_POST['achternaam']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $tel =  mysqli_escape_string($db, $_POST['tel']);
    // soort arragement
    $tracefield = mysqli_escape_string($db, $_POST['tracefield']);
    $option =  $tracefield;
    echo($option);

    //Require the form validation handling
    require_once "./attributes/templates/form-validation.php";

    if (empty($errors)) {
        //Store image & retrieve name for database saving

        //Save the record to the database
        $query = "INSERT INTO persoon
              (naam, achternaam)
                VALUES ('$naam', '$achternaam')";
        // $result = mysqli_query($db, $query);

        if ($db->query($query) === TRUE) {
            $last_id = $db->insert_id; 
        } 

        echo "New record created successfully. Last inserted ID is: " . $last_id;

        $query = "INSERT INTO reservering
                  (dag, dagdeelm, dagdeelo, dagdeela, personen, arragement, persoon_id)
                  VALUES ('$datum', $middag, '$ochtend', '$avond', '$personen', '$option', '$last_id')";
        if ($db->query($query) === TRUE) {
            $last_id2 = $db->insert_id; 
            $result = TRUE;
        } 

        
        //plaats geselecteerde id van pakket in koppel tabel
            if(isset($pakket)){
                $query = "INSERT INTO aanvulling_reservering
                (aanvulling_id, reservering_id)
                VALUES ('$pakket', $last_id2)";
                $result = mysqli_query($db, $query);
            }
        
            //plaats exstra opties in de kopple tablel
            if (isset($_POST['arragamentPakketAanvulling'])) {
                echo('ok?');
                foreach ($_POST['arragamentPakketAanvulling'] as $aanvulling) {
                    $aanvulling = mysqli_real_escape_string($db, $aanvulling);
                    $query = "INSERT INTO aanvulling_reservering
                    (aanvulling_id, reservering_id)
                    VALUES ('$aanvulling', $last_id2)";
                    $result = mysqli_query($db, $query);
                    echo ($query);
                }
            }

        if ($result) {
            //Set success message & empty all variables for new form
            $datum = '';
            $personen = '';
            $naam = '';
            $achternaam = '';
            $naam = '';
            $dagdeel = '';
            $tel = '';
            $email = '';
            $success = true;
            $successid = $last_id2;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        
    }
}
?>
