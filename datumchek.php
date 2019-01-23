<?php

require_once "attributes/templates/dbcon.php";

$date = mysqli_escape_string($db, $_GET['date']);
$query = "SELECT * FROM reservering WHERE dag='$date' AND accepted=1 ";

$melding[] = "De gekozen datum $date is beschikbaar";

$result = $db->query($query);

if ($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $dagnummer = $row["dag"];
        $melding[] = "De gekozen datum $date is helaas niet beschikbaar";
    }
}

if( strtotime($date) < strtotime(date("Y-m-d")) ) {
    $melding[] = "De opgegeven datum $date ligt in het verleden.";
}

header("Content-type: application/json");
echo json_encode($melding);
exit;
