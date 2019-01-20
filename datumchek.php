<?php

require_once "attributes/templates/dbcon.php";

$date = mysqli_escape_string($db, $_GET['date']);
$query = "SELECT * FROM reservering ";

$result = $db->query($query);

if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $dagnummer = $row["dag"];
        if($dagnummer == $date){
            $melding[] = "de gekozen datum is helaas niet beschikbaar";
        } else { 
            $melding[] = "de gekozen datum is beschikbaar";
        }
    }
} else {
    $melding[] = "de gekozen datum is beschikbaar";
}


header("Content-type: application/json");
echo json_encode($melding);
exit;
