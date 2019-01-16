<?php
require_once "./attributes/templates/dbcon.php";

$totaalprijs = 00.00;

$sql = "SELECT * FROM reservering LIMIT 3";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($reservering = $result->fetch_assoc()) {

         $aantalpersoonen[] = $reservering["personen"];
         $dag[] = $reservering["dag"];
         $arragement[] = $reservering["arragement"];
         $rvid[] = $reservering["id"];
         $psid[] = $reservering["persoon_id"];

         $sqlid = $reservering["persoon_id"];

        //  $sql = "SELECT * FROM persoon WHERE id=138";
        //  $persoon = $db->query($sql);
        //  if ($persoon->num_rows > 0) {
        //     // output data of each row
        //     while($row = $persoon->fetch_assoc()) {
        //         echo $persoon["naam"];
        //         // $naam[] = $persoon["naam"];
        //         $achternaam[] = $persoon["achternaam"];
        //         echo $aantalps;
        //     }
        // } else {
        //     $naam[] = "none";
        //     $achternaam[] = "none";
        //     echo "fail";
        // }
    }

    for ($i = 0; $i >= 2; $i++) {
        echo $aantalpersoonen["$i"];
        echo $dag["$i"];
        echo $arragement["$i"];
        echo $rvid["$i"];
        echo $psid["$i"];
        // echo $naam[$i];
        // echo $achternaam[$i]; 
    }

}

