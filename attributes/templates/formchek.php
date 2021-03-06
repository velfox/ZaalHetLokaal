<?php
require_once "./attributes/templates/dbcon.php";

if (isset($_GET['option'])){
            $option = $_GET['option']; 
            $option = mysqli_real_escape_string($db, $option);
        if(empty($option)) {
            header('Location: mogelijkheden.php'); 

        }
        if( !($option == "bbq" || $option == "buffet" || $option == "catering" || $option == "lunch" || $option == "receptie" || $option == "vergadering" || $option == "HighTea" || $option == "kookworkshop")){
            header('Location: mogelijkheden.php'); 
            
        }
        } else {
            header('Location: mogelijkheden.php');
        }
        //Check if Post isset, else do nothing
        if (isset($_POST['submit'])) {

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
        

            $dagdeel = 0;
            $ochtend = 0;
            $middag = 0;
            $avond = 0;
            $pakket = 0;
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

            //Require the form validation handling
            require_once "./attributes/templates/form-validation.php";

            if (empty($errors)) {
                //Store image & retrieve name for database saving

                //Save the record to the database
                $query = "INSERT INTO persoon
                    (naam, achternaam, email, tel)
                        VALUES ('$naam', '$achternaam', '$email', '$tel')";
                // $result = mysqli_query($db, $query);

                if ($db->query($query) === TRUE) {
                    $last_id = $db->insert_id; 
                } 

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
                        foreach ($_POST['arragamentPakketAanvulling'] as $aanvulling) {
                            $aanvulling = mysqli_real_escape_string($db, $aanvulling);
                            $query = "INSERT INTO aanvulling_reservering
                            (aanvulling_id, reservering_id)
                            VALUES ('$aanvulling', $last_id2)";
                            $result = mysqli_query($db, $query);
                        }
                    }

                    //sendemails
                    include_once('./email-reservering.php');

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
                
                    } else {
                        $errors[] = 'Recaptcha Fout. Probeer het later opnieuw.';
                        if ($return['error-codes'][0] == "timeout-or-duplicate"){
                            $errors[] = 'Het formulier is al verzonden.';
                        }
                }
            }
}
?>
